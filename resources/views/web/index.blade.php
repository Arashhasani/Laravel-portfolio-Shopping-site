<?php
/**
 * Created by PhpStorm.
 * User: Arash
 * Date: 9/6/2021
 * Time: 11:40 AM
 */

?>


@component('web.layout.content')





    @slot('title')

        {!! SEO::generate() !!}

    @endslot

    <main>


        <!-- sidebar area start -->
        <div class="sidebar__area">
            <div class="sidebar__wrapper">
                <div class="sidebar__close">
                    <button class="sidebar__close-btn" id="sidebar__close-btn">
                        <span><i class="fal fa-times"></i></span>
                        <span>close</span>
                    </button>
                </div>
                <div class="sidebar__content">
                    <div class="logo mb-40">
                        <a href="index.html">
                            <img src="/web/assets/img/logo/logo-white.png" alt="logo">
                        </a>
                    </div>
                    <div class="mobile-menu"></div>
                    <div class="sidebar__action mt-330">
                        <div class="sidebar__login mt-15">
                            <a href="#"><i class="far fa-unlock"></i> Log In</a>
                        </div>
                        <div class="sidebar__cart mt-20">
                            <a href="javascript:void(0);" class="cart-toggle-btn">
                                <i class="far fa-shopping-cart"></i>
                                <span>2</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- sidebar area end -->
        <div class="body-overlay"></div>
        <!-- sidebar area end -->


        <!-- hero area start -->
        <section class="hero__area hero__height grey-bg-3 d-flex align-items-center">
            <div class="hero__shape">
                <img class="circle" src="/web/assets/img/icon/hero/hero-circle.png" alt="circle">
                <img class="circle-2" src="/web/assets/img/icon/hero/hero-circle-2.png" alt="circle">
                <img class="square" src="/web/assets/img/icon/hero/hero-square.png" alt="circle">
                <img class="square-2" src="/web/assets/img/icon/hero/hero-square-2.png" alt="circle">
                <img class="dot" src="/web/assets/img/icon/hero/hero-dot.png" alt="circle">
                <img class="triangle" src="/web/assets/img/icon/hero/hero-triangle.png" alt="circle">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-8 col-sm-8">
                        <div class="hero__content">
                            <h2 class="hero__title">
                                <span>The world’s largest</span>
                                WordPress Themes
                                Collection.
                            </h2>
                            <p>The bee's knees pardon you plastered it's all gone to pot cheeky bugger wind up down.</p>
                            <div class="hero__search">
                                <form action="#">
                                    <div class="hero__search-inner d-xl-flex">
                                        <div class="hero__search-input">
                                            <span><i class="far fa-search"></i></span>
                                            <input type="text" placeholder="Search for templates">
                                        </div>
                                        <button type="submit" class="m-btn ml-20"><span></span> search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        <div class="hero__thumb-wrapper scene ml-70">
                            <div class="hero__thumb one d-none d-lg-block">
                                <img class="layer" data-depth="0.2" src="/web/assets/img/hero/hero-1.jpg" alt="">
                            </div>
                            <div class="hero__thumb two">
                                <img class="layer" data-depth="0.3" src="/web/assets/img/hero/hero-2.jpg" alt="">
                            </div>
                            <div class="hero__thumb three">
                                <img class="layer" data-depth="0.4" src="/web/assets/img/hero/hero-3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero area end -->



        <!-- category area start -->
        <section class="category__area pt-105 pb-135">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="section__title-wrapper text-center mb-60">
                            <h2 class="section__title">Browse <br> Popular Categories</h2>
                            <p>Find over 7000 website templates and themes.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-3 col-xl-3 col-md-6 col-sm-6">
                        <div class="category__item transition-3 text-center white-bg mb-30 wow fadeInUp"
                             data-wow-delay=".3s">
                            <div class="category__icon mb-25">
                                <a href="#"><img src="/web/assets/img/icon/catagory/cat-1.png" alt=""></a>
                            </div>
                            <div class="category__content">
                                <h3 class="category__title">
                                    <a href="product.html">WordPress Themes</a>
                                </h3>
                                <a href="product.html" class="link-btn">
                                    <i class="far fa-long-arrow-right"></i>
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-md-6 col-sm-6">
                        <div class="category__item transition-3 text-center white-bg mb-30 wow fadeInUp"
                             data-wow-delay=".5s">
                            <div class="category__icon mb-25">
                                <a href="#"><img src="/web/assets/img/icon/catagory/cat-2.png" alt=""></a>
                            </div>
                            <div class="category__content">
                                <h3 class="category__title">
                                    <a href="product.html">Site Templates</a>
                                </h3>
                                <a href="product.html" class="link-btn">
                                    <i class="far fa-long-arrow-right"></i>
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-md-6 col-sm-6">
                        <div class="category__item transition-3 text-center white-bg mb-30 wow fadeInUp"
                             data-wow-delay=".7s">
                            <div class="category__icon mb-25">
                                <a href="#"><img src="/web/assets/img/icon/catagory/cat-3.png" alt=""></a>
                            </div>
                            <div class="category__content">
                                <h3 class="category__title">
                                    <a href="product.html">UI Templates</a>
                                </h3>
                                <a href="product.html" class="link-btn">
                                    <i class="far fa-long-arrow-right"></i>
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-md-6 col-sm-6">
                        <div class="category__item transition-3 text-center white-bg mb-30 wow fadeInUp"
                             data-wow-delay=".9s">
                            <div class="category__icon mb-25">
                                <a href="#"><img src="/web/assets/img/icon/catagory/cat-4.png" alt=""></a>
                            </div>
                            <div class="category__content">
                                <h3 class="category__title">
                                    <a href="product.html">Digital Marketing</a>
                                </h3>
                                <a href="product.html" class="link-btn">
                                    <i class="far fa-long-arrow-right"></i>
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="category__more mt-30 text-center">
                            <a href="product.html" class="m-btn m-btn-2"> <span></span> View all categories</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- category area end -->


        <!-- product area start -->
        <section class="product__area pt-105 pb-110 grey-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="section__title-wrapper text-center mb-60">
                            <h2 class="section__title">Latest <br> Premium Products</h2>
                            <p>From multipurpose themes to niche templates</p>
                        </div>
                    </div>
                </div>
                <div class="row">




                    @foreach(\App\Models\Product::query()->limit(6)->where('is_published',1)->get() as $product)



                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="product__item white-bg mb-30 wow fadeInUp" data-wow-delay=".3s">
                            <div class="product__thumb">
                                <div class="product__thumb-inner fix w-img">
                                    <a href="{{route('single.product',['product'=>$product['id']])}}">
                                        <img src="{{$product['imagesm']}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="product__content">
                                <div class="product__meta mb-10 d-flex justify-content-between align-items-center">
                                    <div class="product__tag">
                                        <a href="#">Business</a>
                                    </div>
                                    <div class="product__price">
                                        <span>{{$product['price']}}</span>
                                    </div>
                                </div>
                                <h3 class="product__title">
                                    <a href="{{route('single.product',['product'=>$product['id']])}}">{{$product['title']}}</a>
                                </h3>
                                <p class="product__author">by <a href="#">{{$product->users['name']}}</a> in <a href="#">Templates</a>
                                </p>
                            </div>
                        </div>
                    </div>





                    @endforeach







                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="product__more text-center mt-30">
                            <a href="{{route('all.products')}}" class="m-btn m-btn-2"> <span></span> Explore Premium</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product area end -->


        <!-- subscribe area start -->
        <section class="subscribe__area p-relative pt-100 pb-110" data-background="/web/assets/img/bg/subscribe-bg.jpg">
            <div class="subscribe__icon">
                <img class="ps" src="/web/assets/img/icon/subscribe/ps.png" alt="">
                <img class="wp" src="/web/assets/img/icon/subscribe/wp.png" alt="">
                <img class="html" src="/web/assets/img/icon/subscribe/html.png" alt="">
                <img class="f" src="/web/assets/img/icon/subscribe/f.png" alt="">
                <img class="man" src="/web/assets/img/icon/subscribe/man.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="subscribe__content text-center wow fadeInUp" data-wow-delay=".5s">
                            <h3 class="subscribe__title">Have a project? <br> Create your website now.</h3>
                            <p>Try our any product for FREE!</p>
                            <div class="subscribe__form wow fadeInUp" data-wow-delay=".7s">
                                <form action="#">
                                    <input type="email" placeholder="Email Address">
                                    <button type="submit" class="m-btn m-btn-black"><span></span> subscribe</button>
                                </form>
                                <p>Join 20,000+ other creators in our Markit community.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subscribe area end -->


        <div class="latest-news-area pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="section__title-wrapper text-center mb-60">
                            <h2 class="section__title">Latest from Blog</h2>
                            <p>From multipurpose themes to niche templates</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="latest-blog mb-30">
                            <div class="latest-blog-img pos-rel">
                                <img src="/web/assets/img/blog/sm1.jpg" alt="">
                                <div class="top-date">
                                    <a href="#">15 March 21</a>
                                </div>
                            </div>
                            <div class="latest-blog-content">
                                <div class="latest-post-meta mb-15">
                                    <span><a href="#"><i class="far fa-user"></i> Diboli </a></span>
                                    <span><a href="#"><i class="far fa-comments"></i> 23 Comments</a></span>
                                </div>
                                <h3 class="latest-blog-title">
                                    <a href="blog-details.html">Time is money but its not full demand.</a>
                                </h3>
                                <p>Haggle down the pub off his nut arse bog bits and bobs bugger.</p>
                                <div class="blog-arrow">
                                    <a href="blog-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="latest-blog mb-30">
                            <div class="latest-blog-img pos-rel">
                                <img src="/web/assets/img/blog/sm2.jpg" alt="">
                                <div class="top-date">
                                    <a href="#">22 March 21</a>
                                </div>
                            </div>
                            <div class="latest-blog-content">
                                <div class="latest-post-meta mb-15">
                                    <span><a href="#"><i class="far fa-user"></i> Diboli </a></span>
                                    <span><a href="#"><i class="far fa-comments"></i> 23 Comments</a></span>
                                </div>
                                <h3 class="latest-blog-title">
                                    <a href="blog-details.html">We Are Trying To Do Best Work.</a>
                                </h3>
                                <p>Haggle down the pub off his nut arse bog bits and bobs bugger.</p>
                                <div class="blog-arrow">
                                    <a href="blog-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="latest-blog mb-30">
                            <div class="latest-blog-img pos-rel">
                                <img src="/web/assets/img/blog/sm3.jpg" alt="">
                                <div class="top-date">
                                    <a href="#">28 March 21</a>
                                </div>
                            </div>
                            <div class="latest-blog-content">
                                <div class="latest-post-meta mb-15">
                                    <span><a href="#"><i class="far fa-user"></i> Diboli </a></span>
                                    <span><a href="#"><i class="far fa-comments"></i> 23 Comments</a></span>
                                </div>
                                <h3 class="latest-blog-title">
                                    <a href="blog-details.html">Nature is The best place for fresh mind.</a>
                                </h3>
                                <p>Haggle down the pub off his nut arse bog bits and bobs bugger.</p>
                                <div class="blog-arrow">
                                    <a href="blog-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </main>


@endcomponent