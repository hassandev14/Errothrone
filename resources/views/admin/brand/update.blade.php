@include('layout.header')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">Brands</div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Update Brand</h3>
            </div>
            <hr>
            <form action="{{ route('brands.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') <!-- Use PUT for update -->

                <div class="form-group">
                    <label for="name">Brand Name <span class="text text-red">*</span></label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $brand->name) }}" required>
                </div>

                <div class="form-group">
                    <label for="category_id" class="control-label mb-1">Category</label>
                    <select class="form-control" name="category_id" style="width: 100%;" required>
                        <option value="">-- Select Category --</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ $brand->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="desc">Description</label>
                    <textarea name="desc" class="form-control" rows="4">{{ old('desc', $brand->desc) }}</textarea>
                </div>

                <div class="form-group">
                    <label for="image">Brand Image</label>
                    <input type="file" class="form-control" name="image" id="image">
                    <small class="label label-warning">Cover Photo will be uploaded</small>
                    <br>
                    @if($brand->image_name)
                    <img src="{{ asset('images/brands/' . $brand->image_name) }}" alt="{{ $brand->name }}" width="100">
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Update Brand</button>
            </form>

        </div>
    </div>
</div>
@include('layout.footer')