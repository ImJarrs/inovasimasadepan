@include('admin.template.header')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            {{-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> --}}
                            <a href="{{ route('admin.banner.create')}}" class="btn btn-success mt-3"> <i class="bi bi-plus-circle"></i> New</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Home Banner</th>
                                            <th>Promo Banner</th>
                                            <th>Blog Banner</th>
                                            <th>Card Banner</th>
                                            <th>Wristband Banner</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($banners as $index => $banner)
                                            <tr>
                                                <td>{{$index + 1}}</td>
                                                <td>
                                                    @if($banner->home_banner)
                                                        <img src="{{ asset('storage/' . $banner->home_banner) }}" width="200px">
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($banner->promo_banner)
                                                        <img src="{{ asset('storage/' . $banner->promo_banner) }}" alt="promoBanner" width="200px">
                                                    @else
                                                        Image not found
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($banner->blog_banner)
                                                        <img src="{{ asset('storage/' . $banner->blog_banner) }}" alt="blogBanner" width="200px">
                                                    @else
                                                        Image not found
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($banner->card_banner)
                                                        <img src="{{ asset('storage/' . $banner->card_banner) }}" alt="cardBanner" width="200px">
                                                    @else
                                                        Image not found
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($banner->wristband_banner)
                                                        <img src="{{ asset('storage/' . $banner->wristband_banner) }}" alt="wristbandBanner" width="200px">
                                                    @else
                                                        Image not found
                                                    @endif
                                                </td>
                                                
                                                <td>
                                                    <a href="{{ route('admin.banner.edit', $banner->id)}}" class="btn btn-warning"><i class="bi bi-pencil-square inline"></i></a>
                                                    <form action="{{ route('admin.banner.destroy', $banner->id) }}" method="POST">
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