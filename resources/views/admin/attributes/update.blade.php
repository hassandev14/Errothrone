@include('layout.header')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">Attribute</div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Update Attribute</h3>
            </div>
            <hr>
            <form action="{{ route('attributes.update', $attribute->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') <!-- Use PUT for update -->

                <div class="form-group">
                    <label for="name">Attribute Name <span class="text text-red">*</span></label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $attribute->name) }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Update Attribute</button>
            </form>

        </div>
    </div>
</div>
@include('layout.footer')