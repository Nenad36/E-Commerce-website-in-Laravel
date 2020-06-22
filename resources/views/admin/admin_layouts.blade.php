<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Ecommerce Admin Panel</title>
    <meta content="Admin Dashboard" name="description"/>
    <meta content="Themesbrand" name="author"/>
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">

    <link rel="stylesheet" href="{{ asset('backend/plugins/morris/morris.css') }}">

    <!-- DataTables -->
    <link href="{{ asset('backend/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{ asset('backend/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/css/metismenu.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

    <!-- Java Script ChekBox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('css')
</head>

<body>
<!-- Begin page -->
<div id="wrapper">


@guest

@else

    <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left topbar-left-sm">
                <a href="{{ url('admin/home') }}" class="logo">
                        <span>
                            <img src="{{ asset('backend/assets/images/logo.png') }}" alt="" height="24">
                        </span>
                    <i>
                        <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="" height="22">
                    </i>
                </a>
            </div>

            <nav class="navbar-custom navbar-custom-sm">

                <ul class="navbar-right d-flex list-inline float-right mb-0">
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="dropdown"
                           href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-bell noti-icon"></i>
                            <span class="badge badge-pill badge-info noti-icon-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                            <!-- item-->
                            <h6 class="dropdown-item-text">
                                Notifications (37)
                            </h6>
                            <div class="slimscroll notification-item-list">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span>
                                    </p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span>
                                    </p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-flag"></i></div>
                                    <p class="notify-details">Your item is shipped<span class="text-muted">It is a long established fact that a reader will</span>
                                    </p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span>
                                    </p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span>
                                    </p>
                                </a>
                            </div>
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                View all <i class="fi-arrow-right"></i>
                            </a>
                        </div>
                    </li>
                    <li class="dropdown notification-list">
                        <div class="dropdown notification-list nav-pro-img">
                            <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user waves-light"
                               data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                               aria-expanded="false">
                                <img src="{{ asset('backend/assets/images/users/user-4.jpg') }}" alt="user"
                                     class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5"></i>
                                    Profile</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-wallet m-r-5"></i> My Wallet</a>
                                <a class="dropdown-item d-block" href="{{ route('admin.password.change') }}"><i class="mdi mdi-settings m-r-5"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="{{ route('admin.logout') }}"><i class="mdi mdi-power text-danger"></i>
                                    Logout</a>
                            </div>
                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-effect waves-light">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
                </ul>

            </nav>

        </div>
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu-sm side-menu">
            <div class="slimscroll-menu" id="remove-scroll">
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">
                        <li class="menu-title">Main</li>

                        <li>
                            <a href="{{ url('admin/home') }}" class="waves-effect">
                                <i class="mdi mdi-home"></i><span class="badge badge-primary float-right">3</span> <span> Dashboard </span>
                            </a>
                        </li>


                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-list-alt"></i><span> Category <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="{{ route('categories') }}">Category</a></li>
                                <li><a href="{{ route('sub.categories') }}">Sub Category</a></li>
                                <li><a href="{{ route('brands') }}">Brand</a></li>
                            </ul>
                        </li>


                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tag"></i><span> Coupons <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="{{ route('admin.coupon') }}">Add Coupon</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-box-open"></i><span> Products <span class="badge badge-success float-right">6</span> </span></a>
                            <ul class="submenu">
                                <li><a href="{{ route('add.product') }}">Add Products</a></li>
                                <li><a href="{{ route('all.product') }}">All Products</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-shopping-cart"></i><span> Orders <span class="badge badge-success float-right">6</span> </span></a>
                            <ul class="submenu">
                                <li><a href="{{ route('admin.neworder') }}">New Orders</a></li>
                                <li><a href="{{ route('all.product') }}">Others</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="fab fa-blogger"></i><span> Blog <span class="badge badge-success float-right">6</span> </span></a>
                            <ul class="submenu">
                                <li><a href="{{ route('add.blog.categorylist') }}">Blog Category</a></li>
                                <li><a href="{{ route('add.blogpost') }}">Add Post</a></li>
                                <li><a href="{{ route('all.blogpost') }}">Post List</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-info-circle"></i><span> Others <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="{{ route('admin.newsletter') }}">Newsletters</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

@endguest
    <div class="content-page content-page-sm">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <h4 class="page-title">{{ auth()->user()->name }}</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Agroxa</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Layouts</a></li>
                                <li class="breadcrumb-item active">Small Sidebar</li>
                            </ol>

                            <div class="state-information d-none d-sm-block">
                                <div class="state-graph">
                                    <div id="header-chart-1"></div>
                                    <div class="info">Balance $ 2,317</div>
                                </div>
                                <div class="state-graph">
                                    <div id="header-chart-2"></div>
                                    <div class="info">Item Sold 1230</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                @yield('admin_content')
            </div> <!-- container-fluid -->
        </div> <!-- content -->
    </div>



    <footer class="footer footer-sm">
        © 2018 Agroxa - <span class="d-none d-sm-inline-block"> Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</span>.
    </footer>

</div>
<!-- END wrapper -->

<!-- jQuery  -->
<script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('backend/assets/js/waves.min.js') }}"></script>

<script src="{{ asset('backend/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

<!-- Peity JS -->
<script src="{{ asset('backend/plugins/peity/jquery.peity.min.js') }}"></script>

<script src="{{ asset('backend/plugins/morris/morris.min.js') }}"></script>
<script src="{{ asset('backend/plugins/raphael/raphael-min.js') }}"></script>

<!-- Required datatable js -->
<script src="{{ asset('backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<!-- Buttons examples -->
<script src="{{ asset('backend/plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables/buttons.colVis.min.js') }}"></script>
<!-- Responsive examples -->
<script src="{{ asset('backend/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

<!-- Datatable init js -->
<script src="{{ asset('backend/assets/pages/datatables.init.js') }}"></script>

<script src="{{ asset('backend/assets/pages/dashboard.js') }}"></script>

<!-- App js -->
<script src="{{ asset('backend/assets/js/app.js') }}"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>

<!--Wysiwig js-->
<script src="{{ asset('backend/plugins/tinymce/tinymce.min.js') }}"></script>

<script>
    $(document).ready(function () {
        if($("#elm1").length > 0){
            tinymce.init({
                selector: "textarea#elm1",
                theme: "modern",
                height:300,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                style_formats: [
                    {title: 'Bold text', inline: 'b'},
                    {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                    {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                    {title: 'Example 1', inline: 'span', classes: 'example1'},
                    {title: 'Example 2', inline: 'span', classes: 'example2'},
                    {title: 'Table styles'},
                    {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                ]
            });
        }
    });
</script>

<script>
        @if(Session::has('messege'))
    var type = "{{Session::get('alert-type','info')}}"
    switch (type) {
        case 'info':
            toastr.info("{{ Session::get('messege') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('messege') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('messege') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('messege') }}");
            break;
    }
    @endif
</script>

<script>
    $(document).on("click", "#delete", function (e) {
        e.preventDefault();
        var link = $(this).attr("href");
        swal({
            title: "Are you Want to delete?",
            text: "Once Delete, This will be Permanently Delete!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    window.location.href = link;
                } else {
                    swal("Safe Data!");
                }
            });
    });
</script>

@stack('scripts')

</body>

</html>
