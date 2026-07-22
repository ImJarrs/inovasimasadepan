<?php

namespace App\Http\Controllers;

use App\Models\ProductShowcase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductShowcaseController extends Controller
{
    public const STORAGE_ROOT = 'uploads/products/rfid-showcase';

    public function rfid()
    {
        $products = $this->showcaseProductsOrFallback();

        return view('products.rfid-showcase', compact('products'));
    }

    public function wristband()
    {
        $products = $this->showcaseProductsOrFallback();

        return view('products.rfid-showcase', compact('products'));
    }

    public function adminIndex()
    {
        if (! Schema::hasTable('product_showcases')) {
            return view('admin.product-showcase.index', [
                'products' => collect(),
                'missingTable' => true,
            ]);
        }

        $products = ProductShowcase::orderByDesc('created_at')->get();

        return view('admin.product-showcase.index', compact('products'));
    }

    public function create()
    {
        return view('admin.product-showcase.form', [
            'product' => new ProductShowcase(),
            'mode' => 'create',
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->validatePayload($request);
        $data['slug'] = Str::slug($data['name']);
        $data['hero_image'] = $this->storeSingleFile($request, 'hero_image', $data['slug'], 'hero');
        $data['advantages'] = $this->parseTextBlock($request->input('advantages_text'));
        $data['detail_cards'] = $this->parseTextBlock($request->input('detail_cards_text'));
        $data['gallery_images'] = $this->storeMultipleFiles($request, 'gallery_images', $data['slug'], 'gallery');

        ProductShowcase::create($data);

        return redirect()->route('admin.product.showcase.index')->with('success', 'Product showcase created successfully.');
    }

    public function edit(ProductShowcase $product_showcase)
    {
        return view('admin.product-showcase.form', [
            'product' => $product_showcase,
            'mode' => 'edit',
        ]);
    }

    public function update(Request $request, ProductShowcase $product_showcase)
    {
        $data = $this->validatePayload($request, $product_showcase->id);
        $oldSlug = $product_showcase->slug;
        $data['slug'] = Str::slug($data['name']);
        $data['hero_image'] = $this->replaceSingleFile($request, 'hero_image', $product_showcase->hero_image, $data['slug'], 'hero');
        $data['advantages'] = $this->parseTextBlock($request->input('advantages_text'));
        $data['detail_cards'] = $this->parseTextBlock($request->input('detail_cards_text'));
        $data['gallery_images'] = $this->replaceMultipleFiles($request, 'gallery_images', $product_showcase->gallery_images ?? [], $data['slug'], 'gallery');

        if ($oldSlug !== $data['slug']) {
            $this->moveProductDirectory($oldSlug, $data['slug']);
            $data['hero_image'] = $this->rewritePathPrefix($data['hero_image'], $oldSlug, $data['slug']);
            $data['gallery_images'] = $this->rewritePathPrefixArray($data['gallery_images'], $oldSlug, $data['slug']);
        }

        $product_showcase->update($data);

        return redirect()->route('admin.product.showcase.index')->with('success', 'Product showcase updated successfully.');
    }

    public function destroy(ProductShowcase $product_showcase)
    {
        $this->deleteProductDirectory($product_showcase->slug);
        $product_showcase->delete();

        return redirect()->route('admin.product.showcase.index')->with('success', 'Product showcase deleted successfully.');
    }

    protected function validatePayload(Request $request, ?int $ignoreId = null): array
    {
        return $request->validate([
            'name' => ['required', 'string', 'max:255', $ignoreId ? 'unique:product_showcases,name,' . $ignoreId : 'unique:product_showcases,name'],
            'page_title' => ['nullable', 'string', 'max:255'],
            'hero_image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp,svg', 'max:5120'],
            'gallery_images.*' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp,svg', 'max:5120'],
            'advantages_text' => ['nullable', 'string'],
            'detail_cards_text' => ['nullable', 'string'],
        ]);
    }

    protected function parseTextBlock(?string $value): array
    {
        return array_values(array_filter(array_map('trim', preg_split('/\r\n|\r|\n/', (string) $value) ?: []), fn ($item) => $item !== ''));
    }

    protected function storeSingleFile(Request $request, string $field, string $slug, string $bucket): ?string
    {
        if (! $request->hasFile($field)) {
            return null;
        }

        $file = $request->file($field);
        $filename = uniqid() . '_' . $file->getClientOriginalName();

        return $file->storeAs(self::STORAGE_ROOT . "/{$slug}/{$bucket}", $filename, 'public');
    }

    protected function storeMultipleFiles(Request $request, string $field, string $slug, string $bucket): array
    {
        $paths = [];

        foreach ((array) $request->file($field, []) as $file) {
            if (! $file) {
                continue;
            }

            $filename = uniqid() . '_' . $file->getClientOriginalName();
            $paths[] = $file->storeAs(self::STORAGE_ROOT . "/{$slug}/{$bucket}", $filename, 'public');
        }

        return $paths;
    }

    protected function replaceSingleFile(Request $request, string $field, ?string $existingPath, string $slug, string $bucket): ?string
    {
        if (! $request->hasFile($field)) {
            return $existingPath;
        }

        if ($existingPath) {
            Storage::disk('public')->delete($existingPath);
        }

        return $this->storeSingleFile($request, $field, $slug, $bucket);
    }

    protected function replaceMultipleFiles(Request $request, string $field, array $existingPaths, string $slug, string $bucket): array
    {
        if (! $request->hasFile($field)) {
            return $existingPaths;
        }

        foreach ($existingPaths as $path) {
            Storage::disk('public')->delete($path);
        }

        return $this->storeMultipleFiles($request, $field, $slug, $bucket);
    }

    protected function moveProductDirectory(string $oldSlug, string $newSlug): void
    {
        $oldDirectory = self::STORAGE_ROOT . "/{$oldSlug}";
        $newDirectory = self::STORAGE_ROOT . "/{$newSlug}";

        if (Storage::disk('public')->exists($oldDirectory)) {
            Storage::disk('public')->move($oldDirectory, $newDirectory);
        }
    }

    protected function deleteProductDirectory(string $slug): void
    {
        $directory = self::STORAGE_ROOT . "/{$slug}";

        if (Storage::disk('public')->exists($directory)) {
            Storage::disk('public')->deleteDirectory($directory);
        }
    }

    protected function rewritePathPrefix(?string $path, string $oldSlug, string $newSlug): ?string
    {
        if (! $path) {
            return $path;
        }

        return str_replace("/{$oldSlug}/", "/{$newSlug}/", $path);
    }

    protected function rewritePathPrefixArray(array $paths, string $oldSlug, string $newSlug): array
    {
        return array_map(fn ($path) => $this->rewritePathPrefix($path, $oldSlug, $newSlug), $paths);
    }

    protected function fallbackProduct(
        string $name,
        string $slug,
        string $pageTitle,
        array $advantages = [],
        array $detailCards = [],
        array $galleryImages = []
    ): ProductShowcase
    {
        return new ProductShowcase([
            'name' => $name,
            'slug' => $slug,
            'page_title' => $pageTitle,
            'advantages' => $advantages ?: [
                'Chip | Mifare 1K / F08 / Ntag 213/216 / Ultralight / TK4100 / T5577',
                'Customization | Glossy / Matte / Frosted',
                'Printing | 4C Offset / UV Spot / Emboss / Hologram, etc',
            ],
            'detail_cards' => $detailCards ?: [
                'Feature|PVC|PET (Bio-S)|PETG (Eco)',
                'Durability|Good|Excellent|Excellent',
                'Flexibility|Moderate|Low|High',
                'Eco-Friendliness|Low|Medium|High',
                'Heat Resistance|Moderate|High|High',
                'Scratch Resistance|Moderate|High|Moderate',
                'Lifespan|Medium Term|Long Term|Long Term',
            ],
            'gallery_images' => $galleryImages,
        ]);
    }

    protected function findProductOrFallback(string $name, string $slug, string $pageTitle): ProductShowcase
    {
        if (! Schema::hasTable('product_showcases')) {
            return $this->fallbackProduct($name, $slug, $pageTitle);
        }

        return ProductShowcase::where('slug', $slug)->first()
            ?? $this->fallbackProduct($name, $slug, $pageTitle);
    }

    protected function showcaseProductsOrFallback()
    {
        if (! Schema::hasTable('product_showcases')) {
            return collect([
                $this->fallbackProduct(
                    'PVC, PET, PETG Material',
                    'pvc-pet-petg-material',
                    'Regular Series',
                    [
                        'Chip | Mifare 1K / F08 / Ntag 213/216 / Ultralight TK4100 / T5577',
                        'Customization | Glossy / Matte / Frosted',
                        'Printing | 4C Offset / UV Spot / Emboss / Hologram, etc',
                    ],
                    [
                        'Feature|PVC|PET (Bio-S)|PETG (Eco)',
                        'Durability|Good|Excellent|Excellent',
                        'Flexibility|Moderate|Low|High',
                        'Eco-Friendliness|Low|Medium|High',
                        'Heat Resistance|Moderate|High|High',
                        'Scratch Resistance|Moderate|High|Moderate',
                        'Lifespan|Medium Term|Long Term|Long Term',
                    ],
                    [
                        'assets/img/recom-fams.webp',
                        'assets/img/bg-web.webp',
                        'assets/img/about-us.webp',
                    ]
                ),
                $this->fallbackProduct(
                    'WOODEN Material',
                    'wooden-material',
                    'Environmental Series',
                    [
                        'Chip | Mifare 1K / F08 / Ntag 213/216 / Ultralight / TK4100 / T5577',
                        'Thickness | 1.1mm - 1.4mm',
                        'Customization | Laser Engraved, 4C Offset, UV Printing, QR Code',
                    ],
                    [
                        'Feature|Wooden Material|Finish Option|Notes',
                        'Laser Engraving|Yes|Matte / Natural|For premium branding',
                        '4C Offset Printing|Yes|Optional|For graphic-heavy layouts',
                        'QR Code|Yes|Optional|For utility and access flows',
                    ],
                    [
                        'assets/img/welcome.webp',
                        'assets/img/bg-web.webp',
                        'assets/img/about-us.webp',
                    ]
                ),
            ]);
        }

        $products = ProductShowcase::orderBy('created_at')->get();

        return $products->isNotEmpty() ? $products : collect([
            $this->fallbackProduct(
                'PVC, PET, PETG Material',
                'pvc-pet-petg-material',
                'Regular Series',
                [
                    'Chip | Mifare 1K / F08 / Ntag 213/216 / Ultralight TK4100 / T5577',
                    'Customization | Glossy / Matte / Frosted',
                    'Printing | 4C Offset / UV Spot / Emboss / Hologram, etc',
                ],
                [
                    'Feature|PVC|PET (Bio-S)|PETG (Eco)',
                    'Durability|Good|Excellent|Excellent',
                    'Flexibility|Moderate|Low|High',
                    'Eco-Friendliness|Low|Medium|High',
                    'Heat Resistance|Moderate|High|High',
                    'Scratch Resistance|Moderate|High|Moderate',
                    'Lifespan|Medium Term|Long Term|Long Term',
                ],
                [
                    'assets/img/recom-fams.webp',
                    'assets/img/bg-web.webp',
                    'assets/img/about-us.webp',
                ]
            ),
            $this->fallbackProduct(
                'WOODEN Material',
                'wooden-material',
                'Environmental Series',
                [
                    'Chip | Mifare 1K / F08 / Ntag 213/216 / Ultralight / TK4100 / T5577',
                    'Thickness | 1.1mm - 1.4mm',
                    'Customization | Laser Engraved, 4C Offset, UV Printing, QR Code',
                ],
                [
                    'Feature|Wooden Material|Finish Option|Notes',
                    'Laser Engraving|Yes|Matte / Natural|For premium branding',
                    '4C Offset Printing|Yes|Optional|For graphic-heavy layouts',
                    'QR Code|Yes|Optional|For utility and access flows',
                ],
                [
                    'assets/img/welcome.webp',
                    'assets/img/bg-web.webp',
                    'assets/img/about-us.webp',
                ]
            ),
        ]);
    }
}
