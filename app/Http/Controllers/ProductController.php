<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Card;
use App\Models\Wristband;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function card(){
        $cards = Card::orderBy('created_at', 'desc')->get();
        $cardBanner = Banner::orderBy('created_at', 'asc')->limit(1)->pluck('card_banner');

        return view('products.rfid-card', compact('cards', 'cardBanner'));
    }
    
    public function adminCard(){
        $cards = Card::orderBy('created_at', 'desc')->get();
        return view('admin.card.list', compact('cards'));
    }
    
    public function createCard(){
        return view('admin.card.create');
    }

    public function storeCard(Request $request){
        $validateData = $request->validate([
            'name' => 'required|string|unique:cards,name',
            'image1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'image2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'image3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'image4' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'image5' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'label1' => 'nullable|string',
            'desc1' => 'nullable|string',
            'label2' => 'nullable|string',
            'desc2' => 'nullable|string',
            'label3' => 'nullable|string',
            'desc3' => 'nullable|string',
            'label4' => 'nullable|string',
            'desc4' => 'nullable|string',
            'label5' => 'nullable|string',
            'desc5' => 'nullable|string',
            'label6' => 'nullable|string',
            'desc6' => 'nullable|string',
            'label7' => 'nullable|string',
            'desc7' => 'nullable|string',
            'label8' => 'nullable|string',
            'desc8' => 'nullable|string',
            'label9' => 'nullable|string',
            'desc9' => 'nullable|string',
            'label10' => 'nullable|string',
            'desc10' => 'nullable|string',
        ]);
    
        // if ($request->hasFile('card_image')) {
        //     $file = $request->file('card_image');
        //     $filename = uniqid() . '_' . $file->getClientOriginalName();
        //     $path = $file->storeAs("uploads/products/rfid_card", $filename, 'public'); // ✅ Simpan di storage/app/public/uploads/products/rfid_card
        //     $validateData['card_image'] = $path;  // ✅ Simpan path lengkap di database
        // }

        foreach (['image1', 'image2', 'image3', 'image4', 'image5'] as $productImage) {
            if ($request->hasFile($productImage)) {
                $file = $request->file($productImage);
                $filename = uniqid() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs("uploads/products/rfid_card/{$validateData['name']}", $filename, 'public');
                $validateData[$productImage] = $path;
            }
        }
    
        Card::create($validateData);
        return redirect()->route('admin.card')->with('success', 'Product added successfully!');
    }

    public function editCard($id){
        $card = Card::findOrFail($id);
        return view('admin.card.edit', compact('card'));
    }

    public function updateCard(Request $request, $id){
        $card = Card::findOrFail($id);
    
        $validateData = $request->validate([
            'name' => 'required|string|unique:cards,name,' . $id,
            'image1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'image2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'image3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'image4' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'image5' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'label1' => 'nullable|string',
            'desc1' => 'nullable|string',
            'label2' => 'nullable|string',
            'desc2' => 'nullable|string',
            'label3' => 'nullable|string',
            'desc3' => 'nullable|string',
            'label4' => 'nullable|string',
            'desc4' => 'nullable|string',
            'label5' => 'nullable|string',
            'desc5' => 'nullable|string',
            'label6' => 'nullable|string',
            'desc6' => 'nullable|string',
            'label7' => 'nullable|string',
            'desc7' => 'nullable|string',
            'label8' => 'nullable|string',
            'desc8' => 'nullable|string',
            'label9' => 'nullable|string',
            'desc9' => 'nullable|string',
            'label10' => 'nullable|string',
            'desc10' => 'nullable|string',
        ]);

        foreach (['image1', 'image2', 'image3', 'image4', 'image5'] as $productImage) {
            if ($request->hasFile($productImage)) {
                if ($card->$productImage) {
                    Storage::disk('public')->delete($card->$productImage);
                }
                
                $file = $request->file($productImage);
                $filename = uniqid() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs("uploads/products/rfid_card/{$validateData['name']}", $filename, 'public');
                $validateData[$productImage] = $path;
            }
        }

        $oldName = $card->name;

        if ($oldName !== $validateData['name']) {
            $oldDirectory = "uploads/products/rfid_card/{$oldName}";
            $newDirectory = "uploads/products/rfid_card/{$validateData['name']}";

            if (Storage::disk('public')->exists($oldDirectory)) {
                Storage::disk('public')->move($oldDirectory, $newDirectory);
            }
        }
    
        $card->update($validateData);
        return redirect()->route('admin.card')->with('success', 'Product updated successfully!');
    }    

    public function destroyCard($id){
        $card = Card::findOrFail($id);
        $productImage = $card->pluck(['image1', 'image2', 'image3', 'image4', 'image5']);

        if ($card->$productImage) {
            Storage::delete("public/" . $card->$productImage);
        }

        $card->delete();
        return redirect()->route('admin.card')->with('success', 'Product deleted successfully!');
    }

    // WRISTBAND
    public function wristband(){
        $wristbands = Wristband::orderBy('created_at', 'desc')->get();
        $wristbandBanner = Banner::orderBy('created_at', 'asc')->limit(1)->pluck('wristband_banner');

        return view('products.rfid-wristband', compact('wristbands', 'wristbandBanner'));
    }
    
    public function adminWristband(){
        $wristbands = Wristband::orderBy('created_at', 'desc')->get();
        return view('admin.wristband.list', compact('wristbands'));
    }
    
    public function createWristband(){
        return view('admin.wristband.create');
    }

    public function storeWristband(Request $request){
        $validateData = $request->validate([
            'name' => 'required|string|unique:cards,name',
            'image1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'image2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'image3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'image4' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'image5' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'label1' => 'nullable|string',
            'desc1' => 'nullable|string',
            'label2' => 'nullable|string',
            'desc2' => 'nullable|string',
            'label3' => 'nullable|string',
            'desc3' => 'nullable|string',
            'label4' => 'nullable|string',
            'desc4' => 'nullable|string',
            'label5' => 'nullable|string',
            'desc5' => 'nullable|string',
            'label6' => 'nullable|string',
            'desc6' => 'nullable|string',
            'label7' => 'nullable|string',
            'desc7' => 'nullable|string',
            'label8' => 'nullable|string',
            'desc8' => 'nullable|string',
            'label9' => 'nullable|string',
            'desc9' => 'nullable|string',
            'label10' => 'nullable|string',
            'desc10' => 'nullable|string',
        ]);

        foreach (['image1', 'image2', 'image3', 'image4', 'image5'] as $productImage) {
            if ($request->hasFile($productImage)) {
                $file = $request->file($productImage);
                $filename = uniqid() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs("uploads/products/rfid_wristband/{$validateData['name']}/", $filename, 'public');
                $validateData[$productImage] = $path;
            }
        }

        Wristband::create($validateData);
        return redirect()->route('admin.wristband')->with('success', 'Product added successfully!');
    }


    public function editWristband($id){
        $wristband = Wristband::findOrFail($id);
        return view('admin.wristband.edit', compact('wristband'));
    }

    public function updateWristband(Request $request, $id){
        $wristband = Wristband::findOrFail($id);
    
        $validateData = $request->validate([
            'name' => 'required|string|unique:cards,name,' . $id,
            'image1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'image2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'image3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'image4' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'image5' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'label1' => 'nullable|string',
            'desc1' => 'nullable|string',
            'label2' => 'nullable|string',
            'desc2' => 'nullable|string',
            'label3' => 'nullable|string',
            'desc3' => 'nullable|string',
            'label4' => 'nullable|string',
            'desc4' => 'nullable|string',
            'label5' => 'nullable|string',
            'desc5' => 'nullable|string',
            'label6' => 'nullable|string',
            'desc6' => 'nullable|string',
            'label7' => 'nullable|string',
            'desc7' => 'nullable|string',
            'label8' => 'nullable|string',
            'desc8' => 'nullable|string',
            'label9' => 'nullable|string',
            'desc9' => 'nullable|string',
            'label10' => 'nullable|string',
            'desc10' => 'nullable|string',
        ]);

        foreach (['image1', 'image2', 'image3', 'image4', 'image5'] as $productImage) {
            if ($request->hasFile($productImage)) {
                if ($wristband->$productImage) {
                    Storage::disk('public')->delete($wristband->$productImage);
                }
                
                $file = $request->file($productImage);
                $filename = uniqid() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs("uploads/products/rfid_wristband/{$validateData['name']}", $filename, 'public');
                $validateData[$productImage] = $path;
            }
        }

        $oldName = $wristband->name;

        if ($oldName !== $validateData['name']) {
            $oldDirectory = "uploads/products/rfid_wristband/{$oldName}";
            $newDirectory = "uploads/products/rfid_wristband/{$validateData['name']}";

            if (Storage::disk('public')->exists($oldDirectory)) {
                Storage::disk('public')->move($oldDirectory, $newDirectory);
            }
        }
    
        $wristband->update($validateData);
        return redirect()->route('admin.wristband')->with('success', 'Product updated successfully!');
    }    

    public function destroyWristband($id){
        $wristband = Wristband::findOrFail($id);
        $productImage = $wristband->pluck(['image1', 'image2', 'image3', 'image4', 'image5']);

        if ($wristband->$productImage) {
            Storage::delete("public/" . $wristband->$productImage);
        }

        $wristband->delete();
        return redirect()->route('admin.wristband')->with('success', 'Product deleted successfully!');
    }
}
