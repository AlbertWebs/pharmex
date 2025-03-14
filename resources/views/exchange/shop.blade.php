@extends('exchange.master')

@section('content')


    <div class="ltn__utilize-overlay"></div>



    {{--  --}}
    <!-- SHOP DETAILS AREA START -->
    @foreach ($Product as $product)
     <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image"  data-bs-bg="img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">{{$product->name}}</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{url('/')}}/stock-exchange"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                                <li>Product Details</li>
                                <li> {{$product->brand_name}}</li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->
    <div class="ltn__shop-details-area pb-85">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12" style="margin:0 auto">
                    <div class="ltn__shop-details-inner mb-60">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="ltn__shop-details-img-gallery">
                                    <div class="ltn__shop-details-large-img">
                                        <div class="single-large-img">
                                            <a class="single-large-imgs" href="{{$product->image}}" data-rel="lightcase:myCollection">
                                                <img src="{{$product->image}}" alt="Image">
                                            </a>
                                        </div>
                                        <div class="single-large-img">
                                            <a class="single-large-imgs" href="{{$product->image}}" data-rel="lightcase:myCollection">
                                                <img src="{{$product->image}}" alt="Image">
                                            </a>
                                        </div>
                                        <div class="single-large-img">
                                            <a class="single-large-imgs" href="{{$product->image}}" data-rel="lightcase:myCollection">
                                                <img src="{{$product->image}}" alt="Image">
                                            </a>
                                        </div>
                                        <div class="single-large-img">
                                            <a class="single-large-imgs" href="{{$product->image}}" data-rel="lightcase:myCollection">
                                                <img src="{{$product->image}}" alt="Image">
                                            </a>
                                        </div>
                                        <div class="single-large-img">
                                            <a class="single-large-imgs" href="{{$product->image}}" data-rel="lightcase:myCollection">
                                                <img src="{{$product->image}}" alt="Image">
                                            </a>
                                        </div>

                                    </div>
                                    <div class="ltn__shop-details-small-img slick-arrow-2">
                                        <div class="single-small-img">
                                            <img src="{{$product->image}}" alt="Image">
                                        </div>
                                        <div class="single-small-img">
                                            <img src="{{$product->image}}" alt="Image">
                                        </div>
                                        <div class="single-small-img">
                                            <img src="{{$product->image}}" alt="Image">
                                        </div>
                                        <div class="single-small-img">
                                            <img src="{{$product->image}}" alt="Image">
                                        </div>
                                        <div class="single-small-img">
                                            <img src="{{$product->image}}" alt="Image">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-product-info shop-details-info pl-0">

                                    <small>{{$product->pharmacological_class}}</small>
                                    <h3>{{$product->brand_name}}</h3>
                                    <h5>{{$product->generic_name}}</h5>
                                    <div class="product-price">
                                        <span>kes {{$product->price_raw}}</span>
                                        <del>kes {{$product->price}}</del>
                                    </div>
                                    <div class="modal-product-meta ltn__product-details-menu-1">
                                        <ul>
                                            <li>
                                                <strong>Categories:</strong>
                                                <span>

                                                    <a href="{{route('category', $product->category)}}">{{$product->category}}</a>
                                                    <a href="#">{{$product->brand}}</a>

                                                </span>
                                            </li>
                                            <li>
                                                <strong>Dosage:</strong>
                                                <span>

                                                    <a href="#">{{$product->dosage}}</a>


                                                </span>
                                            </li>
                                            <li>
                                                <strong>Strength:</strong>
                                                <span>

                                                    <a href="#">{{$product->strength}}</a>


                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="ltn__product-details-menu-2">
                                        <form method="POST" action="{{route('add-to-cart')}}">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$product->id}}">
                                        <ul>
                                            <li>
                                                <div class="cart-plus-minus">
                                                    <input type="text" value="01" name="qtybutton" class="cart-plus-minus-box">
                                                </div>
                                            </li>
                                            <li>
                                                <button type="submit" class="theme-btn-1 btn btn-effect-1" title="Add to Cart">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span>ADD TO CART</span>
                                                </button>
                                            </li>
                                        </ul>
                                        </form>
                                    </div>
                                    <div class="ltn__product-details-menu-3">
                                        <ul>
                                            <li>
                                                <a href="#" class="" title="Wishlist">
                                                    <i class="far fa-heart"></i>
                                                    <span><strong>{{$product->quantity}}</strong> Available in Stock</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                    <hr>

                                    <div class="ltn__safe-checkout">
                                        <h5>Guaranteed Safe Checkout</h5>
                                        <img src="{{asset('theme-shop/img/icons/payment-2.png')}}" alt="Payment Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Shop Tab Start -->
                    <div class="ltn__shop-details-tab-inner ltn__shop-details-tab-inner-2">
                        <div class="ltn__shop-details-tab-menu">
                            <div class="nav">
                                <a class="active show" data-bs-toggle="tab" href="#liton_tab_details_1_1">Description</a>
                                <a data-bs-toggle="tab" href="#liton_tab_details_1_2" class="">Reviews</a>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="liton_tab_details_1_1">
                                <div class="ltn__shop-details-tab-content-inner">
                                    <h4 class="title-2">{{$product->title}}</h4>
                                    <p>
                                        {!!html_entity_decode($product->content)!!}
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="liton_tab_details_1_2">
                                <div class="ltn__shop-details-tab-content-inner">
                                    <h4 class="title-2">Customer Reviews</h4>
                                    <div class="product-ratting">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                            <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                        </ul>
                                    </div>
                                    <hr>
                                    <!-- comment-area -->
                                    <div class="ltn__comment-area mb-30">
                                        <div class="ltn__comment-inner">
                                            <ul>
                                                <li>
                                                    <div class="ltn__comment-item clearfix">
                                                        <div class="ltn__commenter-img">
                                                            <img src="{{asset('theme-shop/img/testimonial/1.jpg')}}" alt="Image">
                                                        </div>
                                                        <div class="ltn__commenter-comment">
                                                            <h6><a href="#">Adam Smit</a></h6>
                                                            <div class="product-ratting">
                                                                <ul>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                                            <span class="ltn__comment-reply-btn">November 3, 2024</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- comment-reply -->
                                    <div class="ltn__comment-reply-area ltn__form-box mb-30">
                                        <form action="#">
                                            <h4 class="title-2">Add a Review</h4>
                                            <div class="mb-30">
                                                <div class="add-a-review">
                                                    <h6>Your Ratings:</h6>
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-item input-item-textarea ltn__custom-icon">
                                                <textarea placeholder="Type your comments...."></textarea>
                                            </div>
                                            <div class="input-item input-item-name ltn__custom-icon">
                                                <input type="text" placeholder="Type your name....">
                                            </div>
                                            <div class="input-item input-item-email ltn__custom-icon">
                                                <input type="email" placeholder="Type your email....">
                                            </div>
                                            <div class="input-item input-item-website ltn__custom-icon">
                                                <input type="text" name="website" placeholder="Type your website....">
                                            </div>
                                            <label class="mb-0"><input type="checkbox" name="agree"> Save my name, email, and website in this browser for the next time I comment.</label>
                                            <div class="btn-wrapper">
                                                <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Shop Tab End -->
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- SHOP DETAILS AREA END -->
    {{--  --}}


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
