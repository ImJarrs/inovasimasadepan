@include('admin.template.header')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            {{-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> --}}
                            <a href="{{ route('admin.wristband.create')}}" class="btn btn-success mt-3"> <i class="bi bi-plus-circle"></i> New</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @foreach ($wristbands as $index => $item)
                                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center; width: 10px;">{{$index + 1}}</th>
                                            <th>Product Name</th>
                                            <th>Product Image</th>
                                            <th>{{$item->label1}}</th>
                                            <th>{{$item->label2}}</th>
                                            <th>{{$item->label3}}</th>
                                            <th>{{$item->label4}}</th>
                                            <th>{{$item->label5}}</th>
                                            <th>{{$item->label6}}</th>
                                            <th>{{$item->label7}}</th>
                                            <th>{{$item->label8}}</th>
                                            <th>{{$item->label9}}</th>
                                            <th>{{$item->label10}}</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td></td>
                                                <td>{{$item->name}}</td>
                                                <td>
                                                    @if($item->image1)
                                                            <img src="{{ asset('storage/' . $item->image1) }}" alt="{{ $item->name }}" class="img-fluid mb-1 image-list" style="object-fit: cover;">
                                                    @endif
                                                    @if($item->image2)
                                                            <img src="{{ asset('storage/' . $item->image2) }}" alt="{{ $item->name }}" class="img-fluid mb-1 image-list" style="object-fit: cover;">
                                                    @endif
                                                    @if($item->image3)
                                                            <img src="{{ asset('storage/' . $item->image3) }}" alt="{{ $item->name }}" class="img-fluid mb-1 image-list" style="object-fit: cover;">
                                                    @endif
                                                    @if($item->image4)
                                                            <img src="{{ asset('storage/' . $item->image4) }}" alt="{{ $item->name }}" class="img-fluid mb-1 image-list" style="object-fit: cover;">
                                                    @endif
                                                    @if($item->image5)
                                                            <img src="{{ asset('storage/' . $item->image5) }}" alt="{{ $item->name }}" class="img-fluid mb-1 image-list" style="object-fit: cover;">
                                                    @endif
                                                </td>
                                                <td>{{$item->desc1}}</td>
                                                <td>{{$item->desc2}}</td>
                                                <td>{{$item->desc3}}</td>
                                                <td>{{$item->desc4}}</td>
                                                <td>{{$item->desc5}}</td>
                                                <td>{{$item->desc6}}</td>
                                                <td>{{$item->desc7}}</td>
                                                <td>{{$item->desc8}}</td>
                                                <td>{{$item->desc9}}</td>
                                                <td>{{$item->desc10}}</td>
                                                <td>
                                                    <a href="{{ route('admin.wristband.edit', $item->id)}}" class="btn btn-warning"><i class="bi bi-pencil-square inline"></i></a>
                                                    <form action="{{ route('admin.wristband.destroy', $item->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger mt-1"><i class="bi bi-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        
                                    </tbody>
                                </table>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                @include('admin.template.footer')