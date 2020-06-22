@extends('admin.admin_layouts')

@section('admin_content')

    <div class="page-content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Post List</h4>
                        <a href="{{ route('add.blogpost') }}" class="btn btn-sm btn-warning float-right"><i class="fas fa-plus"></i> Add New</a>
                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Post Title</th>
                                <th>Post Category</th>
                                <th>Image</th>
                                <th width="100px">Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($post as $row)
                                <tr>
                                    <td>{{ $row->post_title_en }}</td>
                                    <td>{{ $row->category_name_en }}</td>
                                    <td><img class="img-thumbnail shadow" height="70px;" width="80px;" src="{{ URL::to($row->post_image) }}" data-holder-rendered="true"></td>
                                    <td>
                                        <a href="{{ URL::to('edit/post/' . $row->id) }}" class="btn btn-sm btn-info"><i class="fas fa-pencil-alt"></i> Edit</a>
                                        <a href="{{ URL::to('delete/post/' . $row->id) }}" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i> Delete</a>
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
@endsection

