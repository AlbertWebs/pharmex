<!DOCTYPE html>
<html lang="en">
    <head>


        <meta charset="utf-8" />
                <title>Pharmex - Admin & Dashboard</title>
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
                <meta content="" name="author" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />

                <!-- App favicon -->
                <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.ico')}}">



         <!-- App css -->
         <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{asset('admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{asset('admin/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body id="body" class="dark-sidebar">
        <!-- leftbar-tab-menu -->
        <div class="left-sidebar">
            <!-- LOGO -->
            <div class="brand">
                <a href="index.html" class="logo">
                    <span>
                        <img src="{{asset('admin/assets/images/logo-sm.png')}}" alt="logo-small" class="logo-sm">
                    </span>
                    <span>
                        <img src="{{asset('admin/assets/images/logo.png')}}" alt="logo-large" class="logo-lg logo-light">
                        <img src="{{asset('admin/assets/images/logo-dark.png')}}" alt="logo-large" class="logo-lg logo-dark">
                    </span>
                </a>
            </div>
            <div class="sidebar-user-pro media border-end">
                <div class="position-relative mx-auto">
                    <img src="{{asset('admin/assets/images/users/user-1.jpg')}}" alt="user" class="rounded-circle thumb-md">
                    <span class="online-icon position-absolute end-0"><i class="mdi mdi-record text-success"></i></span>
                </div>
                <div class="media-body ms-2 user-detail align-self-center">
                    <h5 class="font-14 m-0 fw-bold">Dr. Bevin Likuyani </h5>
                    <p class="opacity-50 mb-0">bevin@pharmex.com</p>
                </div>
            </div>
            <div class="border-end">
                <ul class="nav nav-tabs menu-tab nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#Main" role="tab" aria-selected="true">M<span>ain</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#Extra" role="tab" aria-selected="false">E<span>xtra</span></a>
                    </li>
                </ul>
            </div>
            <!-- Tab panes -->

            <!--end logo-->
            @include('admin.sidebar')
        </div>
        <!-- end left-sidenav-->
        <!-- end leftbar-menu-->

        <!-- Top Bar Start -->
        <!-- Top Bar Start -->
        @include('admin.topbar')
        <!-- Top Bar End -->
        <!-- Top Bar End -->

        <div class="page-wrapper">

            <!-- Page Content-->
            <div class="page-content-tab">

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Pharmex</a>
                                        </li><!--end nav-item-->
                                        <li class="breadcrumb-item"><a href="#">Dashboard</a>
                                        </li><!--end nav-item-->
                                        <li class="breadcrumb-item active">Analytics</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">All Orders</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->


                    {{--  --}}
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Product Name</th>
                                                <th>Category</th>
                                                <th>Pics</th>
                                                <th>Price</th>
                                                <th>Status</th>
                                                <th>Brand</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <img src="{{asset('admin/assets/images/products/08.jpg')}}" alt="" height="40">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name fw-semibold">Apple Watch</a>
                                                        <br>
                                                        <span class="text-muted font-13 fw-semibold">Size-05 (Model 2021)</span>
                                                    </p>
                                                </td>
                                                <td>Category 1</td>
                                                <td>32</td>
                                                <td>$39</td>
                                                <td><span class="badge badge-soft-purple">Stock</span></td>
                                                <td>
                                                   PAR
                                                </td>
                                                 <td>
                                                    <a href="#" class="mr-2"><i class="las la-pen text-secondary font-16"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{asset('admin/assets/images/products/08.jpg')}}" alt="" height="40">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name fw-semibold">Morden Chair</a>
                                                        <br>
                                                        <span class="text-muted font-13 fw-semibold">Size-Mediam (Model 2021)</span>
                                                    </p>
                                                </td>
                                                <td>Category 2</td>
                                                <td>10</td>
                                                <td>$99</td>
                                                <td><span class="badge badge-soft-pink">Sold</span></td>
                                                <td>
                                                    PAR
                                                </td>
                                                 <td>
                                                    <a href="#" class="mr-2"><i class="las la-pen text-secondary font-16"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{asset('admin/assets/images/products/08.jpg')}}" alt="" height="40">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name fw-semibold">Reebok Shoes</a>
                                                        <br>
                                                        <span class="text-muted font-13 fw-semibold">size-08 (Model 2021)</span>
                                                    </p>
                                                </td>
                                                <td>Category 3</td>
                                                <td>24</td>
                                                <td>$49</td>
                                                <td><span class="badge badge-soft-purple">Stock</span></td>
                                                <td>
                                                    PAR
                                                </td>
                                                 <td>
                                                    <a href="#" class="mr-2"><i class="las la-pen text-secondary font-16"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{asset('admin/assets/images/products/08.jpg')}}" alt="" height="40">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name fw-semibold">Cosco Vollyboll</a>
                                                        <br>
                                                        <span class="text-muted font-13 fw-semibold">size-04 (Model 2021)</span>
                                                    </p>
                                                </td>
                                                <td>Category 1</td>
                                                <td>8</td>
                                                <td>$49</td>
                                                <td><span class="badge badge-soft-purple">Stock</span></td>
                                                <td>
                                                    PAR
                                                </td>
                                                 <td>
                                                    <a href="#" class="mr-2"><i class="las la-pen text-secondary font-16"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{asset('admin/assets/images/products/08.jpg')}}" alt="" height="40">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name fw-semibold">Royal Purse</a>
                                                        <br>
                                                        <span class="text-muted font-13 fw-semibold">Pure Lether 100%</span>
                                                    </p>
                                                </td>
                                                <td>Category 4</td>
                                                <td>52</td>
                                                <td>$89</td>
                                                <td><span class="badge badge-soft-purple">Stock</span></td>
                                                <td>
                                                    PAR
                                                </td>
                                                 <td>
                                                    <a href="#" class="mr-2"><i class="las la-pen text-secondary font-16"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{asset('admin/assets/images/products/08.jpg')}}" alt="" height="40">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name fw-semibold">New Morden Chair</a>
                                                        <br>
                                                        <span class="text-muted font-13 fw-semibold">size-05 (Model 2021)</span>
                                                    </p>
                                                </td>
                                                <td>Category 2</td>
                                                <td>6</td>
                                                <td>$20</td>
                                                <td><span class="badge badge-soft-purple">Stock</span></td>
                                                <td>
                                                    PAR
                                                </td>
                                                 <td>
                                                    <a href="#" class="mr-2"><i class="las la-pen text-secondary font-16"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{asset('admin/assets/images/products/08.jpg')}}" alt="" height="40">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name fw-semibold">Important Chair</a>
                                                        <br>
                                                        <span class="text-muted font-13 fw-semibold">size-05 (Model 2021)</span>
                                                    </p>
                                                </td>
                                                <td>Category 2</td>
                                                <td>32</td>
                                                <td>$39</td>
                                                <td><span class="badge badge-soft-purple">Stock</span></td>
                                                <td>
                                                    PAR
                                                </td>
                                                 <td>
                                                    <a href="#" class="mr-2"><i class="las la-pen text-secondary font-16"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="{{asset('admin/assets/images/products/08.jpg')}}" alt="" height="40">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name fw-semibold">Nivya Footboll</a>
                                                        <br>
                                                        <span class="text-muted font-13 fw-semibold">Size-05 (Model 2021)</span>
                                                    </p>
                                                </td>
                                                <td>Category 1</td>
                                                <td>32</td>
                                                <td>$39</td>
                                                <td><span class="badge badge-soft-purple">Stock</span></td>
                                                <td>
                                                    PAR
                                                </td>
                                                 <td>
                                                    <a href="#" class="mr-2"><i class="las la-pen text-secondary font-16"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{asset('admin/assets/images/products/08.jpg')}}" alt="" height="40">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name fw-semibold">Green Morden Chair</a>
                                                        <br>
                                                        <span class="text-muted font-13 fw-semibold">Size-Mediam (Model 2021)</span>
                                                    </p>
                                                </td>
                                                <td>Category 2</td>
                                                <td>10</td>
                                                <td>$99</td>
                                                <td><span class="badge badge-soft-pink">Sold</span></td>
                                                <td>
                                                    PAR
                                                </td>
                                                 <td>
                                                    <a href="#" class="mr-2"><i class="las la-pen text-secondary font-16"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{asset('admin/assets/images/products/08.jpg')}}" alt="" height="40">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name fw-semibold">Bata Shoes</a>
                                                        <br>
                                                        <span class="text-muted font-13 fw-semibold">size-08 (Model 2021)</span>
                                                    </p>
                                                </td>
                                                <td>Category 3</td>
                                                <td>24</td>
                                                <td>$49</td>
                                                <td><span class="badge badge-soft-purple">Stock</span></td>
                                                <td>
                                                    PAR
                                                </td>
                                                 <td>
                                                    <a href="#" class="mr-2"><i class="las la-pen text-secondary font-16"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <button class="btn btn-outline-light btn-sm px-4 ">+ Add New</button>
                                        </div><!--end col-->
                                        <div class="col-auto">
                                            <nav aria-label="...">
                                                <ul class="pagination pagination-sm mb-0">
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                    </li>
                                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">Next</a>
                                                    </li>
                                                </ul><!--end pagination-->
                                            </nav><!--end nav-->
                                         </div> <!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                    {{--  --}}


                </div><!-- container -->

                <!--Start Rightbar-->
                <!--Start Rightbar/offcanvas-->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
                    <div class="offcanvas-header border-bottom">
                      <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
                      <button type="button" class="btn-close text-reset p-0 m-0 align-self-center" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <h6>Account Settings</h6>
                        <div class="p-2 text-start mt-3">
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch1">
                                <label class="form-check-label" for="settings-switch1">Auto updates</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
                                <label class="form-check-label" for="settings-switch2">Location Permission</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="settings-switch3">
                                <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
                            </div><!--end form-switch-->
                        </div><!--end /div-->
                        <h6>General Settings</h6>
                        <div class="p-2 text-start mt-3">
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch4">
                                <label class="form-check-label" for="settings-switch4">Show me Online</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
                                <label class="form-check-label" for="settings-switch5">Status visible to all</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="settings-switch6">
                                <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
                            </div><!--end form-switch-->
                        </div><!--end /div-->
                    </div><!--end offcanvas-body-->
                </div>
                <!--end Rightbar/offcanvas-->
                 <!--end Rightbar-->

                <!--Start Footer-->
                <!-- Footer Start -->
                <footer class="footer text-center text-sm-start">
                    &copy; <script>
                        document.write(new Date().getFullYear())
                    </script> Pharmex <span class="text-muted d-none d-sm-inline-block float-end">MVP Crafted with <i
                            class="mdi mdi-heart text-danger"></i> by Drenla Hub</span>
                </footer>
                <!-- end Footer -->
                <!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        <!-- Javascript  -->

        <script src="{{asset('admin/assets/plugins/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{asset('admin/assets/pages/analytics-index.init.js')}}"></script>

        <script src="{{asset('admin/assets/plugins/tinymce/tinymce.min.js')}}"></script>
        <script src="{{asset('admin/assets/pages/form-editor.init.js')}}"></script>

        <script src="{{asset('admin/assets/pages/file-upload.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('admin/assets/js/app.js')}}"></script>

    </body>
    <!--end body-->
</html>
