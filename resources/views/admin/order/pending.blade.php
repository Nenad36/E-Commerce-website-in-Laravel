@extends('admin.admin_layouts')

@section('admin_content')

    <div class="page-content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Order Details</h4>
                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Payment Type</th>
                                <th>Transction ID</th>
                                <th>SubTotal</th>
                                <th>Shipping</th>
                                <th>Total</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($order as $row)
                                <tr>
                                    <td>{{ $row->payment_type }}</td>
                                    <td>{{ $row->blnc_transection }}</td>
                                    <td>{{ $row->subtotal }} $</td>
                                    <td>{{ $row->shipping }} $</td>
                                    <td>{{ $row->total }} $</td>
                                    <td>{{ $row->date }}  </td>
                                    <td><span class="badge badge-warning">Padding</span> </td>


                                    <td>
                                        <a href="{{ URL::to('admin/view/order/'.$row->id) }}" class="btn btn-sm btn-info"><i class="fas fa-pencil-alt"></i> Wiew</a>
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
