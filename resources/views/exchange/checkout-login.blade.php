@extends('exchange.master')

@section('content')


    <div class="ltn__utilize-overlay"></div>

    <br><br>

 <!-- WISHLIST AREA START -->
 <div class="ltn__checkout-area mb-105">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__checkout-inner">
                    <div class="ltn__checkout-single-content ltn__returning-customer-wrap">
                        <h5>Returning customer? <a class="ltn__secondary-color" href="#ltn__returning-customer-login" data-bs-toggle="collapse">Click here to login</a></h5>
                        <div id="ltn__returning-customer-login" class="collapse ltn__checkout-single-content-info">
                            <div class="ltn_coupon-code-form ltn__form-box">
                                <p>Please login your accont.</p>
                                <form action="{{route('select-login')}}" method="POST" >
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-item input-item-name ltn__custom-icon">
                                                <input type="email"  name="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-email ltn__custom-icon">
                                                <input type="password" name="password" placeholder="Enter your Password">
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn theme-btn-1 btn-effect-1 text-uppercase">Login</button>
                                    <label class="input-info-save mb-0"><input type="checkbox" name="agree"> Remember me</label>
                                    <p class="mt-30"><a href="register.html">Lost your password?</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- WISHLIST AREA START -->



    <!-- CALL TO ACTION START (call-to-action-6) -->
    <div class="ltn__call-to-action-area call-to-action-6 before-bg-bottom" data-bs-bg="img/1.jpg--">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-inner call-to-action-inner-6 ltn__secondary-bg position-relative text-center---">
                        <div class="coll-to-info text-color-white">
                            <h1>Buy medical disposable face mask <br> to protect your loved ones</h1>
                        </div>
                        <div class="btn-wrapper">
                            <a class="btn btn-effect-3 btn-white" href="#">Explore Products <i class="icon-next"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CALL TO ACTION END -->



@endsection
