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
                    {{-- <div class="ltn__checkout-single-content ltn__returning-customer-wrap">
                        <h5>Returning customer? <a class="ltn__secondary-color" href="#ltn__returning-customer-login" data-bs-toggle="collapse">Click here to login</a></h5>
                        <div id="ltn__returning-customer-login" class="collapse ltn__checkout-single-content-info">
                            <div class="ltn_coupon-code-form ltn__form-box">
                                <p>Please login your accont.</p>
                                <form action="#" >
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-item input-item-name ltn__custom-icon">
                                                <input type="text" name="ltn__name" placeholder="Enter your name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-email ltn__custom-icon">
                                                <input type="email" name="ltn__email" placeholder="Enter email address">
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn theme-btn-1 btn-effect-1 text-uppercase">Login</button>
                                    <label class="input-info-save mb-0"><input type="checkbox" name="agree"> Remember me</label>
                                    <p class="mt-30"><a href="register.html">Lost your password?</a></p>
                                </form>
                            </div>
                        </div>
                    </div> --}}

                    <div class="ltn__checkout-single-content mt-50">
                        <h4 class="title-2">Billing Details</h4>
                        <div class="ltn__checkout-single-content-info">
                            <form action="#" >
                                <h6>Personal Information</h6>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-item input-item-name ltn__custom-icon">
                                            <input type="text" name="ltn__name" placeholder="Name" value="{{Auth::User()->name}}">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="input-item input-item-email ltn__custom-icon">
                                            <input type="email" name="ltn__email" placeholder="email address" value="{{Auth::User()->email}}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-item input-item-phone ltn__custom-icon">
                                            <input type="text" name="ltn__phone" placeholder="phone number" value="{{Auth::User()->mobile}}">
                                        </div>
                                    </div>

                                </div>

                                {{-- <p><label class="input-info-save mb-0"><input type="checkbox" name="agree"> Create an account?</label></p> --}}
                                <h6>Order Notes (optional)</h6>
                                <div class="input-item input-item-textarea ltn__custom-icon">
                                    <textarea name="ltn__message" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ltn__checkout-payment-method mt-50">
                    <h4 class="title-2">Payment Method</h4>
                    <div id="checkout_accordion_1">
                        <!-- card -->
                        <div class="card">
                            <h5 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-1" aria-expanded="true">
                                M-Pesa
                            </h5>
                            <div id="faq-item-2-1" class="collapse show" data-bs-parent="#checkout_accordion_1">
                                <div class="card-body">
                                    <form method="POST" action="{{route('make-stk-request')}}" id="stkDoIt">
                                    <input type="text"  name="phoneNumber" required value="{{Auth::User()->mobile}}" placeholder="Your Phone Number start with +254">
                                    {{-- <button class="btn theme-btn-1 btn-effect-1 text-capitalize" type="submit">Pay Now</button> --}}
                                    {{--  --}}

                                        @csrf
                                        {{-- <input type="hidden" name="phoneNumber" value="{{Auth::User()->mobile}}"> --}}
                                        <input type="hidden" name="amount" value="{{Cart::total()}}">
                                        <button type="submit" class="btn btn-secondary w-100 ">Pay Now  &nbsp; &nbsp; <span><img class="loading-gif" width="30" src="{{url('/')}}/uploads/logos/loading.gif"></span></button>
                                    </form>
                                    {{--  --}}
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h5 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-2" aria-expanded="false">
                                Cash on delivery
                            </h5>
                            <div id="faq-item-2-2" class="collapse " data-bs-parent="#checkout_accordion_1">
                                <div class="card-body">
                                    <p>Pay with cash upon delivery.</p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h5 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-3" aria-expanded="false" >
                                PayPal <img src="{{asset('theme-shop/img/icons/payment-3.png')}}" alt="#">
                            </h5>
                            <div id="faq-item-2-3" class="collapse" data-bs-parent="#checkout_accordion_1">
                                <div class="card-body">
                                    <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ltn__payment-note mt-30 mb-30">
                        <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                    </div>
                    <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Request Exchange <img class="d-none" id="success-loading" width="30" src="{{url('/')}}/uploads/logos/loading.gif"></button>
                    <br><br>
                    <div>
                        <p>
                            <h3 id="success" class="alert-success d-none">Your Request Has Been Received!</h3>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping-cart-total mt-50">
                    <h4 class="title-2">Cart Totals</h4>
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


                            <tr>
                                <td>Vat</td>
                                <td>kes {{Cart::tax()}}</td>
                            </tr>
                            <tr>
                                <td><strong>Order Total</strong></td>
                                <td><strong>Kes {{Cart::total()}}</strong></td>
                            </tr>
                        </tbody>
                    </table>
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
