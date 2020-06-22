@extends('admin.admin_layouts')

@section('admin_content')
    <div class="page-content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mb-5"> <span class="badge badge-pill badge-primary">Product Details Page</span></h4>

                            <div class="form-layout">
                                <div class="row mg-b-25 mb-5">

                                    <div class="col-lg-4">
                                        <div class="card m-b-30 text-white bg-success">
                                            <div class="card-body">
                                                <blockquote class="card-blockquote mb-0">
                                                    <h4 class="card-title font-16 mt-0">Product Name:</h4>
                                                    <footer class="blockquote-footer text-white font-12">
                                                        {{ $product->product_name }}
                                                    </footer>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="card m-b-30 text-white bg-success">
                                            <div class="card-body">
                                                <blockquote class="card-blockquote mb-0">
                                                    <h4 class="card-title font-16 mt-0">Product Code:</h4>
                                                    <footer class="blockquote-footer text-white font-12">
                                                        {{ $product->product_code }}
                                                    </footer>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="card m-b-30 text-white bg-success">
                                            <div class="card-body">
                                                <blockquote class="card-blockquote mb-0">
                                                    <h4 class="card-title font-16 mt-0">Quantity:</h4>
                                                    <footer class="blockquote-footer text-white font-12">
                                                        {{ $product->product_quantity }}
                                                    </footer>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="card m-b-30 text-white bg-dark">
                                            <div class="card-body">
                                                <blockquote class="card-blockquote mb-0">
                                                    <h4 class="card-title font-16 mt-0">Category:</h4>
                                                    <footer class="blockquote-footer text-white font-12">
                                                        {{ $product->category_name }}
                                                    </footer>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="card m-b-30 text-white bg-dark">
                                            <div class="card-body">
                                                <blockquote class="card-blockquote mb-0">
                                                    <h4 class="card-title font-16 mt-0">Sub Category:</h4>
                                                    <footer class="blockquote-footer text-white font-12">
                                                        {{ $product->subcategory_name }}
                                                    </footer>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-4">
                                        <div class="card m-b-30 text-white bg-dark">
                                            <div class="card-body">
                                                <blockquote class="card-blockquote mb-0">
                                                    <h4 class="card-title font-16 mt-0">Brand:</h4>
                                                    <footer class="blockquote-footer text-white font-12">
                                                        {{ $product->brand_name }}
                                                    </footer>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="card m-b-30 text-white bg-danger">
                                            <div class="card-body">
                                                <blockquote class="card-blockquote mb-0">
                                                    <h4 class="card-title font-16 mt-0">Product Size:</h4>
                                                    <footer class="blockquote-footer text-white font-12">
                                                        {{ $product->product_size }}
                                                    </footer>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-4">
                                        <div class="card m-b-30 text-white bg-danger">
                                            <div class="card-body">
                                                <blockquote class="card-blockquote mb-0">
                                                    <h4 class="card-title font-16 mt-0">Product Color:</h4>
                                                    <footer class="blockquote-footer text-white font-12">
                                                        {{ $product->product_color }}
                                                    </footer>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="card m-b-30 text-white bg-danger">
                                            <div class="card-body">
                                                <blockquote class="card-blockquote mb-0">
                                                    <h4 class="card-title font-16 mt-0">Selling Price:</h4>
                                                    <footer class="blockquote-footer text-white font-12">
                                                        {{ $product->selling_price }}
                                                    </footer>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-md-12">
                                        <div class="card m-b-30 card-body">
                                            <h4> <span class="badge badge-pill badge-dark">Product Details:</span></h4>
                                            <p class="card-text">{!! $product->product_details !!} </p>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="card m-b-30 text-white bg-danger">
                                            <div class="card-body">
                                                <blockquote class="card-blockquote mb-0">
                                                    <h4 class="card-title font-16 mt-0">Video Link:</h4>
                                                    <footer class="blockquote-footer text-white font-12">
                                                        {{ $product->video_link }}
                                                    </footer>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <h6 class="mb-3"> <span class="badge badge-pill badge-dark">Image One</span></h6>
                                            <img class="img-thumbnail shadow" alt="80px;" width="80px;" src="{{ URL::to($product->image_one) }}" data-holder-rendered="true">
                                        </div>
                                    </div><!-- col-4 -->

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <h6 class="mb-3"> <span class="badge badge-pill badge-dark">Image Two:</span></h6>
                                            <img class="img-thumbnail shadow" alt="80px;" width="80px;" src="{{ URL::to($product->image_two) }}" data-holder-rendered="true">
                                        </div>
                                    </div><!-- col-4 -->

                                   <div class="col-lg-4">
                                        <div class="form-group">
                                            <h6 class="mb-3"> <span class="badge badge-pill badge-dark">Image Three:</span></h6>
                                            <img class="img-thumbnail shadow" alt="80px;" width="80px;" src="{{ URL::to($product->image_three) }}" data-holder-rendered="true">
                                        </div>
                                   </div><!-- col-4 -->


                                </div><!-- row -->
                                <hr>


                                <div class="row">

                                    <div class="col-lg-4">
                                        <label class="">
                                            @if($product->main_slider == 1)
                                                <span class="badge badge-success">Active</span>

                                            @else
                                                <span class="badge badge-danger">Inactive</span>
                                            @endif

                                            <span>Main Slider</span>
                                        </label>

                                    </div> <!-- col-4 -->

                                    <div class="col-lg-4">
                                        <label class="">
                                            @if($product->hot_deal == 1)
                                                <span class="badge badge-success">Active</span>

                                            @else
                                                <span class="badge badge-danger">Inactive</span>
                                            @endif

                                            <span>Hot Deal</span>
                                        </label>

                                    </div> <!-- col-4 -->



                                    <div class="col-lg-4">
                                        <label class="">
                                            @if($product->best_rated == 1)
                                                <span class="badge badge-success">Active</span>

                                            @else
                                                <span class="badge badge-danger">Inactive</span>
                                            @endif

                                            <span>Best Rated</span>
                                        </label>

                                    </div> <!-- col-4 -->


                                    <div class="col-lg-4">
                                        <label class="">
                                            @if($product->trend == 1)
                                                <span class="badge badge-success">Active</span>

                                            @else
                                                <span class="badge badge-danger">Inactive</span>
                                            @endif

                                            <span>Trend Product </span>
                                        </label>

                                    </div> <!-- col-4 -->

                                    <div class="col-lg-4">
                                        <label class="">
                                            @if($product->mid_slider == 1)
                                                <span class="badge badge-success">Active</span>

                                            @else
                                                <span class="badge badge-danger">Inactive</span>
                                            @endif

                                            <span>Mid Slider</span>
                                        </label>

                                    </div> <!-- col-4 -->

                                    <div class="col-lg-4">
                                        <label class="">
                                            @if($product->hot_new == 1)
                                                <span class="badge badge-success">Active</span>

                                            @else
                                                <span class="badge badge-danger">Inactive</span>
                                            @endif

                                            <span>Hot New </span>
                                        </label>

                                    </div> <!-- col-4 -->


                                </div><!-- end row -->

                            </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
    <!-- end page content-->
@endsection

@push('scripts')
    <script src="{{ asset('backend/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}"></script>
@endpush

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css" rel="stylesheet"/>
@endsection
