<?php
/**
 * Created by PhpStorm.
 * User: Arash
 * Date: 9/6/2021
 * Time: 12:50 PM
 */

?>



@component('web.layout.content')





    @slot('title')

        {!! SEO::generate() !!}


    @endslot



        <!-- bg shape area start -->
        <div class="bg-shape">
            <img src="/web/assets/img/shape/shape-1.png" alt="">
        </div>
        <!-- bg shape area end -->

        <!-- page title area -->
        <section class="page__title-area  pt-85">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="page__title-content mb-50">
                            <h2 class="page__title">{{$product['title']}}</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item"><a href="product.html">Product</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{$product['title']}}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title end -->

        <!-- product area start -->
        <section class="product__area pb-115">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-8 col-xl-8 col-lg-8">
                        <div class="product__wrapper">
                            <div class="product__details-thumb w-img mb-30">
                                <img src="{{$product['imagebig']}}" alt="product-details">
                            </div>
                            <div class="product__details-content">
                                <div class="product__tab mb-40">
                                    <ul class="nav nav-tabs" id="proTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview" type="button" role="tab" aria-controls="overview" aria-selected="true">Overview</button>
                                        </li>

                                    </ul>
                                </div>
                                <div class="product__tab-content">
                                    <div class="tab-content" id="proTabContent">
                                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                            <div class="product__overview">
                                                <h3 class="product__overview-title">Template Details</h3>
                                                <p>{{$product['body']}}</p>


                                                <div class="product__social m-social grey-bg-2">
                                                    <h4 class="product__social-title">Follow us</h4>
                                                    <ul>
                                                        <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#" class="pin"><i class="fab fa-pinterest-p"></i></a></li>
                                                        <li><a href="#" class="link"><i class="fab fa-linkedin-in"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                        <div class="product__details-sidebar ml-30">
                            <div class="product__proprietor white-bg mb-30">
                                <div class="product__proprietor-head mb-25">
                                    <div class="product__prorietor-info mb-20 d-flex justify-content-between">
                                        <div class="product__proprietor-avater d-flex align-items-center">
                                            <div class="product__proprietor-thumb">
                                                <img src="/web/assets/img/product/proprietor/proprietor-1.jpg" alt="">
                                            </div>
                                            <div class="product__proprietor-name">
                                                <h5><a href="#">{{$product->users->name}}</a></h5>
                                            </div>
                                        </div>
                                        <div class="product__proprietor-price">
                                            <span class="d-flex align-items-start"><span>$</span>{{$product['price']}}</span>
                                        </div>
                                    </div>
                                    <div class="product__proprietor-text">
                                        {{--<p>Jeffrey arse over tit give us a bell old posh morish wellies cheeky.</p>--}}
                                    </div>
                                </div>
                                <div class="product__proprietor-body fix">
                                    <ul class="mb-10 fix">
                                        <li>
                                            <h6>Framework:</h6>
                                            <span>{{$product['price']}}</span>
                                        </li>
                                        <li>
                                            <h6>Released On:</h6>
                                            <span>{{$product['created_at']}}</span>
                                        </li>
                                        <li>
                                            <h6>Version:</h6>
                                            <span>1.0</span>
                                        </li>
                                        <li>
                                            <h6>Compatibility:</h6>
                                            <span>{{isset($product->Categories()->first()->name)? $product->Categories()->first()->name : ''}}</span>
                                        </li>

                                    </ul>
                                    <form method="post" action="{{route('cart.add',['product'=>$product['id']])}}" id="addtocartform">
                                        @csrf
                                    </form>
                                    <a onclick="document.getElementById('addtocartform').submit()" href="#" class="m-btn m-btn-2 w-100 mb-20"> <span></span> Buy Now</a>
                                    <a href="pricing.html" class="m-btn m-btn-border w-100"> <span></span> Preview Project</a>
                                </div>
                            </div>
                            <div class="sidebar__banner" data-background="assets/img/banner/sidebar-banner.jpg">
                                <h4 class="sidebar__banner-title">Check Out <br>Our free Templates</h4>
                                <a href="product.html" class="m-btn m-btn-white"> <span></span> free template</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product area end -->







    @endcomponent
