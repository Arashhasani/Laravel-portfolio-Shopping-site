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

        Edit ...
    @endslot




    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit ...</h4>
                </div>
                <div class="card-body">


                    @if($errors->any())

                        <ul class="alert alert-danger">

                            @foreach($errors->all() as $error)

                                <li>{{$error}}</li>


                            @endforeach
                        </ul>

                    @endif




                    <div class="basic-form">
                        <form action="{{route('orders.update',['order'=>$order])}}" method="post">

                            @method('PATCH ')
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>User Name</label>
                                    <input name="user" type="text" class="form-control" value="{{$order->user->name}}"
                                           disabled>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Price</label>
                                    <input name="price" type="text" class="form-control" value="{{$order['price']}}"
                                          >
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                        <option value="unpaid" {{$order['status']=='unpaid'?'selected':''}}>Unpaid</option>
                                        <option value="paid" {{$order['status']=='paid'?'selected':''}}>Paid</option>
                                    </select>
                                </div>

                            </div>


                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>


                </div>


                <div class="card-footer">

                    <table class="table table-responsive-md">
                        <thead>
                        <tr>
                            <th class="width80"><strong>ID</strong></th>
                            <th><strong>TITLE</strong></th>
                            <th><strong>PRICE</strong></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($order->products()->get() as $product)
                            <tr>
                                <td><strong>{{$product['id']}}</strong></td>
                                <td>{{$product['title']}}</td>
                                <td>{{$product['price']}} $</td>

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
