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




                    @foreach($products as $product)



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


                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="basic-pagination wow fadeInUp text-center mt-20" data-wow-delay=".2s">
                                    <ul>
                                        <li>
                                            {{$products->render()}}
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>





                </div>

            </div>
        </section>
        <!-- product area end -->



    </main>


@endcomponent