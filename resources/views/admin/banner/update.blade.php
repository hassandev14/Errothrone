@include('layout.header')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">Banner</div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Update Banner</h3>
            </div>
            <hr>
            <form action="{{ route('brands.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') <!-- Use PUT for update -->

                <div class="form-group">
                    <label for="name">banner Name <span class="text text-red">*</span></label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $banner->name) }}" required>
                </div>

                <div class="form-group">
                    <label for="desc">Description</label>
                    <textarea name="desc" class="form-control" rows="4">{{ old('desc', $banner->desc) }}</textarea>
                </div>

                <div class="form-group">
                    <label for="image">banner Image</label>
                    <input type="file" class="form-control" name="image" id="image">
                    <small class="label label-warning">Cover Photo will be uploaded</small>
                    <br>
                    @if($banner->image_name)
                    <img src="{{ asset('images/brands/' . $banner->image_name) }}" alt="{{ $banner->name }}" width="100">
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Update banner</button>
            </form>

        </div>
    </div>
</div>
@include('layout.footer')