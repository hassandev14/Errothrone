@include('layout.header')

<div class="col-lg-12">
    <h2 class="title-1 m-b-25">Earnings By Items</h2>
    <div class="table-responsive table--no-card m-b-40">
        <table class="table table-borderless table-striped table-earning">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Order ID</th>
                    <th>Customer Name</th>
                    <th>Product Name</th>
                    <th>Return Reason</th>
                    <th>Return Status</th>
                    <th>Refund Amount</th>
                    <th>Return Date</th>
                    <th>Received By</th>
                    <th>Comments</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order_return as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->order_id }}</td> <!-- Assuming `order_id` is the field you want to display -->
                        <td>{{ $order->customer->first_name }} {{ $order->customer->last_name }}</td> <!-- Assuming first_name and last_name exist -->
                        <td>{{ $order->product->name }}</td> <!-- Assuming `product_name` is the field you want to display -->
                        <td>{{ $order->return_reason }}</td> <!-- Assuming `return_reason` is the field you want to display -->
                        <td>
                            @if($order->status == 'Completed')
                                <span style="color: green; font-weight: bold;">&#x25CF;</span> {{ $order->status }}
                            @elseif($order->status == 'Pending')
                                <span style="color: orange; font-weight: bold;">&#x25CF;</span> {{ $order->status }}
                            @elseif($order->status == 'Cancelled')
                                <span style="color: red; font-weight: bold;">&#x25CF;</span> {{ $order->status }}
                            @else
                                <span style="color: grey; font-weight: bold;">&#x25CF;</span> {{ $order->status }}
                            @endif
                        </td>
                        <td>{{ $order->refund_amount }}</td> <!-- Assuming `refund_amount` is the field you want to display -->
                        <td>{{ $order->return_date }}</td> <!-- Assuming `return_date` is the field you want to display -->
                        <td>{{ $order->received_by }}</td> <!-- Assuming `received_by` is the field you want to display -->
                        <td>{{ $order->comments }}</td> <!-- Assuming `comments` is the field you want to display -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('layout.footer')
