<?php
/**
 * Created by PhpStorm.
 * User: Arash
 * Date: 9/6/2021
 * Time: 12:40 PM
 */

?>


<!-- header area start -->
<header>
    <div class="header__area white-bg" id="header-sticky">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-6">
                    <div class="logo">
                        <a href="'/">
                            <img src="/web/assets/img/logo/logo.png" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-xxl-8 col-xl-8 col-lg-8 d-none d-lg-block">
                    <div class="main-menu">
                        <nav id="mobile-menu">
                            <ul>
                                <li class="has-dropdown active">
                                    <a href="{{route('index')}}">Home</a>
                                    <ul class="submenu">
                                        <li><a href="index.html">Home Wordpress</a></li>
                                        <li><a href="index-2.html">Home Plugins</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="product.html">Themes</a>
                                    <ul class="submenu">
                                        <li><a href="product.html">Product</a></li>
                                        <li><a href="product-details.html">Product Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="product.html">HTML</a></li>
                                <li><a href="support.html">Support</a></li>
                                <li class="has-dropdown">
                                    <a href="product.html">pages</a>

                                    <ul class="submenu">
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="documentation.html">Documentation</a></li>
                                        <li><a href="pricing.html">Pricing</a></li>
                                        <li><a href="sign-up.html">Sign Up</a></li>
                                        <li><a href="sign-in.html">Log In</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="blog.html">Blog</a>

                                    <ul class="submenu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-8 col-6">
                    <div class="header__action d-flex align-items-center justify-content-end">
                        <div class="header__login d-none d-sm-block">
                            @if(auth()->check())
                                <a href="{{route('profile')}}"><i class="far fa-user"></i> Profile ... </a>

                                @else
                                <a href="{{route('profile')}}"><i class="far fa-unlock"></i> Log In</a>
                            @endif
                        </div>
                        <div class="header__cart d-none d-sm-block">
                            <a href="javascript:void(0);" class="cart-toggle-btn">
                                <i class="far fa-shopping-cart"></i>
                                <span>{{count(\App\Helpers\Cart::all())}}</span>
                            </a>
                        </div>
                        <div class="sidebar__menu d-lg-none">
                            <div class="sidebar-toggle-btn" id="sidebar-toggle">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->


<!-- cart mini area start -->
<div class="cartmini__area">
    <div class="cartmini__wrapper">
        <div class="cartmini__title">
            <h4>Shopping cart</h4>
        </div>
        <div class="cartmini__close">
            <button type="button" class="cartmini__close-btn"><i class="fal fa-times"></i></button>
        </div>
        <div class="cartmini__widget">
            <div class="cartmini__inner">
                <ul>

                    @foreach(\App\Helpers\Cart::all() as $cart)

                        @if(isset($cart['product']))
                            @php
                                $product=$cart['product']
                            @endphp
                        @endif





                        <li>
                            <div class="cartmini__thumb">
                                <a href="product-details.html">
                                    <img src="{{$product['imagesm']}}" alt="">
                                </a>
                            </div>
                            <div class="cartmini__content">
                                <h5><a href="product-details.html">{{$product['title']}}</a></h5>

                                <div class="product__sm-price-wrapper">

                                    <span class="product__sm-price">$ {{$product['price']}}</span>
                                </div>
                            </div>
                            <form method="post" action="{{route('card.delete',$product['id'])}}"
                                  id="deletefromcard{{$product['id']}}">
                                @csrf
                                @method('DELETE')
                            </form>
                            <a href="#" onclick="event.preventDefault();document.getElementById('deletefromcard{{$product['id']}}').submit()"
                               class="cartmini__del"><i class="fal fa-times"></i></a>
                        </li>





                    @endforeach


                </ul>
            </div>
            <div class="cartmini__checkout">
                <div class="cartmini__checkout-title mb-30">
                    @php
                        $totalprice=\App\Helpers\Cart::all()->sum(function ($cart){
                        return $cart['product']->price;
                        });
                    @endphp
                    <h4>Subtotal:</h4>
                    <span>${{$totalprice}}</span>
                </div>
                <div class="cartmini__checkout-btn">
                    <a href="cart.html" class="m-btn m-btn-border mb-10 w-100"> <span></span> view cart</a>

                    <form method="post" action="{{route('cart.payment')}}" id="cart.payment">@csrf</form>
                    <a href="checkout.html" onclick="event.preventDefault();document.getElementById('cart.payment').submit()" class="m-btn m-btn-3 w-100"> <span></span> checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="body-overlay"></div>
<!-- cart mini area end -->



