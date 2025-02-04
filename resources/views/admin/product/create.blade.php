@include('layout.header')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">Add Product</div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Product</h3>
            </div>
            <hr>
            <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data" novalidate="novalidate">
                @csrf
                @if($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif

                <div class="form-group">
                    <label>Product Name <span class="text text-red">*</span></label>
                    <input name="name" type="text" class="form-control" value="{{ old('name') }}" required>
                </div>

                <div class="form-group-row row">
                    <!-- Left Side: Main Form (Product Name, Price, Description, Image) -->
                    <div class="col-md-8">
                        <!-- Product Price Section -->
                        <div class="form-group">
                            <label>Product Price <span class="text text-red">*</span></label>
                            <input name="price" type="number" class="form-control" value="{{ old('price') }}" required>
                        </div>

                        <!-- Product Image Section -->
                        <div class="form-group-row row">
                            <div class="col-md-12">
                                <label for="book_img">Product Image</label>
                                <input type="file" class="form-control" name="image" id="image">
                                <small class="label label-warning">Cover Photo will be uploaded</small>
                            </div>
                        </div>

                        <!-- Product Description Section -->
                        <div class="form-group">
                            <label for="description">Description <span class="text text-red">*</span></label>
                            <textarea name="description" class="form-control" rows="2" required>{{ old('desc') }}</textarea>
                        </div>
                    </div>

                    <!-- Right Side: Category and Brand -->
                    <div class="col-md-4">
                        <!-- Category Box -->
                        <div class="border p-3 rounded shadow-sm mb-3" style="max-height: 300px; overflow-y: auto;">
                            <label for="cc-payment" class="control-label mb-1">Category</label>

                            <!-- "Select All" functionality for categories -->
                            <div class="form-check mb-2">
                            </div>

                            <!-- Loop through categories and create checkboxes -->
                            @foreach ($categories as $category)
                            <div class="form-check mb-2">
                                <input type="checkbox" class="category-checkbox" name="category_ids[]" value="{{ $category->id }}" id="category-{{ $category->id }}">
                                <label class="form-check-label" for="category-{{ $category->id }}">{{ $category->name }}</label>
                            </div>

                            <!-- Check for Subcategories -->
                            @if ($category->subcategories->isNotEmpty())
                            <!-- Subcategory Section -->
                            <div class="ml-4">
                                @foreach ($category->subcategories as $subcategory)
                                <div class="form-check mb-2">
                                    <input type="checkbox" class="subcategory-checkbox" name="sub_category_ids[]" value="{{ $subcategory->id }}" id="subcategory-{{ $subcategory->id }}">
                                    <label class="form-check-label" for="subcategory-{{ $subcategory->id }}">{{ $subcategory->name }}</label>
                                </div>
                                @endforeach
                            </div>
                            @endif
                            @endforeach
                        </div>

                        <!-- Brand Box -->
                        <div class="border p-3 rounded shadow-sm mb-3">
                            <label for="cc-payment" class="control-label mb-1">Brands</label>

                            <!-- "Select All" functionality for brands -->
                            <div class="form-check mb-2">
                            </div>

                            <!-- Loop through brands and create checkboxes -->
                            @foreach ($brands as $brand)
                            <div class="form-check mb-2">
                                <input type="checkbox" class="brand-checkbox" name="brand_ids[]" value="{{ $brand->id }}" id="brand-{{ $brand->id }}">
                                <label class="form-check-label" for="brand-{{ $brand->id }}">{{ $brand->name }}</label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                    <span id="payment-button-amount">Add Product</span>
                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                </button>
            </form>
        </div>
    </div>
</div>

@include('layout.footer')

<script>
    // Handle "Select All" functionality for category checkboxes
    document.getElementById('select-all-category').addEventListener('change', function() {
        const categoryCheckboxes = document.querySelectorAll('.category-checkbox');
        const subcategoryCheckboxes = document.querySelectorAll('.subcategory-checkbox');

        categoryCheckboxes.forEach(checkbox => {
            checkbox.checked = this.checked;
        });

        subcategoryCheckboxes.forEach(checkbox => {
            checkbox.checked = this.checked;
        });
    });

    // Handle "Select All" functionality for brand checkboxes
    document.getElementById('select-all-brand').addEventListener('change', function() {
        const checkboxes = document.querySelectorAll('.brand-checkbox');
        checkboxes.forEach(checkbox => {
            checkbox.checked = this.checked;
        });
    });
</script>