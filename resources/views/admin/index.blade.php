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
                                <h4 class="page-title">Analytics</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->

                    <div class="row">
                        <div class="col-md-12 col-lg-3 order-lg-1 order-md-2 order-sm-2">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="pt-3">
                                        <h3 class="text-dark text-center font-24 fw-bold line-height-lg">Pharmex
                                        <br>Data Safety CronJobs</h3>
                                        <div class="text-center text-muted font-16 fw-bold pt-3 pb-1">Your Data is Safe We Make Daily Backups</div>

                                        <div class="text-center py-3 mb-3">
                                            <a href="#" class="btn btn-primary">Backup Now!</a>
                                        </div>
                                        <img src="{{asset('admin/assets/images/small/business.png')}}" alt="" class="img-fluid px-3 mb-2">
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->
                        <div class="col-lg-9 order-lg-2 order-md-1 order-sm-1">
                            <div class="row justify-content-center">
                                <div class="col-lg-3 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="card-body">
                                            <div class="row d-flex">
                                                <div class="col-3">
                                                    <i class="ti ti-users font-36 align-self-center text-dark"></i>
                                                </div><!--end col-->
                                                <div class="col-12 ms-auto align-self-center">
                                                    <div id="dash_spark_1" class="mb-3"></div>
                                                </div><!--end col-->
                                                <div class="col-12 ms-auto align-self-center">
                                                    <h3 class="text-dark my-0 font-22 fw-bold">24000</h3>
                                                    <p class="text-muted mb-0 fw-semibold">Sessions</p>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div> <!--end col-->
                                <div class="col-lg-3 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="card-body">
                                            <div class="row d-flex">
                                                <div class="col-3">
                                                    <i class="ti ti-clock font-36 align-self-center text-dark"></i>
                                                </div><!--end col-->
                                                <div class="col-auto ms-auto align-self-center">
                                                    <span class="badge badge-soft-success px-2 py-1 font-11">Active</span>
                                                </div><!--end col-->
                                                <div class="col-12 ms-auto align-self-center">
                                                    <div id="dash_spark_2" class="mb-3"></div>
                                                </div><!--end col-->
                                                <div class="col-12 ms-auto align-self-center">
                                                    <h3 class="text-dark my-0 font-22 fw-bold">00:18</h3>
                                                    <p class="text-muted mb-0 fw-semibold">Avg.Sessions</p>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div> <!--end col-->
                                <div class="col-lg-3 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="card-body">
                                            <div class="row d-flex">
                                                <div class="col-3">
                                                    <i class="ti ti-activity font-36 align-self-center text-dark"></i>
                                                </div><!--end col-->
                                                <div class="col-12 ms-auto align-self-center">
                                                    <div id="dash_spark_3" class="mb-3"></div>
                                                </div><!--end col-->
                                                <div class="col-12 ms-auto align-self-center">
                                                    <h3 class="text-dark my-0 font-22 fw-bold">$2400</h3>
                                                    <p class="text-muted mb-0 fw-semibold">Bounce Rate</p>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div> <!--end col-->

                                <div class="col-lg-3 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="card-body">
                                            <div class="row d-flex">
                                                <div class="col-3">
                                                    <i class="ti ti-confetti font-36 align-self-center text-dark"></i>
                                                </div><!--end col-->
                                                <div class="col-auto ms-auto align-self-center">
                                                    <span class="badge badge-soft-danger px-2 py-1 font-11">-2%</span>
                                                </div><!--end col-->
                                                <div class="col-12 ms-auto align-self-center">
                                                    <div id="dash_spark_4" class="mb-3"></div>
                                                </div><!--end col-->
                                                <div class="col-12 ms-auto align-self-center">
                                                    <h3 class="text-dark my-0 font-22 fw-bold">85000</h3>
                                                    <p class="text-muted mb-0 fw-semibold">Goal Completions</p>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div> <!--end col-->
                            </div><!--end row-->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h4 class="card-title">Audience Overview</h4>
                                                </div><!--end col-->
                                                <div class="col-auto">
                                                    <div class="dropdown">
                                                        <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                           This Year<i class="las la-angle-down ms-1"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Today</a>
                                                            <a class="dropdown-item" href="#">Last Week</a>
                                                            <a class="dropdown-item" href="#">Last Month</a>
                                                            <a class="dropdown-item" href="#">This Year</a>
                                                        </div>
                                                    </div>
                                                </div><!--end col-->
                                            </div>  <!--end row-->
                                        </div><!--end card-header-->
                                        <div class="card-body">
                                            <div class="">
                                                <div id="ana_dash_1" class="apex-charts"></div>
                                            </div>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div>
                            </div>
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


        <!-- App js -->
        <script src="{{asset('admin/assets/js/app.js')}}"></script>

    </body>
    <!--end body-->
</html>
