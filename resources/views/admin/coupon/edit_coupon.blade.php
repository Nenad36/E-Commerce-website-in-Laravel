@extends('admin.admin_layouts')

@section('admin_content')
    <div class="page-content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title"> Update Coupon</h4>
                        <form method="POST" action="{{ URL::to('update/coupon/' . $coupon->id) }}">
                            @csrf
                            <div class="form-group">
                                <label for="coupon">Coupon Name</label>
                                <div>
                                    <input type="text" class="form-control @error('coupon') is-invalid @enderror" id="coupon" name="coupon" value="{{ $coupon->coupon }}" aria-describedby="Coupon">
                                    @error('coupon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong><i class="fa fa-exclamation-circle fa-fw"></i>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="discount">Coupon Name</label>
                                <div>
                                    <input type="text" class="form-control @error('discount') is-invalid @enderror" id="discount" name="discount" value="{{ $coupon->discount }}" aria-describedby="Discount">
                                    @error('discount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong><i class="fa fa-exclamation-circle fa-fw"></i>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group m-b-0">
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                        Update Coupon
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

