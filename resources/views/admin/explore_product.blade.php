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
                                        <li class="breadcrumb-item"><a href="#">Pharmex</a>
                                        </li><!--end nav-item-->
                                        <li class="breadcrumb-item"><a href="#">Dashboard</a>
                                        </li><!--end nav-item-->
                                        <li class="breadcrumb-item active">Analytics</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Add Products</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <center>
                                        @if(Session::has('message'))
                                                      <div class="alert alert-danger">{{ Session::get('message') }}</div>
                                       @endif

                                       @if(Session::has('messageError'))
                                                      <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
                                       @endif
                                    </center>
                                    <div class="row">
                                        <div class="col-lg-6 offset-lg-1 align-self-center">
                                            <div class="">
                                                <span class="badge badge-soft-danger font-14 fw-semibold mb-2">{{$Product->pharmacological_class}}</span>
                                                <h5 class="font-30 mb-0">{{$Product->brand_name}}</h5>
                                                <h6>{{$Product->generic_name}}</h6>

                                                <h6 class="font-30 fw-bold text-primary mb-3">kes {{$Product->bpperpack}}</h6>
                                                <h6>
                                                   <strong>Distribution:</strong>{{$Product->distribution}}
                                                </h6>

                                                @if($Product->content == null)

                                                @else
                                                   <h6 class="font-13 fw-bold">Distributer Remarks :</h6>
                                                  <p class="text-muted">{{$Product->content}}</p>
                                                @endif
                                                <h6>
                                                    <strong>Category:</strong>{{$Product->category}}
                                                </h6>
                                                <h6>
                                                    <strong>Dosage:</strong>{{$Product->dosage}}
                                                 </h6>
                                                 <h6>
                                                    <strong>Strength:</strong>{{$Product->strength}}
                                                 </h6>
                                                 <h6>
                                                    <strong>Batch Number:</strong>{{$Product->batch_no}}
                                                 </h6>
                                                 <h6>
                                                    <strong>Expiry Date:</strong>{{$Product->expiry}}
                                                 </h6>
                                                 <h6>
                                                    <strong>Pack Size:</strong>{{$Product->expiry}} | <strong>Number of Packs:</strong>{{$Product->packs}} | <strong>Price Per Pack:</strong>{{$Product->bpperpack}}
                                                 </h6>
                                                <h6 class="font-13 fw-bold">Features :</h6>
                                                <ul class="list-unstyled border-0">
                                                    <li class="mb-2"><i class="las la-check-circle text-success me-1"></i>There are {{$Product->packs}} packs of this product.</li>
                                                    <li class="mb-2"><i class="las la-check-circle text-success me-1"></i>Specify the number of packs </li>
                                                    <li><i class="las la-check-circle text-success me-1"></i>Submit Your Request </li>
                                                </ul>
                                                <div class="mt-3">
                                                    <form method="POST" action="{{route('request-package')}}">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{$Product->id}}">
                                                        <input name="quantity" class="form-control  d-inline-block" style="width:100px;" type="number" min="1" value="0" id="example-number-input">
                                                        <button type="submit" class="btn btn-success px-4 d-inline-block"><i class="mdi mdi-cart me-2"></i>Request Package</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-3 offset-lg-1 align-self-center">
                                            Listed By:
                                            <span class="text-muted font-13 fw-semibold">
                                                <div class="col">
                                                    Posted By: <a target="new" href="{{route('company-details',$Product->UserID)}}" class="btn btn-outline-light btn-sm px-4 "> {{\App\Models\User::find($Product->UserID)->company}} </a>
                                                </div>
                                            </span>
                                        </div>
                                    </div><!--end row-->
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
        <script>
            var $rows = $('#table tbody tr');
            $('#search').keyup(function() {

                var val = '^(?=.*\\b' + $.trim($(this).val()).split(/\s+/).join('\\b)(?=.*\\b') + ').*$',
                    reg = RegExp(val, 'i'),
                    text;

                $rows.show().filter(function() {
                    text = $(this).text().replace(/\s+/g, ' ');
                    return !reg.test(text);
                }).hide();
            });
        </script>

    </body>
    <!--end body-->
</html>
