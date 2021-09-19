<?php
/**
 * Created by PhpStorm.
 * User: Arash
 * Date: 9/7/2021
 * Time: 11:36 AM
 */


?>


@component('profile.layout.content')



    @slot('title')

        Profile ...
    @endslot




    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="form-head d-flex mb-0 mb-lg-4 align-items-start">
                <div class="mr-auto d-none d-lg-block">
                    <h2 class="text-black font-w600">Dashboard ...</h2>
                    <p class="mb-0">Current campaign list</p>
                </div>
                <div class="d-none d-lg-flex align-items-center">
                    <div class="text-right">
                        <h3 class="fs-20 text-black mb-0">09:62 AM</h3>
                        <span class="fs-14">Monday, 3 Augusut 2020</span>
                    </div>
                    <a class="ml-4 text-black p-3 rounded border text-center width60" href="javascript:void(0);">
                        <i class="las la-cog scale5"></i>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="col-lg-8 col-xxl-12">

                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="card widget-stat ">
                                    <div class="card-body p-4">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <p class="fs-18 mb-2 wspace-no">Orders</p>
                                                <h1 class="fs-36 font-w600 text-black mb-0">{{count(\App\Models\Order::all())}}</h1>
                                            </div>
                                            <span class="ml-3 bg-primary text-white">
												<i class="flaticon-381-promotion"></i>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Recent Payments Queue</h4>
                        </div>
                        <div class="card-body">




                            <div class="table-responsive">
                                <table class="table table-responsive-md">
                                    <thead>
                                    <tr>
                                        <th class="width80"><strong>ID</strong></th>
                                        <th><strong>PRICE</strong></th>
                                        <th><strong>DATE</strong></th>
                                        <th><strong>STATUS</strong></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($orders as $order)


                                        <tr>
                                            <td><strong>{{$order['id']}}</strong></td>
                                            <td>$  {{$order['price']}}</td>
                                            <td>{{$order['created_at']}}</td>
                                            <td><span class="badge light badge-success">{{$order['status']}}</span></td>
                                            <td>
                                                <a class="btn btn-outline-success" href="{{route('order',['order'=>$order['id']])}}">Edit</a>
                                                @if($order['status']=='unpaid')

                                                    <a class="btn btn-outline-warning" href="{{route('order.payment',['order'=>$order['id']])}}">Pay</a>

                                                @endif
                                            </td>
                                        </tr>



                                    @endforeach

                                    </tbody>
                                </table>
                            </div>


                        </div>
                        <div class="card-footer">{{$orders->render()}}</div>


                    </div>


                </div>
            </div>
        </div>
    </div>

@endcomponent
