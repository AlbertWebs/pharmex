<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>Pharmex - Admin & Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

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
                <a href="{{url('/')}}" class="logo">
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
                    <h5 class="font-14 m-0 fw-bold"> {{Auth::User()->name}}</h5>
               <p class="opacity-50 mb-0">{{Auth::User()->email}}</p>
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
                                        {{-- <li class="breadcrumb-item"><a href="#">Unikit</a></li>
                                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                        <li class="breadcrumb-item active">Profile</li> --}}
                                    </ol>
                                </div>
                                <h4 class="page-title">Profile</h4>
                            </div>
                            <!--end page-title-box-->
                        </div>
                        <!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="met-profile">
                                        <div class="row">
                                            <div class="col-lg-4 align-self-center mb-3 mb-lg-0">
                                                <div class="met-profile-main">
                                                    <div class="met-profile-main-pic">
                                                        <img src="{{$User->image}}" alt="" height="110" class="rounded-circle">
                                                        <span class="met-profile_main-pic-change">
                                                            <i class="fas fa-camera"></i>
                                                        </span>
                                                    </div>
                                                    <div class="met-profile_user-detail">
                                                        <h5 class="met-user-name">{{$User->company}}</h5>
                                                        <p class="mb-0 met-user-name-post">{{$User->name}}</p>
                                                        <p class="mb-0 met-user-name-post">{{$User->position}}</p>
                                                        <p class="mb-0 met-user-name-post">License Number: <strong>{{$User->license}}</strong> </p>
                                                        <p class="mb-0 met-user-name-post">Premises License Number: <strong>{{$User->license_premises}}</strong> </p>

                                                    </div>
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-lg-4 ms-auto align-self-center">
                                                <ul class="list-unstyled personal-detail mb-0">
                                                    <li class=""><i class="las la-phone mr-2 text-secondary font-22 align-middle"></i> <b> phone </b> : {{$User->mobile}}</li>
                                                    <li class="mt-2"><i class="las la-envelope text-secondary font-22 align-middle mr-2"></i> <b> Email </b> : {{$User->email}}</li>
                                                    <li class="mt-2"><i class="las la-globe text-secondary font-22 align-middle mr-2"></i> <b> Location </b> :
                                                        <a href="#" class="font-14 text-primary">{{$User->location}}</a>
                                                    </li>
                                                </ul>

                                            </div><!--end col-->
                                            <div class="col-lg-4 align-self-center">
                                                <div class="row">
                                                    <div class="col-auto text-end border-end">
                                                        <button type="button" class="btn btn-soft-primary btn-icon-circle btn-icon-circle-sm mb-2">
                                                            <i class="fab fa-facebook-f"></i>
                                                        </button>
                                                        <p class="mb-0 fw-semibold">Facebook</p>
                                                        <h4 class="m-0 fw-bold">25k <span class="text-muted font-12 fw-normal">Followers</span></h4>
                                                    </div><!--end col-->
                                                    <div class="col-auto">
                                                        <button type="button" class="btn btn-soft-info btn-icon-circle btn-icon-circle-sm mb-2">
                                                            <i class="fab fa-twitter"></i>
                                                        </button>
                                                        <p class="mb-0 fw-semibold">Twitter</p>
                                                        <h4 class="m-0 fw-bold">58k <span class="text-muted font-12 fw-normal">Followers</span></h4>
                                                    </div><!--end col-->
                                                </div><!--end row-->
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end f_profile-->
                                </div><!--end card-body-->
                                <div class="card-body p-0">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#Post" role="tab" aria-selected="true">Products</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#Settings" role="tab" aria-selected="false">Settings</a>
                                        </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane p-3 active" id="Post" role="tabpanel">
                                            {{--  --}}
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Brand Name</th>
                                                                        <th>Generic Name</th>
                                                                        <th>Pharmacological Class</th>
                                                                        <th>Category</th>
                                                                        <th>Pics</th>
                                                                        <th>Price</th>
                                                                        <th>Stock</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

                                                                    @foreach ($Productz as $products)
                                                                    <tr>
                                                                        <td>
                                                                            <?php

                                                                                echo $products->id;
                                                                            ?>
                                                                        </td>
                                                                        <td>
                                                                            <img src="{{$products->image}}" alt="" height="40" width="80" style="object-fit: cover">
                                                                            <p class="d-inline-block align-middle mb-0">
                                                                                <a href="" class="d-inline-block align-middle mb-0 product-name fw-semibold">{{$products->brand_name}}</a>
                                                                            </p>
                                                                        </td>
                                                                        <td>
                                                                            <?php

                                                                                echo $products->generic_name;
                                                                            ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php

                                                                                echo $products->pharmacological_class;
                                                                            ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php

                                                                                echo $products->category;
                                                                            ?>
                                                                        </td>
                                                                        <td>1</td>
                                                                        <td>KES {{$products->price}}</td>
                                                                        <td><span class="badge badge-soft-purple">{{$products->stock}}</span></td>

                                                                        <td>
                                                                            <a href="{{url('/')}}/admin-panel/editProduct/{{$products->id}}" class="mr-2"><i class="las la-pen text-secondary font-16"></i></a>
                                                                            <a onclick="return confirm('Do You Wish To Delete This?')" href="{{url('/')}}/admin-panel/deleteProduct/{{$products->id}}">
                                                                                <i class="las la-trash-alt text-secondary font-16"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>

                                                                    @endforeach

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <a href="{{route('addProduct')}}" class="btn btn-outline-light btn-sm px-4 ">+ Add New</a>
                                                                </div><!--end col-->
                                                                <div class="col-auto">
                                                                    {!! $Productz->withQueryString()->links('pagination::bootstrap-5') !!}
                                                                </div> <!--end col-->
                                                            </div><!--end row-->
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->
                                                </div> <!-- end col -->
                                            </div> <!-- end row -->
                                            {{--  --}}
                                        </div>

                                        <div class="tab-pane p-3" id="Settings" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-6 col-xl-6">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <div class="row align-items-center">
                                                                <div class="col">
                                                                    <h4 class="card-title">Personal Information</h4>
                                                                </div><!--end col-->
                                                            </div>  <!--end row-->
                                                        </div><!--end card-header-->
                                                        <div class="card-body">
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">First Name</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input class="form-control" type="text" value="{{$User->name}}">
                                                                </div>
                                                            </div>

                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Company Name</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input class="form-control" type="text" value="{{$User->email}}">
                                                                    <span class="form-text text-muted font-12">We'll never share your email with anyone else.</span>
                                                                </div>
                                                            </div>

                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Position</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input class="form-control" type="text" value="{{$User->position}}">
                                                                </div>
                                                            </div>

                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Contact Phone</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <div class="input-group">
                                                                        <span class="input-group-text"><i class="las la-phone"></i></span>
                                                                        <input type="text" class="form-control" value="{{$User->mobile}}" placeholder="Phone" aria-describedby="basic-addon1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Email Address</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <div class="input-group">
                                                                        <span class="input-group-text"><i class="las la-at"></i></span>
                                                                        <input type="text" class="form-control" value="{{$User->email}}" placeholder="Email" aria-describedby="basic-addon1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Location</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <div class="input-group">
                                                                        <span class="input-group-text"><i class="la la-map-marker"></i></span>
                                                                        <input type="text" class="form-control" value="{{$User->location}}"  aria-describedby="basic-addon1">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group mb-3 row">
                                                                <div class="col-lg-9 col-xl-8 offset-lg-3">
                                                                    <button type="submit" class="btn btn-de-primary">Save Changes</button>
                                                                    <button type="button" class="btn btn-de-danger">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!--end col-->
                                                <div class="col-lg-6 col-xl-6">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h4 class="card-title">Change Password</h4>
                                                        </div><!--end card-header-->
                                                        <div class="card-body">
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Current Password</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input class="form-control" type="password" placeholder="Password">
                                                                    <a href="#" class="text-primary font-12">Forgot password ?</a>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">New Password</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input class="form-control" type="password" placeholder="New Password">
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Confirm Password</label>
                                                                <div class="col-lg-9 col-xl-8">
                                                                    <input class="form-control" type="password" placeholder="Re-Password">
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <div class="col-lg-9 col-xl-8 offset-lg-3">
                                                                    <button type="submit" class="btn btn-de-primary">Change Password</button>
                                                                    <button type="button" class="btn btn-de-danger">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h4 class="card-title">Other Settings</h4>
                                                        </div><!--end card-header-->
                                                        <div class="card-body">

                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="Email_Notifications" checked>
                                                                <label class="form-check-label" for="Email_Notifications">
                                                                    Email Notifications
                                                                </label>
                                                                <span class="form-text text-muted font-12 mt-0">Do you need them?</span>
                                                              </div>
                                                              <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="API_Access">
                                                                <label class="form-check-label" for="API_Access">
                                                                    API Access
                                                                </label>
                                                                <span class="form-text text-muted font-12 mt-0">Enable/Disable access</span>
                                                            </div>
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->
                                                </div> <!-- end col -->
                                            </div><!--end row-->
                                        </div>
                                    </div>
                                </div> <!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

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
                        </script> Unikit <span class="text-muted d-none d-sm-inline-block float-end">Crafted with <i
                                class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
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
