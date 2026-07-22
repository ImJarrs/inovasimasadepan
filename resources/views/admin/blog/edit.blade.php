@include('admin.template.header')

<style>
    label, textarea {
        color: rgba(0, 0, 0, 0.700);
    }
</style>

<div class="container m-2">
    <h1 class="h3 mb-4 text-gray-800">Edit Blog</h1>

    <form action="{{ route('admin.blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $blog->title }}">
            </div>

            <div class="form-group mb-3">
                <label for="desc1">Description (1)</label>
                <input id="desc1" type="hidden" name="desc1" value="{{ $blog->desc1 }}">
                <trix-editor input="desc1"></trix-editor>
            </div>

            <div class="form-group mb-3">
                <label for="desc2">Description (2)</label>
                <input id="desc2" type="hidden" name="desc2" value="{{ $blog->desc2 }}">
                <trix-editor input="desc2"></trix-editor>
            </div>

            <div class="form-group">
                <label for="image1" class="form-label">Image Description (1)</label>
                <input class="form-control" type="file" name="image1" id="image1" onchange="previewImage1(event, 'imagePreview1')">
                <img id="imagePreview1" src="{{ asset('storage/' . $blog->image1) }}" 
                     alt="Image 1 Preview" class="mt-2" style="max-width: 200px; border-radius: 3px;">
            </div>

            <div class="form-group">
                <label for="image2" class="form-label">Image Description (2)</label>
                <input class="form-control" type="file" name="image2" id="image2" onchange="previewImage2(event, 'imagePreview2')">
                <img id="imagePreview2" src="{{ asset('storage/' . $blog->image2) }}" 
                     alt="Image 2 Preview" class="mt-2" style="max-width: 200px; border-radius: 3px;">
            </div>

            <button type="submit" class="btn btn-primary mb-4">Update</button>
        </div>
    </form>
    
    <center><a href="{{ route('admin.blog') }}" class="btn btn-success"><i class="bi bi-arrow-left"></i> Back</a></center>
</div>

<script>
    function previewImage1(event, previewId) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById(previewId);
            output.src = reader.result;
            output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    }

    function previewImage2(event, previewId) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById(previewId);
            output.src = reader.result;
            output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

@include('admin.template.footer')
