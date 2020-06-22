@extends('admin.admin_layouts')

@section('admin_content')

      @php
        $category = DB::table('categories')->get();
        $brand = DB::table('brands')->get();
        $subcategory = DB::table('subcategories')->get();
      @endphp

    <div class="page-content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Update Product
                            <a href="{{ route('all.product') }}" class="btn btn-sm btn-warning float-right"> All Product <i class="fas fa-th"></i></a>
                        </h4>
                        <p class="text-muted m-b-30 ">Update Prodcut Form</p>

                        <form method="post" action="{{ url('update/product/withoutphoto/'.$product->id) }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-layout">
                                <div class="row mg-b-25">

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Product Name: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="product_name" value="{{ $product->product_name }}">
                                        </div>
                                    </div><!-- col-4 -->

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Product Code: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="product_code" value="{{ $product->product_code }}">
                                        </div>
                                    </div><!-- col-4 -->

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Quantity: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="number" name="product_quantity" value="{{ $product->product_quantity }}">
                                        </div>
                                    </div><!-- col-4 -->

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Discount Price: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="number" name="discount_price" value="{{ $product->discount_price }}">
                                        </div>
                                    </div><!-- col-4 -->

                                    <div class="col-lg-4">
                                        <div class="form-group mg-b-10-force">
                                            <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                                            <select class="form-control select2" data-placeholder="Choose country" name="category_id">
                                                <option label="Choose Category"></option>
                                                @foreach($category as $row)
                                                    <option
                                                        value="{{ $row->id }}" <?php if ($row->id == $product->category_id) {
                                                        echo "selected";
                                                    } ?> > {{ $row->category_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div><!-- col-4 -->

                                    <div class="col-lg-4">
                                        <div class="form-group mg-b-10-force">
                                            <label class="form-control-label">Sub Category: <span
                                                    class="tx-danger">*</span></label>
                                            <select class="form-control select2" name="subcategory_id">
                                                @foreach($subcategory as $row)
                                                    <option value="{{ $row->id }}" <?php if ($row->id == $product->subcategory_id) {
                                                        echo "selected";
                                                    } ?> > {{ $row->subcategory_name }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div><!-- col-4 -->


                                    <div class="col-lg-4">
                                        <div class="form-group mg-b-10-force">
                                            <label class="form-control-label">Brand: <span class="tx-danger">*</span></label>
                                            <select class="form-control select2" data-placeholder="Choose country" name="brand_id">
                                                <option label="Choose Brand"></option>
                                                @foreach($brand as $br)
                                                    <option value="{{ $br->id }}" <?php if ($br->id == $product->brand_id) {
                                                        echo "selected";
                                                    } ?> > {{ $br->brand_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div><!-- col-4 -->

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Product Size: <span class="tx-danger">*</span></label><br>
                                            <input class="form-control" type="text" name="product_size" id="size" data-role="tagsinput" value="{{ $product->product_size }}">
                                        </div>
                                    </div><!-- col-4 -->

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Product Color: <span class="tx-danger">*</span></label><br>
                                            <input class="form-control" type="text" name="product_color" id="color" data-role="tagsinput" value="{{ $product->product_color }}">
                                        </div>
                                    </div><!-- col-4 -->

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Selling Price: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="number" name="selling_price" value="{{ $product->selling_price }}">
                                        </div>
                                    </div><!-- col-4 -->


                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label class="form-control-label">Product Details: <span class="tx-danger">*</span></label>
                                                <textarea id="elm1" name="product_details">{{ $product->product_details }}</textarea>
                                            </div>
                                        </div>
                                    </div><!-- col-4 -->



                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Video Link: <span class="tx-danger">*</span></label>
                                            <input class="form-control" name="video_link" value="{{ $product->video_link }}">
                                        </div>
                                    </div>

                                </div><!-- row -->

                                <hr><br><br>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="pretty p-default p-thick p-pulse">
                                            <input type="checkbox" name="main_slider" value="1" <?php if ($product->main_slider == 1) { echo "checked"; } ?> />
                                            <div class="state p-warning-o">
                                                <label>Main Slider</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="pretty p-default p-thick p-pulse">
                                            <input type="checkbox" name="hot_deal" value="1" <?php if ($product->hot_deal == 1) { echo "checked"; } ?> />
                                            <div class="state p-warning-o">
                                                <label>Hot Deal</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="pretty p-default p-thick p-pulse">
                                            <input type="checkbox" name="best_rated" value="1" <?php if ($product->best_rated == 1) { echo "checked"; } ?> />
                                            <div class="state p-warning-o">
                                                <label>Best Rated</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="pretty p-default p-thick p-pulse">
                                            <input type="checkbox" name="trend" value="1" <?php if ($product->trend == 1) { echo "checked"; } ?> />
                                            <div class="state p-warning-o">
                                                <label>Trend Product</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="pretty p-default p-thick p-pulse">
                                            <input type="checkbox" name="mid_slider" value="1" <?php if ($product->mid_slider == 1) { echo "checked"; } ?> />
                                            <div class="state p-warning-o">
                                                <label>Mid Slider</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="pretty p-default p-thick p-pulse">
                                            <input type="checkbox" name="hot_new" value="1" <?php if ($product->hot_new == 1) { echo "checked"; } ?> />
                                            <div class="state p-warning-o">
                                                <label>Hot New</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="pretty p-default p-thick p-pulse">
                                            <input type="checkbox" name="buyone_getone" value="1" <?php if ($product->buyone_getone == 1) { echo "checked"; } ?> />
                                            <div class="state p-warning-o">
                                                <label>Buyone Getone</label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <br><br>

                                <div class="form-layout-footer">
                                    <button class="btn btn-warning mg-r-5">Update Product</button>
                                </div><!-- form-layout-footer -->
                            </div><!-- form-layout -->
                        </form>
                     </div>
                 </div> <!-- end col -->
            </div> <!-- end row -->
       </div>

        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">
                        <p class="text-muted m-b-30 ">Update Images</p>

                        <form method="post" action="{{ url('update/product/photo/'.$product->id) }}" enctype="multipart/form-data">
                        @csrf
                            <div class="row mg-b-25 mb-5">
                                <div class="media ml-3">
                                    <div class="media-body">
                                        <label class="form-control-label">Image One: <span class="tx-danger">*</span></label><br>
                                        <label class="custom-file">
                                            <a class='btn btn-primary mb-3' href='javascript:;'>
                                                Choose File <i class="fa fa-upload"></i>
                                                <input type="file" id="file" name="image_one" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' size="40"  onchange='$("#upload-file-info").html($(this).val()); readURL(this);'>
                                            </a><br>
                                            <div class="mb-3">
                                                <input type="hidden" name="old_one" value="{{ $product->image_one }}">
                                                <img class="rounded-circle shadow" id="one" data-holder-rendered="true">
                                            </div>
                                        </label>
                                    </div>
                                    <img src="{{ URL::to($product->image_one) }}" class="rounded-circle shadow ml-5" data-holder-rendered="true" style="width: 80px; height: 80px;">
                                </div>

                                <div class="media ml-3">
                                    <div class="media-body">
                                        <label class="form-control-label">Image Two: <span class="tx-danger">*</span></label><br>
                                        <label class="custom-file">
                                            <a class='btn btn-primary mb-3' href='javascript:;'>
                                                Choose File <i class="fa fa-upload"></i>
                                                <input type="file" id="file" name="image_two" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' size="40"  onchange='$("#upload-file-info").html($(this).val()); readURL2(this);'>
                                            </a><br>
                                            <div class="mb-3">
                                                <input type="hidden" name="old_two" value="{{ $product->image_two }}">
                                                <img class="rounded-circle shadow" id="two" data-holder-rendered="true">
                                            </div>
                                        </label>
                                    </div>
                                    <img src="{{ URL::to($product->image_two) }}" class="rounded-circle shadow ml-5" data-holder-rendered="true" style="width: 80px; height: 80px;">
                                </div>

                                <div class="media ml-3">
                                    <div class="media-body">
                                        <label class="form-control-label">Image Three: <span class="tx-danger">*</span></label><br>
                                        <label class="custom-file">
                                            <a class='btn btn-primary mb-3' href='javascript:;'>
                                                Choose File <i class="fa fa-upload"></i>
                                                <input type="file" id="file" name="image_three" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' size="40"  onchange='$("#upload-file-info").html($(this).val()); readURL3(this);'>
                                            </a><br>
                                            <div class="mb-3">
                                                <input type="hidden" name="old_three" value="{{ $product->image_three }}">
                                                <img class="rounded-circle shadow" id="three" data-holder-rendered="true">
                                            </div>
                                        </label>
                                    </div>
                                    <img src="{{ URL::to($product->image_three) }}" class="rounded-circle shadow ml-5" data-holder-rendered="true" style="width: 80px; height: 80px;">
                                </div>
                            </div>


                            <div class="form-layout-footer">
                                <button type="submit" class="btn btn-warning mg-r-5">Update Photo</button>
                            </div>
                        </form>
                    </div> <!-- end col -->
            </div> <!-- end row -->
        </div>
    </div>
    <!-- end page content-->

    <script type="text/javascript">
        $(document).ready(function () {
            $('select[name="category_id"]').on('change', function () {
                var category_id = $(this).val();
                if (category_id) {

                    $.ajax({
                        url: "{{ url('/get/subcategory/') }}/" + category_id,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            var d = $('select[name="subcategory_id"]').empty();
                            $.each(data, function (key, value) {

                                $('select[name="subcategory_id"]').append('<option value="' + value.id + '">' + value.subcategory_name + '</option>');

                            });
                        },
                    });

                } else {
                    alert('danger');
                }

            });
        });

    </script>

    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#one')
                        .attr('src', e.target.result)
                        .width(80)
                        .height(80);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <script type="text/javascript">
        function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#two')
                        .attr('src', e.target.result)
                        .width(80)
                        .height(80);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <script type="text/javascript">
        function readURL3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#three')
                        .attr('src', e.target.result)
                        .width(80)
                        .height(80);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <style>
        .input-tags {
            width: 100%;
            padding: 15px;
            display: block;
            margin: 0 auto;
        }

        .label-info {
            background-color: #5bc0de;
            padding: 3px;
        }
    </style>

@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
    <script src="{{ asset('backend/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}"></script>
@endpush

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet"/>
@endsection
