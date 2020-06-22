@extends('admin.admin_layouts')

@section('admin_content')

    <div class="page-content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Category List</h4>
                        <a href="#" class="btn btn-sm btn-warning float-right" data-toggle="modal" data-target=".bs-example-modal-center"><i class="fas fa-plus"></i> Add New</a>
                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category Name</th>
                                <th width="100px">Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($category as $key=>$row)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $row->category_name }}</td>
                                    <td>
                                        <a href="{{ URL::to('edit/category/' . $row->id) }}" class="btn btn-sm btn-info"><i class="fas fa-pencil-alt"></i> Edit</a>
                                        <a href="{{ URL::to('delete/category/' . $row->id) }}" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i> Delete</a>
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
                        <h5 class="modal-title mt-0">Category Add</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('store.category') }}">
                            @csrf
                            <div class="form-group">
                                <label for="category">Category Name</label>
                                <input type="text" class="form-control @error('category_name') is-invalid @enderror" id="category_name" name="category_name" aria-describedby="Category">
                                @error('category_name')
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

@endsection
