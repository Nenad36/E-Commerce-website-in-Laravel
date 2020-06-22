@extends('admin.admin_layouts')

@section('admin_content')

    @php
      $blogcategory = DB::table('post_category')->get();
    @endphp

    <div class="page-content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Blog Section
                            <a href="{{ route('all.blogpost') }}" class="btn btn-sm btn-warning float-right"> All Post <i class="fas fa-th"></i></a>
                        </h4>

                        <form method="post" action="{{ URL::to('update/post/'. $post->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-layout">
                                <div class="row mg-b-25">

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Post Title (ENGLISH): <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="post_title_en" value="{{ $post->post_title_en }}"  placeholder="Enter Post Title in English">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Post Title (HINDI): <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="post_title_in" value="{{ $post->post_title_in }}"  placeholder="Enter Post Title in Hindi">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group mg-b-10-force">
                                            <label class="form-control-label">Blog Category: <span class="tx-danger">*</span></label>
                                            <select class="form-control select2" data-placeholder="Choose Category" name="category_id">
                                                <option label="Choose Category"></option>
                                                @foreach($blogcategory as $row)
                                                    <option value="{{ $row->id }}"
                                                       <?php
                                                        if ($row->id == $post->category_id) { echo "selected"; } ?>
                                                    >
                                                        {{ $row->category_name_en }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Product Details (ENGLISH): <span class="tx-danger">*</span></label>
                                            <textarea id="elm1" name="details_en">{{ $post->details_en }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Product Details (HINDI): <span class="tx-danger">*</span></label>
                                            <textarea id="elm1" name="details_in">{{ $post->details_in }}</textarea>
                                        </div>
                                    </div>

                                    <div class="media ml-3">
                                        <div class="media-body">
                                            <label class="form-control-label">Post Image</label><br>
                                            <label class="custom-file">
                                                <a class='btn btn-primary mb-3' href='javascript:;'>
                                                    Choose File <i class="fa fa-upload"></i>
                                                    <input type="file" id="file" name="post_image" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' size="40"  onchange='$("#upload-file-info").html($(this).val()); readURL(this);'>
                                                </a><br>
                                                <div class="mb-3">
                                                    <input type="hidden" name="old_image" value="{{ $post->post_image }}">
                                                    <img class="rounded-circle shadow" id="one" data-holder-rendered="true">
                                                </div>
                                            </label>
                                        </div>
                                        <img src="{{ URL::to($post->post_image) }}" class="rounded-circle shadow ml-5" data-holder-rendered="true" style="width: 80px; height: 80px;">
                                    </div>

                                </div>

                                <div class="form-group mt-5 float-right">
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
@endsection
