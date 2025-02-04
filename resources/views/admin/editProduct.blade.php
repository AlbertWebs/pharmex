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
                                <h4 class="page-title">Add Products</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->


                    {{--  --}}
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form method="POST" action="{{url('/')}}/admin-panel/edit_Product/{{$Product->id}}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3 row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label text-end">Product Title</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" value="{{$Product->name}}" name="title" id="example-text-input">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label text-end">Price</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="price" value="{{$Product->price}}" id="example-text-input">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label text-end">Category & Brand</label>
                                                    <div class="col-sm-5">
                                                        <select class="form-select" aria-label="Default select example" name="category">

                                                            <option value="{{$Product->category}}" selected="">{{$Product->category}}</option>
                                                            <?php
                                                               $Category = \App\Models\Category::all();
                                                            ?>
                                                            @foreach($Category as $category)
                                                                <option value="{{$category->title}}">{{$category->title}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <select class="form-select" aria-label="Default select example" name="brand">

                                                            <option value="{{$Product->brand}}" selected="">{{$Product->brand}}</option>
                                                            <?php
                                                            $Category = \App\Models\Brand::all();
                                                            ?>
                                                            @foreach($Category as $category)
                                                                <option value="{{$category->title}}">{{$category->title}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="example-email-input" class="col-sm-2 col-form-label text-end">Meta</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" rows="5" id="message" name="meta">
                                                            {{$Product->meta}}
                                                        </textarea>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="example-email-input" class="col-sm-2 col-form-label text-end">Description</label>
                                                    <div class="col-sm-10">
                                                        <textarea id="basic-conf" name="content">{{$Product->content}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="example-email-input" class="col-sm-2 col-form-label text-end">Product Image</label>
                                                    <div class="col-sm-10">
                                                        <img  src="{{$Product->image}}" style="width:300px; height:150px; object-fit:cover; border-radius:10px;" alt="">
                                                    </div>

                                                </div>

                                                <input type="hidden" name="image_cheat" value="{{$Product->image}}">

                                                <div class="mb-3 row">
                                                    <label for="example-email-input" class="col-sm-2 col-form-label text-end">Product Image</label>
                                                    <div class="col-sm-10">
                                                        <p class="text-muted">Upload your Product image here, Please click "Upload Image" Button.</p>
                                                        <div class="preview-box d-block justify-content-center rounded shadow overflow-hidden bg-light p-1"></div>
                                                        <input type="file" id="input-file" name="image" accept="image/*" onchange="{handleChange()}" hidden="">
                                                        <label class="btn-upload btn btn-primary mt-4" for="input-file">Upload Image</label>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label text-end">&nbsp;</label>
                                                    <div class="col-sm-10">
                                                        <button class="btn btn-primary" type="submit">Save Changes</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>


                                        <div class="col-lg-6">
                                            {{--  --}}
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title">All Products</h4>
                                                        <p class="text-muted mb-0">Shows <code> List of all Products </code> </p>
                                                    </div><!--end card-header-->
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <ul class="list-group list-group-flush">
                                                                    @foreach ($Products as $products)
                                                                    <li class="list-group-item"><i class="la la-angle-double-right text-info me-2"></i>
                                                                        {{$products->name}}
                                                                        &nbsp; &nbsp;&nbsp; &nbsp;
                                                                        <img src="{{$products->image}}" alt="" width="80" height="40" style="object-fit: cover">
                                                                        &nbsp; &nbsp;

                                                                        <a href="{{url('/')}}/admin-panel/editProduct/{{$products->id}}" class="mr-2"><i class="las la-pen text-secondary font-16"></i></a>
                                                                        &nbsp; &nbsp;
                                                                        <a onclick="return confirm('Do You Wish To Delete This?')" href="{{url('/')}}/admin-panel/deleteProduct/{{$products->id}}">
                                                                            <i class="las la-trash-alt text-secondary font-16"></i>
                                                                        </a>
                                                                    </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                            {{--  --}}
                                        </div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->



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
