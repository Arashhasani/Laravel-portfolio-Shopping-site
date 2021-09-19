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

    Users ...
        @endslot




    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="form-head d-flex mb-0 mb-lg-4 align-items-start">
                <div class="mr-auto d-none d-lg-block">
                    <h2 class="text-black font-w600">Users ...</h2>
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
                                        <th><strong>Name</strong></th>
                                        <th><strong>Email</strong></th>
                                        <th><strong>STATUS</strong></th>
                                        <th><strong>Action</strong></th>
                                    </tr>
                                    </thead>
                                    <tbody>


                                    @foreach($users as $user)
                                        <tr>
                                            <td><strong>{{$user['id']}}</strong></td>
                                            <td>{{$user['name']}}</td>
                                            <td>{{$user['email']}}</td>

                                            @if($user->hasVerifiedEmail())
                                                <td><span class="badge light badge-success">Accepted</span></td>

                                                @else
                                                <td><span class="badge light badge-danger">Pending</span></td>

                                            @endif
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                                        <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>



                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card-footer">{{$users->render()}}</div>
                    </div>






                </div>
            </div>
        </div>
    </div>

    @endcomponent
