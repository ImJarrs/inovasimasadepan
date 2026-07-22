@include('admin.template.header')
<div class="container">
    <h1 class="mb-4">Edit Product</h1>

    <form action="{{ route('admin.card.update', $card->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $card->name }}">
            </div>

            <div class="form-group mb-3">
                <label for="image1">Product Image(1)</label>
                <input type="file" name="image1" id="image1" class="form-control"onchange="previewImage1(event)">
                <img id="imagePreview1" src="#" alt="Image Preview" style="display: none; margin-top: 20px; max-width: 200px; border-radius: 3px;">
                @if ($card->image1)
                    <img src="{{ asset('storage/' . $card->image1) }}" alt="Product Image" class="mt-2" width="100">
                @endif
            </div>
            <hr>
            
            <div class="form-group mb-3">
                <label for="image2">Product Image(2)</label>
                <input type="file" name="image2" id="image2" class="form-control"onchange="previewImage2(event)">
                <img id="imagePreview2" src="#" alt="Image Preview" style="display: none; margin-top: 20px; max-width: 200px; border-radius: 3px;">
                @if ($card->image2)
                    <img src="{{ asset('storage/' . $card->image2) }}" alt="Product Image" class="mt-2" width="100">
                @endif
            </div>
            <hr>
            
            <div class="form-group mb-3">
                <label for="image3">Product Image(3)</label>
                <input type="file" name="image3" id="image3" class="form-control"onchange="previewImage3(event)">
                <img id="imagePreview3" src="#" alt="Image Preview" style="display: none; margin-top: 20px; max-width: 200px; border-radius: 3px;">
                @if ($card->image3)
                    <img src="{{ asset('storage/' . $card->image3) }}" alt="Product Image" class="mt-2" width="100">
                @endif
            </div>
            <hr>
            
            <div class="form-group mb-3">
                <label for="image4">Product Image(4)</label>
                <input type="file" name="image4" id="image4" class="form-control"onchange="previewImage4(event)">
                <img id="imagePreview4" src="#" alt="Image Preview" style="display: none; margin-top: 20px; max-width: 200px; border-radius: 3px;">
                @if ($card->image4)
                    <img src="{{ asset('storage/' . $card->image4) }}" alt="Product Image" class="mt-2" width="100">
                @endif
            </div>
            <hr>
            
            <div class="form-group mb-3">
                <label for="image5">Product Image(5)</label>
                <input type="file" name="image5" id="image5" class="form-control"onchange="previewImage5(event)">
                <img id="imagePreview5" src="#" alt="Image Preview" style="display: none; margin-top: 20px; max-width: 200px; border-radius: 3px;">
                @if ($card->image5)
                    <img src="{{ asset('storage/' . $card->image5) }}" alt="Product Image" class="mt-2" width="100">
                @endif
            </div>
            <hr>

            <div class="form-group">
                <label for="label1">Label1</label>
                <input type="text" name="label1" id="label1" class="form-control" value="{{ $card->label1 }}">
            </div>

            <div class="form-group">
                <label for="desc1">Desc1</label>
                <textarea type="text" name="desc1" id="desc1" class="form-control">{{ $card->desc1 }}</textarea>
            </div>
            <hr>

            <div class="form-group">
                <label for="label2">Label2</label>
                <input type="text" name="label2" id="label2" class="form-control" value="{{ $card->label2 }}">
            </div>

            <div class="form-group">
                <label for="desc2">Desc2</label>
                <textarea type="text" name="desc2" id="desc2" class="form-control">{{ $card->desc2 }}</textarea>
            </div>
            <hr>

            <div class="form-group">
                <label for="label3">Label3</label>
                <input type="text" name="label3" id="label3" class="form-control" value="{{ $card->label3 }}">
            </div>

            <div class="form-group">
                <label for="desc3">Desc3</label>
                <textarea type="text" name="desc3" id="desc3" class="form-control">{{ $card->desc3 }}</textarea>
            </div>
            <hr>

            <div class="form-group">
                <label for="label4">Label4</label>
                <input type="text" name="label4" id="label4" class="form-control" value="{{ $card->label4 }}">
            </div>

            <div class="form-group">
                <label for="desc4">Desc4</label>
                <textarea type="text" name="desc4" id="desc4" class="form-control">{{ $card->desc4 }}</textarea>
            </div>
            <hr>

            <div class="form-group">
                <label for="label5">Label5</label>
                <input type="text" name="label5" id="label5" class="form-control" value="{{ $card->label5 }}">
            </div>

            <div class="form-group">
                <label for="desc5">Desc5</label>
                <textarea type="text" name="desc5" id="desc5" class="form-control">{{ $card->desc5 }}</textarea>
            </div>
            <hr>

            <div class="form-group">
                <label for="label6">Label6</label>
                <input type="text" name="label6" id="label6" class="form-control" value="{{ $card->label6 }}">
            </div>

            <div class="form-group">
                <label for="desc6">Desc6</label>
                <textarea type="text" name="desc6" id="desc6" class="form-control">{{ $card->desc6 }}</textarea>
            </div>
            <hr>

            <div class="form-group">
                <label for="label7">Label7</label>
                <input type="text" name="label7" id="label7" class="form-control" value="{{ $card->label7 }}">
            </div>

            <div class="form-group">
                <label for="desc7">Desc7</label>
                <textarea type="text" name="desc7" id="desc7" class="form-control">{{ $card->desc7 }}</textarea>
            </div>
            <hr>

            <div class="form-group">
                <label for="label8">Label8</label>
                <input type="text" name="label8" id="label8" class="form-control" value="{{ $card->label8 }}">
            </div>

            <div class="form-group">
                <label for="desc8">Desc8</label>
                <textarea type="text" name="desc8" id="desc8" class="form-control">{{ $card->desc8 }}</textarea>
            </div>
            <hr>

            <div class="form-group">
                <label for="label9">Label9</label>
                <input type="text" name="label9" id="label9" class="form-control" value="{{ $card->label9 }}">
            </div>

            <div class="form-group">
                <label for="desc9">Desc9</label>
                <textarea type="text" name="desc9" id="desc9" class="form-control">{{ $card->desc9 }}</textarea>
            </div>
            <hr>

            <div class="form-group">
                <label for="label10">Label10</label>
                <input type="text" name="label10" id="label10" class="form-control" value="{{ $card->label10 }}">
            </div>

            <div class="form-group">
                <label for="desc10">Desc10</label>
                <textarea type="text" name="desc10" id="desc10" class="form-control">{{ $card->desc10 }}</textarea>
            </div>
            <hr>

            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
    <center><a href="{{ route('admin.card') }}" class="btn btn-success"><i class="bi bi-arrow-left"></i> Back</a></center>
</div>

@include('admin.template.footer')
