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
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($banners as $banner) { ?>
                    <tr>
                        <td>{{ $banner->id }}</td>
                        <td>{{ $banner->name }}</td>
                        <td>{{ $banner->desc }}</td>
                        <td>
                            <img src="{{ asset( $banner->image) }}" alt="{{ $banner->name }}" width="100">
                        </td>
                        <td><a href="{{ route('banners.edit', $banner->id) }}">
                                <li class="fa fa-edit"></li>
                            </a>
                            <a href="{{ route('banners.delete', $banner->id) }}">
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