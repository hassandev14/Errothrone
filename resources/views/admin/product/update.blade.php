@include('layout.header')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">Update Product</div>
        <div class="card-body">
            <h3 class="text-center title-2 mb-3">Update Product</h3>

            <form action="{{ route('products.update', $products->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Product Name -->
                <div class="form-group">
                    <label for="name">Product Name <span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $products->name) }}" required>
                </div>

                <div class="row">
                    <!-- Category Box -->
                    <div class="col-md-6">
                        <div class="border p-3 rounded shadow-sm mb-3" style="max-height: 300px; overflow-y: auto;">
                            <label class="mb-1">Categories</label>
                            <div class="form-check">
                                <input type="checkbox" id="select-all-categories">
                                <label for="select-all-categories">Select All Categories</label>
                            </div>

                            @foreach ($categories as $category)
                                <div class="form-check">
                                    <input type="checkbox" class="category-checkbox" name="category_ids[]" value="{{ $category->id }}"
                                        id="category-{{ $category->id }}" {{ in_array($category->id, $selectedCategories) ? 'checked' : '' }}>
                                    <label for="category-{{ $category->id }}">{{ $category->name }}</label>
                                </div>

                                @if ($category->subcategories->isNotEmpty())
                                    <div class="ml-3">
                                        @foreach ($category->subcategories as $subcategory)
                                            <div class="form-check">
                                                <input type="checkbox" class="subcategory-checkbox" name="sub_category_ids[]" value="{{ $subcategory->id }}"
                                                    id="subcategory-{{ $subcategory->id }}" {{ in_array($subcategory->id, $selectedSubcategories) ? 'checked' : '' }}>
                                                <label for="subcategory-{{ $subcategory->id }}">{{ $subcategory->name }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>

                    <!-- Brand Box -->
                    <div class="col-md-6">
                        <div class="border p-3 rounded shadow-sm mb-3">
                            <label class="mb-1">Brands</label>
                            <div class="form-check">
                                <input type="checkbox" id="select-all-brands">
                                <label for="select-all-brands">Select All Brands</label>
                            </div>

                            @foreach ($brands as $brand)
                                <div class="form-check">
                                    <input type="checkbox" class="brand-checkbox" name="brand_ids[]" value="{{ $brand->id }}"
                                        id="brand-{{ $brand->id }}" {{ in_array($brand->id, $selectedBrands) ? 'checked' : '' }}>
                                    <label for="brand-{{ $brand->id }}">{{ $brand->name }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Product Code & Origin -->
                <div class="row">
                    <div class="col-md-6">
                        <label for="product_code">Product Code <span class="text-danger">*</span></label>
                        <input type="text" name="product_code" class="form-control" value="{{ old('product_code', $products->product_code) }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="origin">Origin <span class="text-danger">*</span></label>
                        <input type="text" name="origin" class="form-control" value="{{ old('origin', $products->origin) }}" required>
                    </div>
                </div>

                <!-- Short Description -->
                <div class="form-group mt-3">
                    <label for="short_desc">Short Description</label>
                    <textarea name="short_desc" class="form-control" rows="2">{{ old('short_desc', $products->short_desc) }}</textarea>
                </div>

                <!-- Description -->
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" rows="4">{{ old('description', $products->description) }}</textarea>
                </div>

                <!-- Price & Image -->
                <div class="row">
                    <div class="col-md-4">
                        <label for="price">Price <span class="text-danger">*</span></label>
                        <input type="number" name="price" class="form-control" value="{{ old('price', $products->price) }}" required step="0.01">
                    </div>

                    <div class="col-md-8">
                        <label for="image">Product Image</label>
                        <input type="file" class="form-control" name="image" id="image">
                        <small class="text-muted">Upload new image or keep the existing one</small><br>
                        @if($products->image_name)
                            <img src="{{ asset($products->image_name) }}" alt="{{ $products->name }}" class="img-thumbnail mt-2" width="150">
                        @endif
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-lg btn-primary">Update Product</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // Select All Categories
    document.getElementById("select-all-categories").addEventListener("click", function() {
        document.querySelectorAll(".category-checkbox").forEach(checkbox => {
            checkbox.checked = this.checked;
        });
    });

    // Select All Brands
    document.getElementById("select-all-brands").addEventListener("click", function() {
        document.querySelectorAll(".brand-checkbox").forEach(checkbox => {
            checkbox.checked = this.checked;
        });
    });
</script>

@include('layout.footer')
