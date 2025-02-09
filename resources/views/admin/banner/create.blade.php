@include('layout.header')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">Add Banner</div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Banner</h3>
            </div>
            <hr>
            <form action="{{ route('banners.store') }}" method="post" enctype="multipart/form-data" novalidate="novalidate">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form-group">
                    <label>Banner Name <span class="text text-red">*</span></label>
                    <input name="name" type="text" class="form-control" value="{{ old('name') }}" required>
                </div>

                <div class="form-group">
                        <label for="book_img">Banner Image</label>
                        <input type="file" class="form-control" name="image" id="image">
                        <small class="label label-warning">Cover Photo will be uploaded</small>
                </div>

                <div class="form-group">
                    <label for="desc">Description <span class="text text-red">*</span></label>
                    <textarea name="desc" class="form-control" rows="4" required>{{ old('desc') }}</textarea>
                </div>

                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                    <span id="payment-button-amount">Add Banner</span>
                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                </button>
            </form>
        </div>
    </div>
</div>
@include('layout.footer')