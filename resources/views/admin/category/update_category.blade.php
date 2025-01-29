@include('layout.header')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">Category</div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Update Category</h3>
            </div>
            <hr>

            {{-- Ensure $category exists --}}
            @if(isset($category))
                <form action="{{ route('categories.update', $category->id) }}" method="POST" novalidate="novalidate">
                    @csrf  {{-- CSRF Token Required --}}
                    @method('PUT') {{-- Laravel requires PUT for updates --}}
                    
                    <div class="form-group">
                        <label for="cc-payment" class="control-label mb-1">Category Name</label>
                        <input id="cc-payment" name="name" type="text" class="form-control"
                            aria-required="true" aria-invalid="false"
                            value="{{ old('name', $category->name) }}">
                    </div>

                    <div>
                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                            <span id="payment-button-amount">Update Category</span>
                            <span id="payment-button-sending" style="display:none;">Sending…</span>
                        </button>
                    </div>
                </form>
            @else
                <div class="alert alert-danger">Category not found!</div>
            @endif
        </div>
    </div>
</div>

@include('layout.footer')
