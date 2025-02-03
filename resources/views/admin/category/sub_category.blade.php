@include('layout.header')
<div class="col-lg-12">
    <h2 class="title-1 m-b-25">Sub Category Listing</h2>
    <div class="table-responsive table--no-card m-b-40">
        <table class="table table-borderless table-striped table-earning">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Sub Category Name</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $sub) { ?>
                    <tr>
                        <td>{{$sub->id}}</td>
                        <td>{{$sub->name}}</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
@include('layout.footer')