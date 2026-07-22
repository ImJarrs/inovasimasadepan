@include('admin.template.header')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
   

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            {{-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> --}}
            <a href="{{ route('admin.blog.create')}}" class="btn btn-success mt-3"> <i class="bi bi-plus-circle"></i> New</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Title</th>
                            <th>Description (1)</th>
                            <th>Image (1)</th>
                            <th>Description (2)</th>
                            <th>Image (2)</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $index => $item)
                            <tr>
                                <td>{{$index + 1}}</td>
                                <td>{{$item->title}}</td>
                                <td>{!! $item->desc1 !!}</td>
                                <td>
                                    @if($item->image1)
                                        <img src="{{ asset('storage/' . $item->image1) }}" alt="" width="200px">
                                    @else
                                        Image not found
                                    @endif
                                </td>

                                <td>{!! $item->desc2 !!}</td>
                                <td>
                                    @if($item->image2)
                                        <img src="{{ asset('storage/' . $item->image2) }}" alt="" width="200px">
                                    @else
                                        Image not found
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.blog.edit', $item->id)}}" class="btn btn-warning"><i class="bi bi-pencil-square inline"></i></a>
                                    <form action="{{ route('admin.blog.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger mt-1"><i class="bi bi-trash"></i></button>
                                    </form>
                                </td>                                        
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@include('admin.template.footer')
