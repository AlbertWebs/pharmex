@extends('exchange.master')

@section('content')


    <div class="ltn__utilize-overlay"></div>

    <br><br>


    <!-- SHOPING CART AREA START -->
    <div class="liton__shoping-cart-area mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping-cart-inner">
                        <div class="shoping-cart-table table-responsive">
                            <table class="table">
                                <thead>
                                    <th class="cart-product-remove">Remove</th>
                                    <th class="cart-product-image">Image</th>
                                    <th class="cart-product-info">Product</th>
                                    <th class="cart-product-price">Price</th>
                                    <th class="cart-product-quantity">Quantity</th>
                                    <th class="cart-product-subtotal">Subtotal</th>
                                </thead>
                                <tbody>
                                    @foreach (($cartItem) as $item)
                                    <?php
                                       $Product = \App\Models\Product::find($item->id);
                                    ?>
                                    <tr>
                                        <td class="cart-product-remove">
                                            <a href="{{route('destroys', $item->rowId)}}">x</a>
                                        </td>
                                        <td class="cart-product-image">
                                            <a href="{{route('product',$Product->slung)}}"><img src="{{$Product->image}}" alt="#"></a>
                                        </td>
                                        <td class="cart-product-info">
                                            <h4>
                                                <a href="{{route('product',$Product->slung)}}">{{$Product->brand_name}}</a>
                                            </h4>
                                            <hr>
                                            <h5>{{$Product->generic_name}}</h5>
                                            <hr>
                                            <small>{{$Product->pharmacological_class}}</small>
                                        </td>
                                        <td class="cart-product-price">KES {{$Product->price}}</td>
                                        <td class="cart-product-quantity">
                                            <div class="cart-plus-minus">
                                                <input type="text" value="{{$item->qty}}" name="qtybutton" class="cart-plus-minus-box">
                                            </div>
                                        </td>
                                        <td class="cart-product-subtotal">KES <?php echo ($Product->price)*($item->qty); ?></td>
                                    </tr>
                                    @endforeach
                                    <tr class="cart-coupon-row">

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="shoping-cart-total mt-50">
                            <h4>Cart Totals</h4>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Cart Subtotal</td>
                                        <td>Kes {{Cart::subtotal()}}</td>
                                    </tr>
                                    <tr>
                                        <td>Shipping and Handing</td>
                                        <td>Kes 1500.00</td>
                                    </tr>
                                    <tr>
                                        <td>Vat</td>
                                        <td>Kes {{Cart::tax()}}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Order Total</strong></td>
                                        <td><strong>Kes {{Cart::total()}}</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="btn-wrapper text-right">
                                <a href="{{route('checkout')}}" class="theme-btn-1 btn btn-effect-1">Proceed to checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOPING CART AREA END -->



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
