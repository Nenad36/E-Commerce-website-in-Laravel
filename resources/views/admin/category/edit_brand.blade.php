@extends('admin.admin_layouts')

@section('admin_content')
    <div class="page-content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title"> Update Brand</h4>
                        <form method="POST" action="{{ URL::to('update/brand/' . $brand->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="brand_name">Brand Name</label>
                                <input type="text" class="form-control @error('brand_name') is-invalid @enderror" id="brand_name" name="brand_name" value="{{ $brand->brand_name }}" aria-describedby="BrandName">
                                @error('brand_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong><i class="fa fa-exclamation-circle fa-fw"></i>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-5">
                                <label for="brand_logo">Brand Logo</label>
                                <input type="file" class="filestyle @error('brand_logo') is-invalid @enderror" id="brand_logo" name="brand_logo" value="{{ $brand->brand_logo }}" aria-describedby="BrandLogo" data-buttonname="btn-secondary">
                                @error('brand_logo')
                                <span class="invalid-feedback" role="alert">
                                        <strong><i class="fa fa-exclamation-circle fa-fw"></i>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mt-4">
                                <label for="old_logo">Old Brand Logo </label>
                                <img class="img-thumbnail shadow" alt="70px;" width="80px;" src="{{ URL::to($brand->brand_logo) }}" data-holder-rendered="true">
                                <input type="hidden" class="filestyle" name="old_logo" value="{{ $brand->brand_logo }}" aria-describedby="BrandLogo" data-buttonname="btn-secondary">
                            </div>

                            <div class="form-group m-b-0">
                                <div class="float-right">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                        Update Brand
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
    @push('scripts')
        <script src="{{ asset('backend/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}"></script>
    @endpush

@endsection
