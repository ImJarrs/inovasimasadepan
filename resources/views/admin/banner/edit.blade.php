@include('admin.template.header')

<div class="container m-2">
    <h1 class="h3 mb-4 text-gray-800">Edit Banner</h1>

    <form action="{{ route('admin.banner.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
            
                <div class="form-group">
                    <label for="home_banner" class="form-label">Home Banner</label>
                    
                    @if ($banner->home_banner)
                        <img src="{{ asset('storage/' . $banner->home_banner) }}" alt="home_banner" style="max-width: 200px; margin-bottom: 10px; border-radius: 5px; margin-top: 10px;">
                    @endif
                    
                    <input class="form-control" type="file" name="home_banner" id="home_banner" onchange="previewImage1(event)">
                    <img id="imagePreview1" src="#" alt="Image Preview" style="display: none; margin-top: 50px; max-width: 200px; border-radius: 3px;">
                    <hr>
                    
                <div class="form-group">
                    <label for="promo_banner" class="form-label">Promo Banner</label>
                    
                    @if ($banner->promo_banner)
                        <img src="{{ asset('storage/' . $banner->promo_banner) }}" alt="promo_banner" style="max-width: 200px; margin-bottom: 10px; border-radius: 5px; margin-top: 10px;">
                    @endif
                    
                    <input class="form-control" type="file" name="promo_banner" id="promo_banner" onchange="previewImage2(event)">
                    <img id="imagePreview2" src="#" alt="Image Preview" style="display: none; margin-top: 50px; max-width: 200px; border-radius: 3px;">
                    <hr>

                <div class="form-group">
                    <label for="card_banner" class="form-label">Card Banner</label>
                    
                    @if ($banner->card_banner)
                        <img src="{{ asset('storage/' . $banner->card_banner) }}" alt="card_banner" style="max-width: 200px; margin-bottom: 10px; border-radius: 5px; margin-top: 10px;">
                    @endif
                    
                    <input class="form-control" type="file" name="card_banner" id="card_banner" onchange="previewImage3(event)">
                    <img id="imagePreview3" src="#" alt="Image Preview" style="display: none; margin-top: 50px; max-width: 200px; border-radius: 3px;">
                    <hr>

                <div class="form-group">
                    <label for="wristband_banner" class="form-label">Wristband Banner</label>
                    
                    @if ($banner->wristband_banner)
                        <img src="{{ asset('storage/' . $banner->wristband_banner) }}" alt="wristband_banner" style="max-width: 200px; margin-bottom: 10px; border-radius: 5px; margin-top: 10px;">
                    @endif
                    
                    <input class="form-control" type="file" name="wristband_banner" id="wristband_banner" onchange="previewImage4(event)">
                    <img id="imagePreview4" src="#" alt="Image Preview" style="display: none; margin-top: 50px; max-width: 200px; border-radius: 3px;">
                    <hr>

                <div class="form-group">
                    <label for="blog_banner" class="form-label">Blog Banner</label>
                    
                    @if ($banner->blog_banner)
                        <img src="{{ asset('storage/' . $banner->blog_banner) }}" alt="blog_banner" style="max-width: 200px; margin-bottom: 10px; border-radius: 5px; margin-top: 10px;">
                    @endif
                    
                    <input class="form-control" type="file" name="blog_banner" id="blog_banner" onchange="previewImage5(event)">
                    <img id="imagePreview5" src="#" alt="Image Preview" style="display: none; margin-top: 50px; max-width: 200px; border-radius: 3px;">
                    <hr>

                </div>

            <button type="submit" class="btn btn-primary mb-4">Update</button>
        </div>
    </form>
    <center><a href="{{ route('admin.banner') }}" class="btn btn-success"><i class="bi bi-arrow-left"></i> Back</a></center>
</div>

<script>

    function previewImage1(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('imagePreview1');
            output.src = reader.result;
            output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    }

    function previewImage2(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('imagePreview2');
            output.src = reader.result;
            output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    }

    function previewImage3(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('imagePreview3');
            output.src = reader.result;
            output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    }

    function previewImage4(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('imagePreview4');
            output.src = reader.result;
            output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    }

    function previewImage5(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('imagePreview5');
            output.src = reader.result;
            output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    }

</script>

@include('admin.template.footer')
