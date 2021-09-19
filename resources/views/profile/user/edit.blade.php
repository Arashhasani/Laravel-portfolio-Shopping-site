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

        Edit ...
    @endslot




    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">User ...</h4>
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
                        <form action="{{route('edit.user')}}" method="post">

                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>First Name</label>
                                    <input name="name" type="text" class="form-control" value="{{$user['name']}}"
                                           placeholder="1234 Main St">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input name="email" type="email" class="form-control" value="{{$user['email']}}"
                                           placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Password</label>
                                    <input name="password" type="password" class="form-control" placeholder="Password">
                                </div>

                            </div>


                            <button type="submit" class="btn btn-primary">Update ...</button>
                        </form>
                    </div>


                </div>


            </div>


        </div>
    </div>
    </div>
    </div>

@endcomponent
