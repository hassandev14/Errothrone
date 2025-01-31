@include('layout.header')
<div class="col-lg-12">
    <h2 class="title-1 m-b-25">Stocks Overview</h2>
    <div class="table-responsive table--no-card m-b-40">
        <table class="table table-borderless table-striped table-earning">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Available Quantity</th>
                    <th>Incoming Stock</th>
                    <th>Outgoing Stock</th>
                    <th>Stock Status</th>
                    <th>Restocked At</th>
                    <th>Supplier</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($stocks as $stock) { ?>
                    <tr>
                        <td>{{ $stock->id }}</td>
                        <td>{{ $stock->product->name }}</td>
                        <td>{{ $stock->quantity }}</td>
                        <td>{{ $stock->incoming_stock }}</td>
                        <td>{{ $stock->outgoing_stock }}</td>
                        <td>
                            @if($stock->stock_status == 'available')
                                <span style="color: green; font-weight: bold;">&#x25CF;</span> {{ $stock->stock_status }}
                            @elseif($stock->stock_status == 'low')
                                <span style="color: orange; font-weight: bold;">&#x25CF;</span> {{ $stock->stock_status }}
                            @elseif($stock->stock_status == 'out_of_stock')
                                <span style="color: red; font-weight: bold;">&#x25CF;</span> {{ $stock->stock_status }}
                            @else
                                <span style="color: grey; font-weight: bold;">&#x25CF;</span> {{ $stock->stock_status }}
                            @endif
                        </td>
                        <td>{{ $stock->restocked_at ? $stock->restocked_at->format('Y-m-d') : 'N/A' }}</td>
                        <td>{{ $stock->supplier ? $stock->supplier->name : 'N/A' }}</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
@include('layout.footer')
