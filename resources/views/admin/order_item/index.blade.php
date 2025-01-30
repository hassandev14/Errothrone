@include('layout.header')
<div class="col-lg-12">
    <h2 class="title-1 m-b-25">Earnings By Items</h2>
    <div class="table-responsive table--no-card m-b-40">
        <table class="table table-borderless table-striped table-earning">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Order Id</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($order_items as $item) { ?>
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->order->order_id }}</td>
                        <td>{{ $item->product->name }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->price }}</td>
                        <td>
                            <a href="{{ route('orders.delete', $item->id) }}">
                                <li class="fa fa-trash"></li>
                            </a>
                        </td>
                    <?php } ?>
                    </tr>
            </tbody>
        </table>
    </div>
</div>
@include('layout.footer')