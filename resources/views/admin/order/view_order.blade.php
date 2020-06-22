@extends('admin.admin_layouts')

@section('admin_content')

    <div class="page-content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Order Details</h4>

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title mb-4">Order Details</h4>
                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <tbody>
                                                <tr>
                                                    <th scope="row">Name:</th>
                                                    <td>{{ $order->name }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Phone:</th>
                                                    <td>{{ $order->phone }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Payment Type:</th>
                                                    <td>{{ $order->payment_type }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Payment Id:</th>
                                                    <td>{{ $order->payment_id }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Month:</th>
                                                    <td>{{ $order->month }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Date:</th>
                                                    <td>{{ $order->date }}</td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title mb-4">Shipping Details</h4>
                                        <div class="table-responsive order-table">
                                            <table class="table table-hover mb-0">

                                                <tbody>
                                                <tr>
                                                    <th scope="row">Name:</th>
                                                    <td>{{ $shipping->ship_name }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Phone:</th>
                                                    <td>{{ $shipping->ship_phone }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Email:</th>
                                                    <td>{{ $shipping->ship_email }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Address:</th>
                                                    <td>{{ $shipping->ship_city }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Status:</th>
                                                    <td>
                                                        @if($order->status == 0)
                                                            <span class="badge badge-warning">Pending</span>
                                                        @elseif($order->status == 1)
                                                            <span class="badge badge-info">Payment Accept</span>
                                                        @elseif($order->status == 2)
                                                            <span class="badge badge-warning">Progress</span>
                                                        @elseif($order->status == 3)
                                                            <span class="badge badge-success">Delevered</span>
                                                        @else
                                                            <span class="badge badge-danger">Cancle</span>

                                                        @endif

                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Product Details</h4>
                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Product ID</th>
                                <th>Product Name</th>
                                <th>Image</th>
                                <th>Color</th>
                                <th>Size</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th>Total</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($details as $row)
                                <tr>
                                    <td>{{ $row->product_code }}</td>
                                    <td>{{ $row->product_name }}</td>
                                    <td><img class="img-thumbnail shadow" alt="70px;" width="80px;" src="{{ URL::to($row->image_one) }}" data-holder-rendered="true"></td>
                                    <td>{{ $row->color }}</td>
                                    <td>{{ $row->size }}</td>
                                    <td>{{ $row->quantity }}</td>
                                    <td>{{ $row->singleprice }}</td>
                                    <td>{{ $row->totalprice }}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        <div class="d-flex justify-content-between mb-5">
            @if ($order->status == 0)
                <a href="{{ url('admin/payment/accept/'.$order->id) }}" class="btn btn-primary btn-lg waves-effect waves-light col-md-5">Payment Accept</a>
                <a href="{{ url('admin/payment/cancel/'.$order->id) }}" class="btn btn-danger btn-lg  waves-effect waves-light col-md-5">Order Cancel</a>
            @elseif($order->status == 1)
                <a href="{{ url('admin/delevery/process/'.$order->id) }}" class="btn btn-primary btn-lg waves-effect waves-light col-md-5">Process Delevery</a>
            @elseif($order->status == 2)
                <a href="{{ url('admin/delevery/done/'.$order->id) }}" class="btn btn-success btn-lg waves-effect waves-light col-md-5">Delevery Done</a>
            @elseif($order->status == 4)
                <strong class="text-danger text-center"> This order are not valid  </strong>
            @else
                <strong class="text-success text-center">This product are successfuly Deleverd  </strong>
            @endif
        </div>


    </div>
    <!-- end page content-->

@endsection
