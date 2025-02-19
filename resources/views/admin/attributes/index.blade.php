@include('layout.header')
<div class="col-lg-12">
    <div class="table-responsive table--no-card m-b-40">
        <table class="table table-borderless table-striped table-earning">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($attributes as $attribute) { ?>
                    <tr>
                        <td>{{ $attribute->id }}</td>
                        <td>{{ $attribute->name }}</td>
                        <td><a href="{{ route('attributes.edit', $attribute->id) }}">
                                <li class="fa fa-edit"></li>
                            </a>
                            <a href="{{ route('attributes.delete', $attribute->id) }}">
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