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

<body id="body" class="auth-page" style="background-image: url('{{asset('admin/assets/images/p-1.png')}}'); background-size: cover; background-position: center center;">
   <!-- Log In page -->
   <div class="container-md">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 auth-header-box">
                                    <div class="text-center p-3">
                                        <a href="index.html" class="logo logo-admin">
                                            <img src="{{asset('admin/assets/images/logo-sm.png')}}" height="50" alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 fw-semibold text-white font-18">Let's Get Started Pharmex</h4>
                                        <p class="text-muted  mb-0">Sign up to continue to Pharmex.</p>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <form class="my-4" method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="form-group mb-2">
                                            <label class="form-label" for="username">Entity Name</label>
                                            <input placeholder="Company Name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="company" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        </div><!--end form-group-->
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="username">Contact Person Full Name</label>
                                                    <input placeholder="Full Name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div><!--end form-group-->
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="username">Contact Person Position</label>
                                                    <input placeholder="Contact Person Position" id="position" type="text" class="form-control @error('position') is-invalid @enderror" name="position" value="{{ old('position') }}" required autocomplete="position" autofocus>

                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div><!--end form-group-->
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="mobileNo">Mobile Number</label>
                                                    <input type="text" class="form-control" id="mobileNo" name="mobile" placeholder="Enter Mobile Number">
                                                </div><!--end form-group-->
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="useremail">Email</label>
                                                    <input placeholder="Enter email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div><!--end form-group-->
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="location">Location</label>
                                                    <input type="text" class="form-control" id="location" name="location" placeholder="Westlands, GTC Building, 1st floor Suite 18">
                                                </div><!--end form-group-->
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="license">Practice License Number</label>
                                                    <input type="text" class="form-control" id="license" name="license" placeholder="PPB/R/12345">
                                                </div><!--end form-group-->
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="license">Premises License Number</label>
                                                    <input type="text" class="form-control" id="license" name="license_premises" placeholder="PPB/RNSD/12345">
                                                </div><!--end form-group-->
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="userpassword">Password</label>
                                                    <input placeholder="Enter password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div><!--end form-group-->
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="Confirmpassword">&nbsp</label>
                                                    <input type="password" class="form-control" name="password_confirmation" id="Confirmpassword" placeholder="Confirm password">
                                                </div><!--end form-group-->
                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <div class="col-12">
                                                <div class="form-check form-switch form-switch-success">
                                                    <input class="form-check-input" type="checkbox" id="customSwitchSuccess">
                                                    <label class="form-check-label" for="customSwitchSuccess">By registering you agree to the Pharmex <a href="#" class="text-primary">Terms of Use</a></label>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end form-group-->

                                        <div class="form-group mb-0 row">
                                            <div class="col-12">
                                                <div class="d-grid mt-3">
                                                    <button class="btn btn-primary" type="submit">Sign Up <i class="fas fa-sign-in-alt ms-1"></i></button>
                                                </div>
                                            </div><!--end col-->
                                        </div> <!--end form-group-->
                                    </form><!--end form-->
                                    <div class="m-3 text-center text-muted">
                                        <p class="mb-0">Already have an account ? <a href="auth-login.html" class="text-primary ms-2">Log in</a></p>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end card-body-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <!-- App js -->
    <script src="{{asset('admin/assets/js/app.js')}}"></script>

</body>

</html>
