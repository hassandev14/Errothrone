@include('layout.header')
<div class="col-lg-12">
    <h2 class="title-1 m-b-25">Earnings By Items</h2>
    <div class="table-responsive table--no-card m-b-40">
        <table class="table table-borderless table-striped table-earning">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($chose_us as $chose) { ?>
                    <tr>
                        <td>{{ $chose->id }}</td>
                        <td>{{ $chose->name }}</td>
                        <td>{{ $chose->desc }}</td>
                        <td><a href="{{ route('chose_us.edit', $chose->id) }}">
                                <li class="fa fa-edit"></li>
                            </a>
                        </td>
                    <?php } ?>
                    </tr>
            </tbody>
        </table>
    </div>
</div>
@include('layout.footer')