@extends('admin.admin_layouts')

@section('admin_content')
    <div class="page-content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title"> Update Sub Category</h4>
                        <form method="POST" action="{{ URL::to('update/subcategory/' . $subcat->id) }}">
                            @csrf
                            <div class="form-group">
                                <label for="subcategory_name">Sub Category Name</label>
                                <div>
                                    <input type="text" class="form-control" id="subcategory_name" name="subcategory_name" value="{{ $subcat->subcategory_name }}" aria-describedby="Category">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="category_name">Category Name</label>
                                <div>
                                    <select class="form-control" name="category_id">

                                        @foreach($category as $row)
                                            <option value="{{ $row->id }}"
                                            <?php if ($row->id == $subcat->category_id ) {
                                                echo "selected"; } ?> >{{ $row->category_name }}  </option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="form-group m-b-0">
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                        Update Category
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
    <!-- end page content-->
@endsection

