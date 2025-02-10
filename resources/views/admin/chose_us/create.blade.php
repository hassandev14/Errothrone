@include('layout.header')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">Add Chose Us</div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Chose Us</h3>
            </div>
            <hr>
            <form action="{{ route('chose_us.store') }}" method="post" enctype="multipart/form-data" novalidate="novalidate">
                @csrf
                @csrf
                @if($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif
                <div class="form-group">
                    <label>Chose Us Name <span class="text text-red">*</span></label>
                    <input name="name" type="text" class="form-control" value="{{ old('name') }}" required>
                </div>

                <div class="form-group">
                    <label for="desc">Description <span class="text text-red">*</span></label>
                    <textarea name="description" class="form-control" rows="4" required>{{ old('description') }}</textarea>
                </div>

                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                    <span id="payment-button-amount">Add Chose Us</span>
                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                </button>
            </form>
        </div>
    </div>
</div>
@include('layout.footer')