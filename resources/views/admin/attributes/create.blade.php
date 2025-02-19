@include('layout.header')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">Add Navbar Name</div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Navbar Name</h3>
            </div>
            <hr>
            <form action="{{ route('attributes.store') }}" method="post" enctype="multipart/form-data" novalidate="novalidate">
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
                    <label>Attribute Name <span class="text text-red">*</span></label>
                    <input name="name" type="text" class="form-control" value="{{ old('name') }}" required>
                </div>

                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                    <span id="payment-button-amount">Add Attribute</span>
                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                </button>
            </form>
        </div>
    </div>
</div>
@include('layout.footer')