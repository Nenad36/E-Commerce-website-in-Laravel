@extends('admin.admin_layouts')

@section('admin_content')

    <div class="page-content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Product List</h4>
                        <a href="{{ route('add.product') }}" class="btn btn-sm btn-warning float-right"><i class="fas fa-plus"></i> Add New</a>
                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th class="wd-15p">Product Code</th>
                                <th class="wd-15p">Product Name</th>
                                <th class="wd-15p">Image</th>
                                <th class="wd-15p">Category</th>
                                <th class="wd-15p">Brand</th>
                                <th class="wd-15p">Quantity</th>
                                <th class="wd-15p">Status</th>
                                <th class="wd-20p">Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($product as $row)
                                <tr>
                                    <td>{{ $row->product_code }}</td>
                                    <td>{{ $row->product_name }}</td>
                                    <td><img class="img-thumbnail shadow" alt="70px;" width="80px;" src="{{ URL::to($row->image_one) }}" data-holder-rendered="true"></td>
                                    <td>{{ $row->category_name }}</td>
                                    <td>{{ $row->brand_name }}</td>
                                    <td>{{ $row->product_quantity }}</td>
                                    <td>
                                      @if ($row->status == 1)
                                          <span class="badge badge-success">Active</span>
                                        @else
                                          <span class="badge badge-danger">Inactive</span>
                                      @endif
                                    </td>
                                    <td>
                                        <a href="{{ URL::to('edit/product/' . $row->id) }}" class="btn btn-sm btn-info"><i class="fas fa-pencil-alt"></i> Edit</a>
                                        <a href="{{ URL::to('delete/product/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i> Delete</a>
                                        <a href="{{ URL::to('view/product/'.$row->id) }}" class="btn btn-sm btn-secondary waves-effect"><i class="fa fa-eye"></i> Show</a>

                                        @if ($row->status == 1)
                                            <a href="{{ URL::to('inactive/product/'.$row->id) }}" class="btn btn-sm btn-success waves-effect waves-light"><i class="fa fa-thumbs-up"></i> Active</a>
                                        @else
                                            <a href="{{ URL::to('active/product/'.$row->id) }}" class="btn btn-sm btn-warning waves-effect waves-light"><i class="fa fa-thumbs-down"></i> Inactive</a>
                                        @endif


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


    @push('scripts')
        <script src="{{ asset('backend/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}"></script>
    @endpush

@endsection
