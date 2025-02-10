@include('layout.header')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">Sub Category</div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Update Sub Category</h3>
            </div>
            <hr>

            {{-- Ensure $sub_category exists --}}
            @if(isset($sub_category))
                <form action="{{ route('sub_categories.update', $sub_category->id) }}" method="POST" novalidate="novalidate">
                    @csrf  {{-- CSRF Token Required --}}
                    @method('PUT') {{-- Laravel requires PUT for updates --}}
                    
                    {{-- Show validation errors --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <div class="form-group">
                        <label for="name" class="control-label mb-1">Sub Category Name</label>
                        <input id="name" name="name" type="text" class="form-control"
                            value="{{ old('name', $sub_category->name) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="category_id" class="control-label mb-1">Category</label>
                        <select id="category_id" class="form-control" name="category_id" required>
                            <option value="">-- Select Category --</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" 
                                    {{ old('category_id', $sub_category->category_id) == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-lg btn-info btn-block">
                            <span>Update Sub Category</span>
                        </button>
                    </div>
                </form>
            @else
                <div class="alert alert-danger">Sub Category not found!</div>
            @endif
        </div>
    </div>
</div>

@include('layout.footer')
