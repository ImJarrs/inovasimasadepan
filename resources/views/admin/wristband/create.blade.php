@include('admin.template.header')

<style>
    label, textarea{
        color: rgba(0, 0, 0, 0.700);
    }
</style>

<div class="container m-2">
    <h1 class="h3 mb-4 text-gray-800">Add New Product</h1>

    <form action="{{ route('admin.wristband.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="image1" class="form-label">Product Image(1)</label>
                <input class="form-control" type="file" name="image1" id="image1" onchange="previewImage1(event)">
                <img id="imagePreview1" src="#" alt="Image Preview" style="display: none; margin-top: 20px; max-width: 200px; border-radius: 3px;">
            </div>         

            <div class="form-group">
                <label for="image2" class="form-label">Product Image(2)</label>
                <input class="form-control" type="file" name="image2" id="image2" onchange="previewImage2(event)">
                <img id="imagePreview2" src="#" alt="Image Preview" style="display: none; margin-top: 20px; max-width: 200px; border-radius: 3px;">
            </div>         

            <div class="form-group">
                <label for="image3" class="form-label">Product Image(3)</label>
                <input class="form-control" type="file" name="image3" id="image3" onchange="previewImage3(event)">
                <img id="imagePreview3" src="#" alt="Image Preview" style="display: none; margin-top: 20px; max-width: 200px; border-radius: 3px;">
            </div>         

            <div class="form-group">
                <label for="image4" class="form-label">Product Image(4)</label>
                <input class="form-control" type="file" name="image4" id="image4" onchange="previewImage4(event)">
                <img id="imagePreview4" src="#" alt="Image Preview" style="display: none; margin-top: 20px; max-width: 200px; border-radius: 3px;">
            </div>         

            <div class="form-group">
                <label for="image5" class="form-label">Product Image(5)</label>
                <input class="form-control" type="file" name="image5" id="image5" onchange="previewImage5(event)">
                <img id="imagePreview5" src="#" alt="Image Preview" style="display: none; margin-top: 20px; max-width: 200px; border-radius: 3px;">
            </div>
            
            <div class="form-group">
                <label for="label1">Label1</label>
                <input type="text" name="label1" id="label1" class="form-control">
            </div>

            <div class="form-group">
                <label for="desc1">Desc1</label>
                <textarea type="text" name="desc1" id="desc1" class="form-control"></textarea>
            </div>
            <hr>

            <div class="form-group">
                <label for="label2">Label2</label>
                <input type="text" name="label2" id="label2" class="form-control">
            </div>

            <div class="form-group">
                <label for="desc2">Desc2</label>
                <textarea type="text" name="desc2" id="desc2" class="form-control"></textarea>
            </div>
            <hr>

            <div class="form-group">
                <label for="label3">Label3</label>
                <input type="text" name="label3" id="label3" class="form-control">
            </div>

            <div class="form-group">
                <label for="desc3">Desc3</label>
                <textarea type="text" name="desc3" id="desc3" class="form-control"></textarea>
            </div>
            <hr>

            <div class="form-group">
                <label for="label4">Label4</label>
                <input type="text" name="label4" id="label4" class="form-control">
            </div>

            <div class="form-group">
                <label for="desc4">Desc4</label>
                <textarea type="text" name="desc4" id="desc4" class="form-control"></textarea>
            </div>
            <hr>

            <div class="form-group">
                <label for="label5">Label5</label>
                <input type="text" name="label5" id="label5" class="form-control">
            </div>

            <div class="form-group">
                <label for="desc5">Desc5</label>
                <textarea type="text" name="desc5" id="desc5" class="form-control"></textarea>
            </div>
            <hr>

            <div class="form-group">
                <label for="label6">Label6</label>
                <input type="text" name="label6" id="label6" class="form-control">
            </div>

            <div class="form-group">
                <label for="desc6">Desc6</label>
                <textarea type="text" name="desc6" id="desc6" class="form-control"></textarea>
            </div>
            <hr>

            <div class="form-group">
                <label for="label7">Label7</label>
                <input type="text" name="label7" id="label7" class="form-control">
            </div>

            <div class="form-group">
                <label for="desc7">Desc7</label>
                <textarea type="text" name="desc7" id="desc7" class="form-control"></textarea>
            </div>
            <hr>

            <div class="form-group">
                <label for="label8">Label8</label>
                <input type="text" name="label8" id="label8" class="form-control">
            </div>

            <div class="form-group">
                <label for="desc8">Desc8</label>
                <textarea type="text" name="desc8" id="desc8" class="form-control"></textarea>
            </div>
            <hr>

            <div class="form-group">
                <label for="label9">Label9</label>
                <input type="text" name="label9" id="label9" class="form-control">
            </div>

            <div class="form-group">
                <label for="desc9">Desc9</label>
                <textarea type="text" name="desc9" id="desc9" class="form-control"></textarea>
            </div>
            <hr>

            <div class="form-group">
                <label for="label10">Label10</label>
                <input type="text" name="label10" id="label10" class="form-control">
            </div>

            <div class="form-group">
                <label for="desc10">Desc10</label>
                <textarea type="text" name="desc10" id="desc10" class="form-control"></textarea>
            </div>
            <hr>

            <button type="submit" class="btn btn-primary mb-4">Submit</button>
        </div>
    </form>
    <center><a href="{{ route('admin.wristband') }}" class="btn btn-success"><i class="bi bi-arrow-left"></i> Back</a></center>
</div>

@include('admin.template.footer')