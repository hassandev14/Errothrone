@include('layout.header')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">Brands</div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Update Chose Us</h3>
            </div>
            <hr>
            <form action="{{ route('chose_us.update', $chose_us->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') <!-- Use PUT for update -->

                <div class="form-group">
                    <label for="name">Chose Us Name <span class="text text-red">*</span></label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $brand->name) }}" required>
                </div>

                <div class="form-group">
                    <label for="desc">Description</label>
                    <textarea name="description" class="form-control" rows="4">{{ old('description', $brand->description) }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Update Chose Us</button>
            </form>

        </div>
    </div>
</div>
@include('layout.footer')