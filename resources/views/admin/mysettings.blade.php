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
                                <h4 class="page-title">All MySettings</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
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
                                                        <img src="assets/images/users/user-4.jpg" alt="" height="110" class="rounded-circle">
                                                        <span class="met-profile_main-pic-change">
                                                            <i class="fas fa-camera"></i>
                                                        </span>
                                                    </div>
                                                    <div class="met-profile_user-detail">
                                                        <h5 class="met-user-name">{{Auth::User()->name}}</h5>
                                                        <p class="mb-0 met-user-name-post">System Test User</p>
                                                    </div>
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-lg-4 ms-auto align-self-center">
                                                <ul class="list-unstyled personal-detail mb-0">
                                                    <li class=""><i class="las la-phone mr-2 text-secondary font-22 align-middle"></i> <b> phone </b> : +254 723 456 7891</li>
                                                    <li class="mt-2"><i class="las la-envelope text-secondary font-22 align-middle mr-2"></i> <b> Email </b> : {{Auth::User()->email}}</li>
                                                    <li class="mt-2"><i class="las la-globe text-secondary font-22 align-middle mr-2"></i> <b> Website </b> :
                                                        <a href="https://mywebsite.com/" class="font-14 text-primary">https://mywebsite.com/</a>
                                                    </li>
                                                </ul>

                                            </div><!--end col-->
                                            <div class="col-lg-4 align-self-center">
                                                <div class="row">
                                                    <div class="col-auto text-end border-end">
                                                        <button type="button" class="btn btn-soft-primary btn-icon-circle btn-icon-circle-sm mb-2">
                                                            <i class="fab fa-facebook-f"></i>
                                                        </button>
                                                        <p class="mb-0 font-weight-semibold">Facebook</p>
                                                        <h4 class="m-0 font-weight-bold">25k <span class="text-muted font-12 font-weight-normal">Followers</span></h4>
                                                    </div><!--end col-->
                                                    <div class="col-auto">
                                                        <button type="button" class="btn btn-soft-info btn-icon-circle btn-icon-circle-sm mb-2">
                                                            <i class="fab fa-twitter"></i>
                                                        </button>
                                                        <p class="mb-0 font-weight-semibold">Twitter</p>
                                                        <h4 class="m-0 font-weight-bold">58k <span class="text-muted font-12 font-weight-normal">Followers</span></h4>
                                                    </div><!--end col-->
                                                </div><!--end row-->
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end f_profile-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <form>
                                        <label class="form-label" for="setFullName">Full Name</label>
                                        <input type="text" class="form-control" id="setFullName" placeholder="Full Name" value="{{Auth::User()->name}}">
                                        <label class="form-label mt-2" for="setEmail">Email address</label>
                                        <input type="email" class="form-control" id="setEmail" placeholder="Enter email" value="{{Auth::User()->email}}">
                                        <label class="form-label mt-2" for="setPassword">Password</label>
                                        <input type="password" class="form-control" id="setPassword" placeholder="Password">
                                        <button type="submit" class="btn btn-primary btn-sm mt-3">Save Change</button>
                                    </form> <!--end form-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h4 class="card-title">Notification Setting</h4>
                                        </div><!--end col-->
                                    </div>  <!--end row-->
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <form>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="ICOnotify">
                                            <label class="form-check-label" for="ICOnotify">Get notification, New Requests in Pharmex Market</label>
                                        </div>
                                        <div class="form-check form-switch mt-2">
                                            <input class="form-check-input" type="checkbox" id="notyfySound">
                                            <label class="form-check-label" for="notyfySound">Notification with sound</label>
                                        </div>
                                        <div class="form-check form-switch mt-2">
                                            <input class="form-check-input" type="checkbox" id="notifyF_friends">
                                            <label class="form-check-label" for="notifyF_friends">Get notification, When paymnent has been sent to your account</label>
                                        </div>
                                        <div class="form-check form-switch mt-2">
                                            <input class="form-check-input" type="checkbox" id="autoLockWallet" checked>
                                            <label class="form-check-label" for="autoLockWallet">Auto lock my wallet</label>
                                        </div>
                                    </form> <!--end form-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->


                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="d-flex justify-content-center align-items-center align-self-center thumb-md bg-soft-primary rounded-circle not-hover">
                                            <i data-feather="smartphone" class="align-self-center"></i>
                                        </div>
                                        <div class="media-body align-self-center ms-2">
                                            <h5 class="mt-0 mb-1">SMS Auth</h5>
                                            <p class="text-muted mb-2">Used for withdrawals and security modifications</p>
                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                <input type="radio" class="btn-check" name="btnradio1" id="Enable1" autocomplete="off" checked>
                                                <label class="btn btn-outline-secondary btn-sm" for="Enable1">Enable</label>
                                                <input type="radio" class="btn-check" name="btnradio1" id="Enable2" autocomplete="off">
                                                <label class="btn btn-outline-secondary btn-sm" for="Enable2">Disable</label>
                                            </div>
                                        </div><!--end media body-->
                                    </div><!--end media-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="d-flex justify-content-center align-items-center align-self-center thumb-md bg-soft-success rounded-circle not-hover">
                                            <i data-feather="chrome" class="align-self-center"></i>
                                        </div>
                                        <div class="media-body align-self-center ms-2">
                                            <h5 class="mt-0 mb-1">Google Auth</h5>
                                            <p class="text-muted mb-2">Used for withdrawals and security modifications</p>
                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                <input type="radio" class="btn-check" name="btnradio1" id="Enable1" autocomplete="off" checked>
                                                <label class="btn btn-outline-secondary btn-sm" for="Enable1">Enable</label>
                                                <input type="radio" class="btn-check" name="btnradio1" id="Enable2" autocomplete="off">
                                                <label class="btn btn-outline-secondary btn-sm" for="Enable2">Disable</label>
                                            </div>
                                        </div><!--end media body-->
                                    </div><!--end media-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="d-flex justify-content-center align-items-center align-self-center thumb-md bg-soft-danger rounded-circle not-hover">
                                            <i data-feather="database" class="align-self-center"></i>
                                        </div>
                                        <div class="media-body align-self-center ms-2">
                                            <h5 class="mt-0 mb-1">API</h5>
                                            <p class="text-muted mb-2">Used for withdrawals and security modifications</p>
                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                <input type="radio" class="btn-check" name="btnradio1" id="Enable1" autocomplete="off" checked>
                                                <label class="btn btn-outline-secondary btn-sm" for="Enable1">Enable</label>
                                                <input type="radio" class="btn-check" name="btnradio1" id="Enable2" autocomplete="off">
                                                <label class="btn btn-outline-secondary btn-sm" for="Enable2">Disable</label>
                                            </div>
                                        </div><!--end media body-->
                                    </div><!--end media-->
                                </div><!--end card-body-->
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
