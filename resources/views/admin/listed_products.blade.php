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
                                        {{-- <li class="breadcrumb-item"><a href="#">Unikit</a>
                                        </li><!--end nav-item-->
                                        <li class="breadcrumb-item"><a href="#">Ecommerce</a>
                                        </li><!--end nav-item-->
                                        <li class="breadcrumb-item active">Products</li> --}}
                                    </ol>
                                </div>
                                <h4 class="page-title">Products</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    @if($Products->isEmpty())
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <h6>
                                    No Products Posted
                                    <br>
                                    <div class="col">
                                        {{-- <a href="{{route('addProduct')}}" class="btn btn-outline-light btn-sm px-4 ">+ Add New</a> --}}
                                    </div><!--end col-->
                                </h6>
                            </div>
                        </div>
                    </div>
                    @else
                    {{--  --}}
                    <div class="row">
                        <div class="col-12">

                            <input type="search" id="search" name="search" class="form-control top-search mb-0" placeholder="Type text...">
                            <br>

                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="table">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Brand Name</th>
                                                <th>Generic Name</th>
                                                <th>Pharmacological Class</th>
                                                <th>Category</th>
                                                <th>Number of Packs</th>
                                                <th>Price Per Packs</th>
                                                <th>Total Cost</th>
                                                <th>Price</th>
                                                <th>Stock</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

                                            @foreach ($Products as $products)
                                            <tr>
                                                <td>
                                                    <?php

                                                        echo $products->id;
                                                    ?>
                                                </td>
                                                <td>
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name fw-semibold">{{$products->brand_name}}</a>
                                                        <br>
                                                        <span class="text-muted font-13 fw-semibold">
                                                            <div class="col">
                                                                Posted By: <a href="{{route('company-details',$products->UserID)}}" class="btn btn-outline-light btn-sm px-4 "> {{\App\Models\User::find($products->UserID)->company}} </a>
                                                            </div>
                                                        </span>
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
                                                <td>{{$products->packs}}</td>
                                                <td>{{$products->bpperpack}}</td>
                                                <td>
                                                    <?php
                                                         $bpperpack = $products->bpperpack;
                                                         $packs = $products->packs;
                                                        $tt = $packs*$bpperpack;
                                                        echo $tt;
                                                    ?>
                                                </td>
                                                <td>KES {{$products->price}}</td>
                                                <td><span class="badge badge-soft-purple">{{$products->stock}}</span></td>

                                                 <td>
                                                    <td>
                                                        <a href="{{route('explore-product', $products->id)}}" class="btn btn-de-warning btn-md"> Request <span class="fas fa-arrow-right"></span></a>

                                                        {{-- <a href="{{route('order-process-reject', $orders->id)}}" class="btn btn-de-danger btn-md">Reject <span class="fas fa-window-close"></span></a> --}}
                                                    </td>
                                                </td>
                                            </tr>
                                            <script>
                                                $('.task_{{$products->id}}').change(function(){
                                                    var id = $(this).attr('id');
                                                    var status =  $(this).val();
                                                    confirm('Are you sure you want to change this status?')
                                                    if($(this).is(':checked')){
                                                        // processing ajax request
                                                        $.ajax({
                                                            url: "{{ route('statusTask') }}",
                                                            type: 'POST',
                                                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                                                            dataType: "json",
                                                            data: {
                                                                id: id,
                                                                status: status
                                                            },
                                                            success: function(data) {
                                                                alert('Success')
                                                            }
                                                        });
                                                    }else{
                                                        // processing ajax request
                                                            $.ajax({
                                                                url: "{{ route('statusTask') }}",
                                                                type: 'POST',
                                                                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                                                                dataType: "json",
                                                                data: {
                                                                    id: id,
                                                                    status: status
                                                                },
                                                                success: function(data) {
                                                                    alert('Success')
                                                                }
                                                            });
                                                    }
                                                });
                                            </script>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            {{-- <a href="{{route('addProduct')}}" class="btn btn-outline-light btn-sm px-4 ">+ Add New</a> --}}
                                        </div><!--end col-->
                                        <div class="col-auto">
                                            {!! $Products->withQueryString()->links('pagination::bootstrap-5') !!}
                                         </div> <!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                    {{--  --}}
                    @endif
                    <div class="col-auto">
                        {!! $Products->withQueryString()->links('pagination::bootstrap-5') !!}
                     </div> <!--end col-->


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
