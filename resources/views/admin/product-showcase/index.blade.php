@include('admin.template.header')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Product Showcase</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if (!empty($missingTable))
        <div class="alert alert-warning">
            Product showcase table is not available yet. Run <code>php artisan migrate</code> before using this CRUD.
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Showcase Pages</h6>
            <a href="{{ route('admin.product.showcase.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> New Page
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Series</th>
                            <th>Hero</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->page_title }}</td>
                                <td>
                                    @if ($product->hero_image)
                                        <img src="{{ asset('storage/' . $product->hero_image) }}" alt="{{ $product->name }}" style="max-width: 120px; height: auto;">
                                    @endif
                                </td>
                                <td class="d-flex gap-2">
                                    <a href="{{ route('admin.product.showcase.edit', $product) }}" class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="{{ route('admin.product.showcase.destroy', $product) }}" method="POST" onsubmit="return confirm('Delete this showcase page?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted">No showcase page yet.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('admin.template.footer')
