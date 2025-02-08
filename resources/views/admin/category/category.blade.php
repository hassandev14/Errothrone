@include('layout.header')
<div class="col-lg-12">
    <h2 class="title-1 m-b-25">Category Listing</h2>
    <div class="table-responsive table--no-card m-b-40">
        <table class="table table-borderless table-striped table-earning">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Category Name</th>
                    <th>Sorting Order</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $category) { ?>
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->sort_order}}</td>
                        <td><a href="{{ route('categories.edit', $category->id) }}">
                                <li class="fa fa-edit"></li>
                            </a>
                            <a href="{{ route('categories.delete', $category->id) }}">
                                <li class="fa fa-trash"></li>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
@include('layout.footer')