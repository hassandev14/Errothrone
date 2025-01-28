@include('layout.header')
<<<<<<< HEAD
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">Category</div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Add Category</h3>
=======
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">Add Category</div>
            <div class="card-body">
                <div class="card-title">
                    <h3 class="text-center title-2">Category</h3>
                </div>
                <hr>
                <form action="" method="post" novalidate="novalidate">
                    <div class="form-group">
                        <label for="cc-payment" class="control-label mb-1">Payment amount</label>
                        <input id="cc-pament" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false" value="100.00">
                    </div>
                   
                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                            <i class="fa fa-lock fa-lg"></i>&nbsp;
                            <span id="payment-button-amount">Pay $100.00</span>
                            <span id="payment-button-sending" style="display:none;">Sending…</span>
                        </button>
                    </div>
                </form>
>>>>>>> ee6f145e2e2808243ef388912a3d0b1781e4ff08
            </div>
            <hr>
            <form action="/add_category" method="post" novalidate="novalidate">
                @csrf
                <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">Category Name</label>
                    <input name="category_name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
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