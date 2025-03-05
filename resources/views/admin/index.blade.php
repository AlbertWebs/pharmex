<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
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
      <!--Start of Tawk.to Script-->
      <script type="text/javascript">
         var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
         (function(){
         var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
         s1.async=true;
         s1.src='https://embed.tawk.to/5d9b3223db28311764d7a9e8/1ilbnp44e';
         s1.charset='UTF-8';
         s1.setAttribute('crossorigin','*');
         s0.parentNode.insertBefore(s1,s0);
         })();
      </script>
      <!--End of Tawk.to Script-->
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
                              <li class="breadcrumb-item"><a href="#">Pharmex</a>
                              </li>
                              <!--end nav-item-->
                              <li class="breadcrumb-item"><a href="#">Ecommerce</a>
                              </li>
                              <!--end nav-item-->
                              <li class="breadcrumb-item active">Dashboard</li>
                           </ol>
                        </div>
                        <h4 class="page-title">Dashboard</h4>
                     </div>
                     <!--end page-title-box-->
                  </div>
                  <!--end col-->
               </div>
               {{-- Dashboard Metrix --}}
               @if(Auth::User()->status == "0")
                    <!-- Log In page -->
                    <div class="container-md">
                        <div class="row vh-100s d-flex justify-content-center">
                            <div class="col-12 align-self-center">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-5 mx-auto">
                                            <div class="card">
                                                <div class="card-body p-0 auth-header-box">
                                                    <div class="text-center p-3">
                                                        <h4 class="mt-3 mb-1 fw-semibold text-whites font-18">Oops! Sorry page does not found</h4>
                                                        {{-- <p class="text-muted  mb-0">Back to dashboard of Unikit.</p> --}}
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="ex-page-content text-center">
                                                        <img src="{{asset('admin/assets/images/error.svg')}}" alt="0" class="" height="170">
                                                        <h1 class="mt-5 mb-4">Welcome!</h1>
                                                        <h5 class="font-16 text-muted mb-5">Subscription Required</h5>
                                                    </div>
                                                    <a class="btn btn-primary w-100" href="{{route('make-paymens-post')}}"> Subscribe Now! <i class="fas fa-redo ml-1"></i></a>
                                                </div><!--end card-body-->
                                                <div class="card-body bg-light-alt text-center">
                                                    &copy; <script>
                                                        document.write(new Date().getFullYear())
                                                    </script> Pharmex LLC
                                                </div><!--end card-body-->
                                            </div><!--end card-->
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end container-->
               @else

                    {{-- End of Dashboard Metrix --}}
                    @if(Auth::User()->type == "1" || Auth::User()->admin == "1")
                            {{--  --}}
                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col align-self-center">
                                                    <div class="media">
                                                        <img src="{{asset('admin/assets/images/logos/money-beg.png')}}" alt="" class="align-self-center" height="40">
                                                        <div class="media-body align-self-center ms-3">

                                                            <h6 class="m-0 font-24 fw-bold">kes {{number_format(\App\Models\orders::where('status','Completed')->sum('total'), 2)}}</h6>
                                                            <p class="text-muted mb-0">Total Revenue</p>
                                                        </div><!--end media body-->
                                                    </div><!--end media-->
                                                </div><!--end col-->
                                                <div class="col-auto align-self-center">
                                                    <div class="">
                                                        <div id="Revenu_Status_bar" class="apex-charts mb-n4"></div>
                                                    </div>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                    <div class="row">
                                        <div class="col-12 col-lg-2">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row align-items-center">
                                                        <div class="col text-center">
                                                            <span class="h5  fw-bold"><?php $Product = \App\Models\Product::where('distribution','FullPrice')->get() ?> {{count($Product)}}</span>
                                                            <h6 class="text-uppercase text-muted mt-2 m-0 font-11">No of Products Listed At Full Price</h6>
                                                        </div><!--end col-->
                                                    </div> <!-- end row -->
                                                </div><!--end card-body-->
                                            </div> <!--end card-body-->
                                        </div><!--end col-->
                                        <div class="col-12 col-lg-2">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row align-items-center">
                                                        <div class="col text-center">
                                                            <span class="h5  fw-bold"><?php $Product = \App\Models\Product::where('distribution','Donation')->get() ?> {{count($Product)}}</span>
                                                            <h6 class="text-uppercase text-muted mt-2 m-0 font-11">No of Products Listed for Donation</h6>
                                                        </div><!--end col-->
                                                    </div> <!-- end row -->
                                                </div><!--end card-body-->
                                            </div> <!--end card-body-->
                                        </div><!--end col-->
                                        <div class="col-12 col-lg-2">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row align-items-center">
                                                        <div class="col text-center">
                                                            <span class="h5  fw-bold"> {{count(\App\Models\Product::where('distribution','Discounted')->get())}}</span>
                                                            <h6 class="text-uppercase text-muted mt-2 m-0 font-11">No of Products Listed as Discounted</h6>
                                                        </div><!--end col-->
                                                    </div> <!-- end row -->
                                                </div><!--end card-body-->
                                            </div> <!--end card-body-->
                                        </div><!--end col-->
                                        <div class="col-12 col-lg-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row align-items-center">
                                                        <div class="col text-center">
                                                            <span class="h5  fw-bold"> {{\App\Models\orders::where('status','pending')->count()}}</span>
                                                            <h6 class="text-uppercase text-muted mt-2 m-0 font-11">Pending Orders</h6>
                                                        </div><!--end col-->
                                                    </div> <!-- end row -->
                                                </div><!--end card-body-->
                                            </div> <!--end card-body-->
                                        </div><!--end col-->
                                        <div class="col-12 col-lg-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row align-items-center">
                                                        <div class="col text-center">
                                                            <span class="h5  fw-bold"> {{\App\Models\orders::where('status','Completed')->count()}}</span>
                                                            <h6 class="text-uppercase text-muted mt-2 m-0 font-11">Completed Orders</h6>
                                                        </div><!--end col-->
                                                    </div> <!-- end row -->
                                                </div><!--end card-body-->
                                            </div> <!--end card-body-->
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!-- end col-->

                        </div><!--end row-->
                            <div class="row">
                                <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col">
                                            <h4 class="card-title">Pending Orders</h4>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end card-header-->
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <?php $Orders = \App\Models\orders::where('status','pending')->limit(10)->get(); ?>
                                            <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>OrderID</th>
                                                    <th>Order Details</th>
                                                    <th>Total</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($Orders as $orders)
                                                <tr>
                                                    <td>{{$orders->id}}</td>
                                                    <td>
                                                        <?php $OrderProducts = DB::table("orders_product")->where("orders_id",$orders->id)->get(); ?>
                                                        @foreach ($OrderProducts as $products)
                                                        <?php
                                                        $Products = \App\Models\Product::where("id", $products->product_id)->get();
                                                        ?>
                                                        @if($Products->isEmpty())
                                                        @else
                                                        @foreach ($Products as $Product)
                                                        <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name fw-semibold">{{$Product->brand_name}}</a>
                                                        </p>
                                                        @endforeach
                                                        @endif
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        {{$orders->total}}
                                                    </td>
                                                    <td>
                                                        {{$orders->status}}
                                                    </td>
                                                    <td>
                                                        <a href="{{route('order-process-accept', $orders->id)}}" class="btn btn-de-success btn-sm">Process <span class="fas fa-check-square"></span></a>
                                                        {{-- <a href="{{route('order-process-reject', $orders->id)}}" class="btn btn-de-danger btn-md">Reject <span class="fas fa-window-close"></span></a> --}}
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            </table>
                                        </div>
                                        <!--end /div-->
                                    </div>
                                    <!--end card-body-->
                                </div>
                                <!--end card-->
                                {{--  --}}
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col">
                                            <h4 class="card-title">Most Popular Products</h4>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end card-header-->
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <?php $Products = DB::table('products')->orderBy('sales','DESC')->limit('5')->get(); ?>
                                            <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Pharmacological Class</th>
                                                    <th>Orders</th>
                                                    <th>Category</th>
                                                    <th>Price</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                                                @foreach ($Products as $products)
                                                @if($products->sales == 0)
                                                @else
                                                <tr>
                                                    <td>
                                                        <?php
                                                        echo $products->id;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        echo $products->pharmacological_class;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        echo $products->sales;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        echo $products->category;
                                                        ?>
                                                    </td>
                                                    <td>{{$products->price}}</td>
                                                    <td>
                                                        <a href="{{url('/')}}/admin-panel/editProduct/{{$products->id}}" class="mr-2"><i class="las la-pen text-secondary font-16"></i></a>
                                                        <a onclick="return confirm('Do You Wish To Delete This?')" href="{{url('/')}}/admin-panel/deleteProduct/{{$products->id}}">
                                                        <i class="las la-trash-alt text-secondary font-16"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endif
                                                @endforeach
                                            </tbody>
                                            </table>
                                        </div>
                                        <!--end /div-->
                                    </div>
                                    <!--end card-body-->
                                </div>
                                <!--end card-->
                                {{--  --}}
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col">
                                            <h4 class="card-title">Pending Approval</h4>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end card-header-->
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <?php $Product = \App\Models\Product::where('status','0')->limit(10)->get(); ?>
                                            <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Brand Name</th>
                                                    <th>Pharmacological Class</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                                                @foreach ($Product as $product)
                                                <tr>
                                                    <td>{{$product->id}}</td>
                                                    <td>
                                                        <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name fw-semibold">{{$product->brand_name}}</a>
                                                        </p>
                                                    </td>
                                                    <td>
                                                        {{$product->pharmacological_class}}
                                                    </td>
                                                    <td>
                                                        <span>
                                                        <div class="form-check form-switch form-switch-success">
                                                            <input class="form-check-input task_{{$product->id}}" id="{{$product->id}}" @if($product->status == 1) checked @endif type="checkbox">
                                                        </div>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <a href="{{route('explore-product', $product->id)}}" class="btn btn-de-warning btn-sm"> Explore <span class="fas fa-binoculars"></span></a>
                                                        {{-- <a href="{{route('order-process-reject', $orders->id)}}" class="btn btn-de-danger btn-md">Reject <span class="fas fa-window-close"></span></a> --}}
                                                    </td>
                                                </tr>
                                                <script>
                                                    $('.task_{{$product->id}}').change(function(){
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
                                        <!--end /div-->
                                    </div>
                                    <!--end card-body-->
                                </div>
                                <!--end card-->
                                {{--  --}}
                                </div>
                                <!--end col-->
                                <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col">
                                            <h4 class="card-title">All Listed Products</h4>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end card-header-->
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <?php $Products = DB::table('products')->paginate(10); ?>
                                            <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Pharmacological Class</th>
                                                    <th>Brand Name</th>
                                                    <th>Category</th>
                                                    <th>Price</th>
                                                    <th>Action</th>
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
                                                        <?php
                                                        echo $products->pharmacological_class;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        echo $products->brand_name;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        echo $products->category;
                                                        ?>
                                                    </td>
                                                    <td>{{$products->price}}</td>
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
                                        <!--end /div-->
                                        <div class="row">
                                            <div class="col">
                                            {{-- <a href="{{route('addProduct')}}" class="btn btn-outline-light btn-sm px-4 ">+ Add New</a> --}}
                                            </div>
                                            <!--end col-->
                                            <div class="col-auto">
                                            {!! $Products->withQueryString()->links('pagination::bootstrap-5') !!}
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end card-body-->
                                </div>
                                <!--end card-->
                                </div>
                                <!--end col-->
                            </div>
                    @else



                        <div class="row">

                                <!--end col-->
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                <h4 class="card-title">All Listed Products</h4>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end card-header-->
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <?php $Products = DB::table('products')->where('UserID',Auth::User()->id)->paginate(10); ?>
                                                <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Pharmacological Class</th>
                                                        <th>Brand Name</th>
                                                        <th>Category</th>
                                                        <th>Price</th>
                                                        <th>Action</th>
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
                                                            <?php
                                                            echo $products->pharmacological_class;
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            echo $products->brand_name;
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            echo $products->category;
                                                            ?>
                                                        </td>
                                                        <td>{{$products->price}}</td>
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
                                            <!--end /div-->
                                            <div class="row">
                                                <div class="col">
                                                {{-- <a href="{{route('addProduct')}}" class="btn btn-outline-light btn-sm px-4 ">+ Add New</a> --}}
                                                </div>
                                                <!--end col-->
                                                <div class="col-auto">
                                                {!! $Products->withQueryString()->links('pagination::bootstrap-5') !!}
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end card-body-->
                                    </div>
                                    <!--end card-->
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                        </div>


                    @endif
                @endif

            </div>
            <!-- container -->
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
                     </div>
                     <!--end form-switch-->
                     <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
                        <label class="form-check-label" for="settings-switch2">Location Permission</label>
                     </div>
                     <!--end form-switch-->
                     <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="settings-switch3">
                        <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
                     </div>
                     <!--end form-switch-->
                  </div>
                  <!--end /div-->
                  <h6>General Settings</h6>
                  <div class="p-2 text-start mt-3">
                     <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch4">
                        <label class="form-check-label" for="settings-switch4">Show me Online</label>
                     </div>
                     <!--end form-switch-->
                     <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
                        <label class="form-check-label" for="settings-switch5">Status visible to all</label>
                     </div>
                     <!--end form-switch-->
                     <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="settings-switch6">
                        <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
                     </div>
                     <!--end form-switch-->
                  </div>
                  <!--end /div-->
               </div>
               <!--end offcanvas-body-->
            </div>
            <!--end Rightbar/offcanvas-->
            <!--end Rightbar-->
            <!--Start Footer-->
            <!-- Footer Start -->
            <footer class="footer text-center text-sm-start">
               &copy; <script>
                  document.write(new Date().getFullYear())
               </script> Pharmex <span class="text-muted d-none d-sm-inline-block float-end">Crafted with <i
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
