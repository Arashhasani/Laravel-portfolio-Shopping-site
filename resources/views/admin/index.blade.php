<?php
/**
 * Created by PhpStorm.
 * User: Arash
 * Date: 9/7/2021
 * Time: 11:36 AM
 */


?>


@component('admin.layout.content')



    @slot('title')

        Admin ...
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
                            <div class="col-lg-6 col-sm-6">
                                <div class="card widget-stat">
                                    <div class="card-body p-4">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <p class="fs-18 mb-2 wspace-no">Products</p>
                                                <h1 class="fs-36 font-w600 d-flex align-items-center text-black mb-0">
                                                    {{count(\App\Models\Product::all())}}</h1>
                                            </div>
                                            <span class="ml-3 bg-warning text-white">
												<i class="flaticon-381-user-7"></i>
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
                                        <th><strong>ID</strong></th>
                                        <th><strong>Title</strong></th>
                                        <th><strong>Price</strong></th>
                                        <th><strong>STATUS</strong></th>
                                        <th><strong>Action</strong></th>
                                    </tr>
                                    </thead>
                                    <tbody>


                                    @foreach($products as $product)
                                        <tr>
                                            <td><strong>{{$product['id']}}</strong></td>
                                            <td>{{$product['title']}}</td>
                                            <td>{{$product['price']}} $</td>

                                            @if($product->is_published())
                                                <td><span class="badge light badge-success">Published</span></td>

                                            @else
                                                <td><span class="badge light badge-danger">Pending</span></td>

                                            @endif
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-success light sharp"
                                                            data-toggle="dropdown">
                                                        <svg width="20px" height="20px" viewBox="0 0 24 24"
                                                             version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                               fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"/>
                                                                <circle fill="#000000" cx="5" cy="12" r="2"/>
                                                                <circle fill="#000000" cx="12" cy="12" r="2"/>
                                                                <circle fill="#000000" cx="19" cy="12" r="2"/>
                                                            </g>
                                                        </svg>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <form method="post" action="{{route('products.destroy',['product'=>$product['id']])}}" id="deleteproductform">@csrf @method('delete')</form>
                                                        <a class="dropdown-item" href="{{route('products.edit',['product'=>$product['id']])}}" >Edit</a>
                                                        <a class="dropdown-item" href="#" onclick="event.preventDefault();document.getElementById('deleteproductform').submet()">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>



                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card-footer">{{$products->render()}}</div>
                    </div>


                </div>
            </div>
        </div>
    </div>

@endcomponent
