@include('layout.header')

<div class="col-lg-12">
    <h2 class="title-1 m-b-25">Earnings By Items</h2>
    <div class="table-responsive table--no-card m-b-40">
        <table id="ordersTable" class="table table-borderless table-striped table-earning">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer Name</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->customer->first_name }}</td>
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
                        <td>
                            <a href="{{ route('orders.delete', $order->id) }}">
                                <li class="fa fa-trash"></li>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('layout.footer')

<script>
    $(document).ready(function() {
        // Initialize the DataTable
        $('#ordersTable').DataTable({
            responsive: true,  // Enable responsiveness
            paging: true,      // Enable pagination
            searching: true,   // Enable search bar
            ordering: true,    // Enable column sorting
            info: true         // Show info (e.g., "Showing 1 to 10 of 50 entries")
        });
    });
</script>
