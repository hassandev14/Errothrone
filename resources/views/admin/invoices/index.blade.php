@include('layout.header')
<div class="col-lg-12">
    <h2 class="title-1 m-b-25">Earnings By Items</h2>
    <div class="table-responsive table--no-card m-b-40">
        <table class="table table-borderless table-striped table-earning">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer Name</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($carts as $carts) { ?>
                    <tr>
                        <td>{{ $carts->id }}</td>
                        <td>{{ $carts->customer->first_name }}</td>
                        <td>{{ $carts->product->name }}</td>
                        <td>{{ $carts->quantity }}</td>
                        <td>{{ $carts->price }}</td>
                    <?php } ?>
                    </tr>
            </tbody>
        </table>
    </div>
</div>
@include('layout.footer')