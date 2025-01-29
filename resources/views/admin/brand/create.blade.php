@include('layout.header')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">Add Brand</div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Brand</h3>
            </div>
            <hr>
            <form action="{{ route('brands.store') }}" method="post" enctype="multipart/form-data" novalidate="novalidate">
                @csrf
                <div class="form-group">
                    <label>Brand Name <span class="text text-red">*</span></label>
                    <input name="name" type="text" class="form-control" value="{{ old('name') }}" required>
                </div>

                <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">Category</label>
                    <select class="form-control" name="category_id" style="width: 100%;" required>
                        <option value="none">-- Select Category --</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                        <label for="book_img">Brand Image</label>
                        <input type="file" class="form-control" name="image" id="image">
                        <small class="label label-warning">Cover Photo will be uploaded</small>
                </div>

                <div class="form-group">
                    <label for="desc">Description <span class="text text-red">*</span></label>
                    <textarea name="desc" class="form-control" rows="4" required>{{ old('desc') }}</textarea>
                </div>

                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                    <span id="payment-button-amount">Add Brand</span>
                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                </button>
            </form>
        </div>
    </div>
</div>
@include('layout.footer')