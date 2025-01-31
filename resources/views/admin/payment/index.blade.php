@include('layout.header')
<div class="col-lg-12">
    <h2 class="title-1 m-b-25">Earnings By Items</h2>
    <div class="table-responsive table--no-card m-b-40">
        <table class="table table-borderless table-striped table-earning">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Order ID</th>
                    <th>Payment Method</th>
                    <th>Payment Status</th>
                    <th>Payment Date</th>
                    <th>transaction ID</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($payments as $payment) { ?>
                    <tr>
                        <td>{{ $payment->id }}</td>
                        <td>{{ $payment->orders->id }}</td>
                        <td>{{ $payment->payment_method }}</td>
                        <td>{{ $payment->payment_status }}</td>
                        <td>{{ $payment->payment_date }}</td>
                        <td>{{ $payment->transaction_id }}</td>
                        <td>{{ $payment->amount }}</td>
                        </td>
                    <?php } ?>
                    </tr>
            </tbody>
        </table>
    </div>
</div>
@include('layout.footer')