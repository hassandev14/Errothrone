@include('layout.header')

<div class="container mt-4">
    <div class="col-lg-12">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Add Product</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="row">
                        <!-- Left Side: Main Product Details -->
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Product Name <span class="text-danger">*</span></label>
                                <input name="name" type="text" class="form-control" value="{{ old('name') }}" required>
                            </div>

                            <div class="form-group">
                                <label>Product Code <span class="text-danger">*</span></label>
                                <input name="product_code" type="text" class="form-control" value="{{ old('product_code') }}" required>
                            </div>

                            <div class="form-group">
                                <label>Product Price <span class="text-danger">*</span></label>
                                <input name="price" type="number" class="form-control" value="{{ old('price') }}" required>
                            </div>

                            <div class="form-group">
                                <label>Origin (Country of Manufacture)</label>
                                <input name="origin" type="text" class="form-control" value="{{ old('origin') }}">
                            </div>

                            <div class="form-group">
                                <label>Short Description <span class="text-danger">*</span></label>
                                <textarea name="short_desc" class="form-control" rows="2" required>{{ old('short_desc') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Description <span class="text-danger">*</span></label>
                                <textarea name="description" class="form-control" rows="4" required>{{ old('description') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Product Image</label>
                                <input type="file" class="form-control" name="image">
                                <small class="text-muted">Upload product cover photo.</small>
                            </div>
                        </div>

                        <!-- Right Side: Category, Subcategory & Brands -->
                        <div class="col-md-4">
                            <div class="border p-3 rounded shadow-sm mb-3" style="max-height: 350px; overflow-y: auto;">
                                <label class="font-weight-bold">Category</label>
                                <div class="form-check">
                                    <input type="checkbox" id="select-all-category">
                                    <label for="select-all-category" class="font-weight-bold">Select All</label>
                                </div>
                                @foreach ($categories as $category)
                                <div class="form-check">
                                    <input type="checkbox" class="category-checkbox" name="category_ids[]" value="{{ $category->id }}" id="category-{{ $category->id }}">
                                    <label for="category-{{ $category->id }}">{{ $category->name }}</label>
                                </div>

                                @if ($category->subcategories->isNotEmpty())
                                <div class="ml-4">
                                    @foreach ($category->subcategories as $subcategory)
                                    <div class="form-check">
                                        <input type="checkbox" class="subcategory-checkbox" name="sub_category_ids[]" value="{{ $subcategory->id }}" id="subcategory-{{ $subcategory->id }}">
                                        <label for="subcategory-{{ $subcategory->id }}">{{ $subcategory->name }}</label>
                                    </div>
                                    @endforeach
                                </div>
                                @endif
                                @endforeach
                            </div>

                            <div class="border p-3 rounded shadow-sm mb-3">
                                <label class="font-weight-bold">Brands</label>
                                <div class="form-check">
                                    <input type="checkbox" id="select-all-brand">
                                    <label for="select-all-brand" class="font-weight-bold">Select All</label>
                                </div>
                                @foreach ($brands as $brand)
                                <div class="form-check">
                                    <input type="checkbox" class="brand-checkbox" name="brand_ids[]" value="{{ $brand->id }}" id="brand-{{ $brand->id }}">
                                    <label for="brand-{{ $brand->id }}">{{ $brand->name }}</label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success btn-block mt-3">Add Product</button>
                </form>
            </div>
        </div>
    </div>
</div>

@include('layout.footer')

<script>
    document.getElementById('select-all-category').addEventListener('change', function() {
        document.querySelectorAll('.category-checkbox, .subcategory-checkbox').forEach(checkbox => {
            checkbox.checked = this.checked;
        });
    });

    document.getElementById('select-all-brand').addEventListener('change', function() {
        document.querySelectorAll('.brand-checkbox').forEach(checkbox => {
            checkbox.checked = this.checked;
        });
    });
</script>
