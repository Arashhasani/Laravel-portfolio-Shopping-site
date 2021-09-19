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

        Order ...
    @endslot




    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Order ...</h4>
                </div>
                <div class="card-body">




                    <table class="table table-responsive-md">
                        <thead>
                        <tr>
                            <th class="width80"><strong>ID</strong></th>
                            <th><strong>TITLE</strong></th>
                            <th><strong>PRICE</strong></th>
                            <th><strong>Download ...</strong></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($order->products()->get() as $product)
                        <tr>
                            <td><strong>{{$product['id']}}</strong></td>
                            <td>{{$product['title']}}</td>
                            <td>{{$product['price']}} $</td>
                            @if($order->status=='paid')
                                <td><a href="#" class="btn btn-sm btn-outline-success">Download ...</a></td>
                                @endif

                        </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>


            </div>


        </div>
    </div>
    </div>
    </div>

@endcomponent
