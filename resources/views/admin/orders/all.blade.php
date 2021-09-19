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

        Ordera ...
    @endslot




    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Orders ...</h4>
                </div>
                <div class="card-body">




                    <table class="table table-responsive-md">
                        <thead>
                        <tr>
                            <th class="width80"><strong>ID</strong></th>
                            <th><strong>User</strong></th>
                            <th><strong>PRICE</strong></th>
                            <th><strong>STATUS</strong></th>
                            <th><strong>Action</strong></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>



                        @foreach($orders as $order)


                        <tr>
                            <td><strong>{{$order['id']}}</strong></td>
                            <td>{{$order->user->name}}</td>
                            <td>{{$order['price']}} $</td>

                            <td><span class="badge light badge-success">{{$order['status']}}</span></td>
                            <td>
                                <form method="post" action="{{route('orders.destroy',['order'=>$order['id']])}}" id="deleteorderform">@method('delete') @csrf</form>
                                <form method="get" action="{{route('orders.edit',['order'=>$order['id']])}}" id="editorderform"> @csrf</form>

                                <a class="btn btn-outline-success btn-sm" href="#">More</a>
                                <a   class="btn btn-outline-info btn-sm" href="{{route('orders.edit',['order'=>$order['id']])}}">Edit</a>
                                <a onclick="event.preventDefault();document.getElementById('deleteorderform').submit()" class="btn btn-outline-danger btn-sm" href="#">Remove</a>

                            </td>
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
