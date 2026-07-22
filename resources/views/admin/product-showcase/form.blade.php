@include('admin.template.header')

@php
    $isEdit = $mode === 'edit';
    $routeName = $isEdit ? 'admin.product.showcase.update' : 'admin.product.showcase.store';
@endphp

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">{{ $isEdit ? 'Edit' : 'Add' }} Product Showcase</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ $isEdit ? route($routeName, $product) : route($routeName) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if ($isEdit)
            @method('PUT')
        @endif

        @php
            $advantagesText = old('advantages_text', implode("\n", $product->advantages ?? []));
            $specSectionsText = old('spec_sections_text', implode("\n", $product->spec_sections ?? []));
            $detailCardsText = old('detail_cards_text', implode("\n", $product->detail_cards ?? []));
        @endphp

        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Product / Material Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $product->name) }}">
            </div>
            <div class="col-md-6">
                <label class="form-label">Series Title</label>
                <input type="text" name="page_title" class="form-control" value="{{ old('page_title', $product->page_title) }}">
            </div>
            <div class="col-md-6">
                <label class="form-label">Hero Image</label>
                <input type="file" name="hero_image" class="form-control">
                @if ($product->hero_image)
                    <img src="{{ asset('storage/' . $product->hero_image) }}" alt="" class="mt-2" style="max-width: 180px;">
                @endif
            </div>
            <div class="col-12">
                <label class="form-label">Top Specs</label>
                <textarea name="advantages_text" class="form-control" rows="5" placeholder="Use Label | Value on each line">{{ $advantagesText }}</textarea>
                <small class="text-muted">One line per spec. Use <code>Label | Value</code> so the public page can render the bold label and the detail text.</small>
            </div>
            <div class="col-12">
                <label class="form-label">Material Table Rows</label>
                <textarea name="detail_cards_text" class="form-control" rows="6" placeholder="Feature | PVC | PET | PETG">{{ $detailCardsText }}</textarea>
                <small class="text-muted">Each line becomes one table row. Use <code>|</code> to separate columns, starting with the header row.</small>
            </div>
            <div class="col-md-6">
                <label class="form-label">Gallery Images</label>
                <input type="file" name="gallery_images[]" class="form-control" multiple>
                @if (!empty($product->gallery_images))
                    <div class="d-flex flex-wrap gap-2 mt-2">
                        @foreach ($product->gallery_images as $image)
                            <img src="{{ asset('storage/' . $image) }}" alt="" style="max-width: 90px; max-height: 90px; object-fit: cover;">
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('admin.product.showcase.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </form>
</div>

@include('admin.template.footer')
