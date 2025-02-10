@include('layout.header')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">Update Product</div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Update Product</h3>
            </div>
            <hr>
            <form action="{{ route('products.update', $products->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Product Name <span class="text text-red">*</span></label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $products->name) }}" required>
                </div>

                <div class="row">
                    <!-- Category Box -->
                    <div class="col-md-6">
                        <div class="border p-3 rounded shadow-sm mb-3" style="max-height: 300px; overflow-y: auto;">
                            <label class="control-label mb-1">Categories</label>
                            <div class="form-check mb-2">
                                <input type="checkbox" id="select-all-categories">
                                <label for="select-all-categories">Select All Categories</label>
                            </div>

                            @foreach ($categories as $category)
                                <div class="form-check mb-2">
                                    <input type="checkbox" class="category-checkbox" name="category_ids[]" value="{{ $category->id }}"
                                        id="category-{{ $category->id }}" {{ in_array($category->id, $selectedCategories) ? 'checked' : '' }}>
                                    <label for="category-{{ $category->id }}">{{ $category->name }}</label>
                                </div>

                                @if ($category->subcategories->isNotEmpty())
                                    <div class="ml-4">
                                        @foreach ($category->subcategories as $subcategory)
                                            <div class="form-check mb-2">
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
                            <label class="control-label mb-1">Brands</label>
                            <div class="form-check mb-2">
                                <input type="checkbox" id="select-all-brands">
                                <label for="select-all-brands">Select All Brands</label>
                            </div>

                            @foreach ($brands as $brand)
                                <div class="form-check mb-2">
                                    <input type="checkbox" class="brand-checkbox" name="brand_ids[]" value="{{ $brand->id }}"
                                        id="brand-{{ $brand->id }}" {{ in_array($brand->id, $selectedBrands) ? 'checked' : '' }}>
                                    <label for="brand-{{ $brand->id }}">{{ $brand->name }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="short_desc">Short Description</label>
                    <textarea name="short_desc" class="form-control" rows="2">{{ old('short_desc', $products->short_desc) }}</textarea>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" rows="4">{{ old('description', $products->description) }}</textarea>
                </div>

                <div class="form-group row">
                    <div class="col-md-4">
                        <label for="price">Price <span class="text text-red">*</span></label>
                        <input type="number" name="price" class="form-control" value="{{ old('price', $products->price) }}" required step="0.01">
                    </div>

                    <div class="col-md-8">
                        <label for="image">Product Image</label>
                        <input type="file" class="form-control" name="image" id="image">
                        <small class="text-muted">Cover Photo will be uploaded</small><br>
                        @if($products->image_name)
                            <img src="{{ asset($products->image_name) }}" alt="{{ $products->name }}" width="200">
                        @endif
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Update Product</button>
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
