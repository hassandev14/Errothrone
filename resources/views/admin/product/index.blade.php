@include('layout.header')

<div class="container mt-4">
    <h2 class="mb-4 text-center">Earnings By Items</h2>

    <div class="table-responsive">
        <table class="table table-hover table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Product Code</th>
                    <th>Origin</th>
                    <th>Price</th>
                    <th>Short Desc</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->product_code }}</td>
                    <td>{{ $product->origin }}</td>
                    <td>${{ number_format($product->price, 2) }}</td>
                    <td>{{ Str::limit($product->short_desc, 50) }}</td>
                    <td>{{ Str::limit($product->description, 100) }}</td>
                    <td class="text-center">
                        <img src="{{ asset($product->image_name) }}" alt="{{ $product->name }}" class="img-thumbnail" width="80">
                    </td>
                    <td class="text-center">
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-primary">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="{{ route('products.delete', $product->id) }}" class="btn btn-sm btn-danger">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('layout.footer')
