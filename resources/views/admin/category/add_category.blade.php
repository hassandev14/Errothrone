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
                <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">Sorting Order</label>
                    <input type="number" name="sort_order" class="form-control" value="{{ $lastSortOrder + 1 }}" required>
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