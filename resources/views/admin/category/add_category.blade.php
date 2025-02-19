@include('layout.header')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">Category</div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Add Category</h3>
            </div>
            <hr>
            <form action="/add_category" method="post" novalidate="novalidate">
                @csrf
                <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">Category Name</label>
                    <input name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
                </div>
                <div class="border p-3 rounded shadow-sm mb-3">
                    <label class="font-weight-bold">select Navbar Name</label>
                    <div class="form-check">
                        <input type="checkbox" id="select-all-brand">
                        <label for="select-all-brand" class="font-weight-bold">Select All</label>
                    </div>
                    @foreach ($attributes as $attribute)
                    <div class="form-check">
                        <input type="checkbox" class="attribute-checkbox" name="attribute_ids[]" value="{{ $attribute->id }}" id="attribute-{{ $attribute->id }}">
                        <label for="brand-{{ $attribute->id }}">{{ $attribute->name }}</label>
                    </div>
                    @endforeach
                </div>
                <div>
                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                        <span id="payment-button-amount">Add Category</span>
                        <span id="payment-button-sending" style="display:none;">Sending…</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@include('layout.footer')