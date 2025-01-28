@include('layout.header')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">Add Brand</div>
            <div class="card-body">
                <div class="card-title">
                    <h3 class="text-center title-2">Brand</h3>
                </div>
                <hr>
                <form action="" method="post" novalidate="novalidate">
                <div class="form-group">
                      <label>Category <span class="text text-red">*</span></label>
                      <select class="form-control" name="category_id" id="category_id" style="width: 100%;">
                        <option value="none">-- Select Category --</option>
                      </select>
                    </div>

                    <div class="form-group">
                        <label for="cc-payment" class="control-label mb-1">category_id</label>
                        <input id="cc-pament" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false" value="100.00">
                    </div>
                    <div class="form-group">
                      <label for="book_img">Book Image</label>
                      <input type="file" class="form-control" name="book_img" id="book_img" >
                      <small class="label label-warning">Cover Photo will be uploaded</small>
                    </div>
                   
                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                            <i class="fa fa-lock fa-lg"></i>&nbsp;
                            <span id="payment-button-amount">Pay $100.00</span>
                            <span id="payment-button-sending" style="display:none;">Sending…</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@include('layout.footer')