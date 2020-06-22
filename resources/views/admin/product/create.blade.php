@extends('admin.admin_layouts')

@section('admin_content')
    <div class="page-content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Product Section
                            <a href="{{ route('all.product') }}" class="btn btn-sm btn-warning float-right"> All Product <i class="fas fa-th"></i></a>
                        </h4>
                        <p class="text-muted m-b-30 ">New Product Add Form</p>

                        <form method="post" action="{{ route('store.product') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-layout">
                                <div class="row mg-b-25">

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Product Name: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="product_name"  placeholder="Enter Product Name">
                                        </div>
                                    </div>


                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Product Code: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="product_code"  placeholder="Enter Product Code">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Quantity: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="number" name="product_quantity"  placeholder="product quantity">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Discount Price: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="number" name="discount_price"  placeholder="Discount Price">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group mg-b-10-force">
                                            <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                                            <select class="form-control select2" data-placeholder="Choose Category" name="category_id">
                                                <option label="Choose Category"></option>
                                                    @foreach($category as $row)
                                                       <option value="{{ $row->id }}">{{ $row->category_name }}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group mg-b-10-force">
                                            <label class="form-control-label">Sub Category: <span class="tx-danger">*</span></label>
                                            <select class="form-control select2" data-placeholder="Choose country" name="subcategory_id">
                                            </select>
                                        </div>
                                    </div><!-- col-4 -->

                                    <div class="col-lg-4">
                                        <div class="form-group mg-b-10-force">
                                            <label class="form-control-label">Brand: <span class="tx-danger">*</span></label>
                                            <select class="form-control select2" data-placeholder="Choose country" name="brand_id">
                                                <option label="Choose Brand"></option>
                                                 @foreach ($brand as $row)
                                                    <option value="{{ $row->id }}">{{ $row->brand_name }}</option>
                                                 @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Product Size: <span class="tx-danger">*</span></label><br>
                                            <input class="form-control" type="text" name="product_size" id="size" data-role="tagsinput">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Product Color: <span class="tx-danger">*</span></label><br>
                                            <input class="form-control" type="text" name="product_color" id="color" data-role="tagsinput">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Selling Price: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="number" name="selling_price" placeholder="Selling Price">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Product Details: <span class="tx-danger">*</span></label>
                                              <textarea id="elm1" name="product_details"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Video Link: <span class="tx-danger">*</span></label>
                                            <input class="form-control" name="video_link" placeholder="Video Link">
                                        </div>
                                    </div>


                            <div class="col-lg-4 mt-3">
                                <div class="form-group">
                                    <label class="form-control-label">Image One ( Main Thumbnali): <span class="tx-danger">*</span></label>
                                    <label class="custom-file">
                                        <a class='btn btn-primary' href='javascript:;'>
                                            Choose File <i class="fa fa-upload"></i>
                                            <input type="file" id="file" name="image_one" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' size="40"  onchange='$("#upload-file-info").html($(this).val()); readURL(this);' required="">
                                        </a>&nbsp;
                                        <div class="row mt-3 ml-3">
                                            <img class="rounded-circle shadow" id="one" data-holder-rendered="true">
                                        </div>
                                    </label>
                                </div>
                            </div>


                                    <div class="col-lg-4 mt-3">
                                        <div class="form-group">
                                            <label class="form-control-label">Image Two: <span class="tx-danger">*</span></label>
                                            <label class="custom-file">
                                                <a class='btn btn-primary' href='javascript:;'>
                                                    Choose File <i class="fa fa-upload"></i>
                                                    <input type="file" id="file" name="image_two" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' size="40"  onchange='$("#upload-file-info").html($(this).val()); readURL2(this);' required="">
                                                </a>&nbsp;
                                                <div class="row mt-3 ml-3">
                                                    <img class="rounded-circle shadow" id="two" data-holder-rendered="true">
                                                </div>
                                            </label>
                                        </div>
                                    </div>


                                    <div class="col-lg-4 mt-3">
                                        <div class="form-group">
                                            <label class="form-control-label">Image Three: <span class="tx-danger">*</span></label>
                                            <label class="custom-file">
                                                <a class='btn btn-primary' href='javascript:;'>
                                                    Choose File <i class="fa fa-upload"></i>
                                                    <input type="file" id="file" name="image_three" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' size="40"  onchange='$("#upload-file-info").html($(this).val()); readURL3(this);' required="">
                                                </a>&nbsp;
                                                <div class="row mt-3 ml-3">
                                                    <img class="rounded-circle shadow" id="three" data-holder-rendered="true">
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                              </div><hr><br><br>


                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="pretty p-default p-thick p-pulse">
                                            <input type="checkbox" name="main_slider" value="1" />
                                            <div class="state p-warning-o">
                                                <label>Main Slider</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="pretty p-default p-thick p-pulse">
                                            <input type="checkbox" name="hot_deal" value="1" />
                                            <div class="state p-warning-o">
                                                <label>Hot Deal</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="pretty p-default p-thick p-pulse">
                                            <input type="checkbox" name="best_rated" value="1" />
                                            <div class="state p-warning-o">
                                                <label>Best Rated</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="pretty p-default p-thick p-pulse">
                                            <input type="checkbox" name="trend" value="1" />
                                            <div class="state p-warning-o">
                                                <label>Trend Product</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="pretty p-default p-thick p-pulse">
                                            <input type="checkbox" name="mid_slider" value="1" />
                                            <div class="state p-warning-o">
                                                <label>Mid Slider</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="pretty p-default p-thick p-pulse">
                                            <input type="checkbox" name="hot_new" value="1" />
                                            <div class="state p-warning-o">
                                                <label>Hot New</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="pretty p-default p-thick p-pulse">
                                            <input type="checkbox" name="buyone_getone" value="1" />
                                            <div class="state p-warning-o">
                                                <label>Buyone Getone</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mt-5">
                                    <div>
                                        <button class="btn btn-primary waves-effect waves-light">
                                            Submit
                                        </button>
                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                    </form>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
    <!-- end page content-->

    <script type="text/javascript">
        $(document).ready(function(){
            $('select[name="category_id"]').on('change',function(){
                var category_id = $(this).val();
                if (category_id) {

                    $.ajax({
                        url: "{{ url('/get/subcategory/') }}/"+category_id,
                        type:"GET",
                        dataType:"json",
                        success:function(data) {
                            var d =$('select[name="subcategory_id"]').empty();
                            $.each(data, function(key, value){

                                $('select[name="subcategory_id"]').append('<option value="'+ value.id + '">' + value.subcategory_name + '</option>');

                            });
                        },
                    });

                }else{
                    alert('danger');
                }

            });
        });

    </script>

    <script type="text/javascript">
        function readURL(input){
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
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
        function readURL2(input){
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
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
        function readURL3(input){
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
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
