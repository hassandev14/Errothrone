@include('layout.header')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">Brands</div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Update Product</h3>
            </div>
            <hr>
            <form action="{{ route('products.update', $products->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') <!-- Use PUT for update -->

                <div class="form-group">
                    <label for="name">Product Name <span class="text text-red">*</span></label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $products->name) }}" required>
                </div>

                <div class="form-group row"> <!-- Start row for Category and Brand dropdowns -->
                    <div class="col-md-6">
                        <label for="category_id" class="control-label mb-1">Category</label>
                        <select class="form-control" name="category_id" style="width: 100%;" required>
                            <option value="">-- Select Category --</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $products->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="brand_id" class="control-label mb-1">Products</label>
                        <select class="form-control" name="brand_id" style="width: 100%;" required>
                            <option value="">-- Select Products --</option>
                            @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}"
                                {{ $products->brand_id == $brand->id ? 'selected' : '' }}>
                                {{ $brand->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div> <!-- End row for Category and Brand -->

                <div class="form-group">
                    <label for="desc">Description</label>
                    <textarea name="description" class="form-control" rows="4">{{ old('description', $products->description) }}</textarea>
                </div>
                
                <!-- Price and Image on the same line -->
                <div class="form-group row">
                    <div class="col-md-4">
                        <label for="price">Price <span class="text text-red">*</span></label>
                        <input type="number" name="price" class="form-control" value="{{ old('price', $products->price) }}" required step="0.01">
                    </div>

                    <div class="col-md-8">
                        <label for="image">Product Image</label>
                        <input type="file" class="form-control" name="image" id="image">
                        <small class="label label-warning">Cover Photo will be uploaded</small>
                        <br>
                        @if($products->image_name)
                        <img src="{{ asset( $products->image_name) }}" alt="{{ $products->name }}" width="200">
                        @endif
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Update Product</button>
            </form>

        </div>
    </div>
</div>
@include('layout.footer')
