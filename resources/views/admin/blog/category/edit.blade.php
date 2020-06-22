@extends('admin.admin_layouts')

@section('admin_content')
    <div class="page-content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Blog Category Update</h4>
                        <form method="POST" action="{{ URL::to('update/blogcategory/' . $blogcatedit->id) }}">
                            @csrf
                            <div class="form-group">
                                <label>Category Name English</label>
                                <div>
                                    <input type="text" class="form-control @error('category_name_en') is-invalid @enderror" id="category_name_en" name="category_name_en" value="{{ $blogcatedit->category_name_en }}" aria-describedby="Category">
                                    @error('category_name_en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong><i class="fa fa-exclamation-circle fa-fw"></i>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Category Name Hindi</label>
                                <div>
                                    <input type="text" class="form-control @error('category_name_in') is-invalid @enderror" id="category_name_in" name="category_name_in" value="{{ $blogcatedit->category_name_in }}" aria-describedby="Category">
                                    @error('category_name_in')
                                    <span class="invalid-feedback" role="alert">
                                        <strong><i class="fa fa-exclamation-circle fa-fw"></i>{{ $message }}</strong>
                                    </span>
                                    @enderror
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

