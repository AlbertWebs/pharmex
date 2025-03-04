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
                                        <li class="breadcrumb-item"><a href="#">Pharmex</a>
                                        </li><!--end nav-item-->
                                        <li class="breadcrumb-item"><a href="#">Ecommerce</a>
                                        </li><!--end nav-item-->
                                        <li class="breadcrumb-item active">Checkout</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Checkout</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h4 class="card-title">Order Summary</h4>
                                        </div><!--end col-->
                                    </div>  <!--end row-->
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="table-responsive shopping-cart">
                                        <table class="table">
                                            <tbody>
                                                @foreach (($cartItem) as $item)
                                                <?php
                                                   $Product = \App\Models\Product::find($item->id);
                                                ?>
                                                <tr>
                                                    <td>{{$Product->brand_name}} <strong>× {{$item->qty}}</strong></td>
                                                    <td>kes <?php echo ($Product->price)*($item->qty) ?></td>
                                                </tr>
                                                @endforeach



                                            </tbody>
                                        </table>
                                    </div><!--end re-table-->
                                    <div class="total-payment">
                                        <table class="table mb-0">
                                            <tbody>
                                                <tr>
                                                    <td>Vat</td>
                                                    <td>kes {{Cart::tax()}}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Order Total</strong></td>
                                                    <td><strong>Kes {{Cart::subtotal()}}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold  border-bottom-0">Total</td>
                                                    <td class="text-dark  border-bottom-0"><strong>kes {{Cart::total()}}</strong></td>
                                                </tr>
                                            </tbody>
                                        </table><!--end table-->
                                    </div><!--end total-payment-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h4 class="card-title">Delivery Address</h4>
                                        </div><!--end col-->
                                    </div>  <!--end row-->
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <form class="mb-0">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">First Name <small class="text-danger font-13">*</small></label>
                                                    <input type="text" class="form-control" id="firstname" required="" value="{{Auth::User()->name}}">
                                                </div>
                                            </div>

                                        </div><!--end row-->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label my-2">Delivery Address <small class="text-danger font-13">*</small></label>
                                                    <input type="text" class="form-control" value="{{Auth::User()->location}}" required="">
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->

                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label my-2">Email Address <small class="text-danger font-13">*</small></label>
                                                    <input type="email" class="form-control" value="{{Auth::User()->email}}" required="">
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label my-2">Mobile No <small class="text-danger font-13">*</small></label>
                                                    <input type="text" class="form-control" value="{{Auth::User()->mobile}}" required="">
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group mt-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" checked id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Confirm Shipping Address
                                                        </label>
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </form><!--end form-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h4 class="card-title">Billing Details</h4>
                                                </div><!--end col-->
                                            </div>  <!--end row-->
                                        </div><!--end card-header-->
                                        <div class="card-body">
                                            <div class="accordion accordion-flush checkout-accordion" id="accordionFlushExample">
                                                <div class="accordion-item">
                                                  <h2 class="accordion-header mt-0" id="flush-headingOne">
                                                    <button class="accordion-button d-flex justify-content-between" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                                                        <span class="align-self-center">Credit Card</span>
                                                        <img src="assets/images/logos/card-2.png" alt="" height="30">
                                                    </button>
                                                  </h2>
                                                  <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="Card_No">Card No :</label>
                                                                    <input type="text" class="form-control" id="Card_No" required="" placeholder="1234-5678-9123-4567">
                                                                </div>
                                                            </div>  <!--end col-->
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="select_month" class="my-2 form-label">Expiry Month</label>
                                                                    <select class="form-select" id="select_month">
                                                                        <option selected="">-- Select --</option>
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5">5</option>
                                                                        <option value="6">6</option>
                                                                        <option value="7">7</option>
                                                                        <option value="8">8</option>
                                                                        <option value="9">9</option>
                                                                        <option value="10">10</option>
                                                                        <option value="11">11</option>
                                                                        <option value="12">12</option>
                                                                    </select>
                                                                </div>
                                                            </div><!--end col-->
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="select_year" class="my-2 form-label">Expiry Year</label>
                                                                    <select class="form-select" id="select_year">
                                                                        <option selected="">-- Select --</option>
                                                                        <option value="1">2020</option>
                                                                        <option value="2">2021</option>
                                                                        <option value="3">2022</option>
                                                                        <option value="4">2023</option>
                                                                        <option value="5">2024</option>
                                                                        <option value="6">2025</option>
                                                                    </select>
                                                                </div>
                                                            </div> <!--end col-->
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label my-2" for="CVV_Code">Security Code</label>
                                                                    <input type="password" class="form-control" id="CVV_Code" required="" placeholder="Enter CVV">
                                                                </div>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="accordion-item">
                                                  <h2 class="accordion-header mt-0" id="flush-headingTwo">
                                                    <button class="accordion-button collapsed d-flex justify-content-between" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                        <span class="align-self-center">M-Pesa</span>
                                                        <img src="assets/images/logos/paypal.png" alt="" height="30">
                                                    </button>
                                                  </h2>
                                                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        <form method="POST" action="{{route('make-stk-request')}}" id="stkDoIt">
                                                        <input type="text" class="form-control"  name="phoneNumber" required value="{{Auth::User()->mobile}}" placeholder="Your Phone Number start with +254">
                                                        {{-- <button class="btn theme-btn-1 btn-effect-1 text-capitalize" type="submit">Pay Now</button> --}}
                                                        {{--  --}}

                                                            @csrf
                                                            {{-- <input type="hidden" name="phoneNumber" value="{{Auth::User()->mobile}}"> --}}
                                                            <input type="hidden" name="amount" value="{{Cart::total()}}"><br>
                                                            <button type="submit" class="btn btn-secondary w-100 ">Pay Now  &nbsp; &nbsp; <span><img class="loading-gif" width="30" src="{{url('/')}}/uploads/logos/loading.gif"></span></button>
                                                        </form>
                                                        {{--  --}}
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                            <a href="{{route('place-order')}}" class="btn btn-block btn-primary">Place Your Order</a>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col-->
                            </div><!--end row-->
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

        <script src="{{asset('admin/assets/plugins/tinymce/tinymce.min.js')}}"></script>
        <script src="{{asset('admin/assets/pages/form-editor.init.js')}}"></script>

        <script src="{{asset('admin/assets/pages/file-upload.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('admin/assets/js/app.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                $(".loading-gif").hide();
                $('#stkDoIt').submit(function(e) {
                    e.preventDefault();
                    $(".loading-gif").show();
                    $('#Success').html('Please wait.........');
                    setTimeout(function() {
                        $('#Success').html('Check your phone....');
                    }, 4000);
                    // Serialize the form data
                    var formData = $(this).serialize();
                    // Send an AJAX request
                    $.ajax({
                        type: 'POST',
                        url: '{!! route('make-stk-request') !!}',
                        data: formData,
                        dataType: 'json',
                        success: function(response) {
                            // Handle the response message
                            // $('#cf-response-message').text(response.message);
                            console.log(response);
                            $('.loading-gif').hide();
                            $('#Success').hide();
                            setTimeout(function() {
                                $('#Success').show();
                                $('#Success').html('Redirecting you...');
                            }, 1000);
                            // Refresh
                            setTimeout(function() {
                                window.location = "{{url('dashboard/thankYou')}}"
                            }, 5000);
                            // Success
                        },
                        error: function(xhr, status, error) {
                            // Handle errors if needed
                            console.error(xhr.responseText);
                        }
                    });
                });
            });
        </script>

    </body>
    <!--end body-->
</html>
