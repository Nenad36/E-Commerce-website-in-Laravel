@extends('admin.admin_layouts')

@section('admin_content')

    <div class="page-content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Brand List</h4>
                        <a href="#" class="btn btn-sm btn-warning float-right" data-toggle="modal" data-target=".bs-example-modal-center"><i class="fas fa-plus"></i> Add New</a>
                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Brand Name</th>
                                <th>Brand Logo</th>
                                <th width="100px">Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($brand as $key=>$row)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $row->brand_name}}</td>
                                    <td><img class="img-thumbnail shadow" alt="70px;" width="80px;" src="{{ URL::to($row->brand_logo) }}" data-holder-rendered="true"></td>
                                    <td>
                                        <a href="{{ URL::to('edit/brand/' . $row->id) }}" class="btn btn-sm btn-info"><i class="fas fa-pencil-alt"></i> Edit</a>
                                        <a href="{{ URL::to('delete/brand/' . $row->id) }}" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i> Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
    <!-- end page content-->

    <div class="col-sm-6 col-md-3 m-t-30">
        <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0">Brand Add</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('store.brand') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="brand_name">Brand Name</label>
                                <input type="text" class="form-control @error('brand_name') is-invalid @enderror" id="brand_name" name="brand_name" aria-describedby="BrandName">
                                @error('brand_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong><i class="fa fa-exclamation-circle fa-fw"></i>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="brand_logo">Brand Logo</label>
                                <input type="file" class="filestyle @error('brand_logo') is-invalid @enderror" data-input="false" id="brand_logo" name="brand_logo" aria-describedby="BrandLogo" data-buttonname="btn-secondary">
                                @error('brand_logo')
                                <span class="invalid-feedback" role="alert">
                                        <strong><i class="fa fa-exclamation-circle fa-fw"></i>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>

    @push('scripts')
        <script src="{{ asset('backend/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}"></script>
    @endpush

@endsection
