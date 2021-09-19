<?php
/**
 * Created by PhpStorm.
 * User: Arash
 * Date: 9/7/2021
 * Time: 11:34 AM
 */


?>

<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('admin')}}">Dashboard</a></li>

                </ul>
            </li>



            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-user-1"></i>
                    <span class="nav-text">Users</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('users.index')}}">Users</a></li>
                    <li><a href="{{route('users.create')}}">Add User</a></li>

                </ul>
            </li>



            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-box"></i>
                    <span class="nav-text">Products</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('products.index')}}">Products</a></li>
                    <li><a href="{{route('products.create')}}">Add Product</a></li>

                </ul>
            </li>



            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-price-tag"></i>
                    <span class="nav-text">Orders</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('orders.index')}}/?type=paid">Paid</a></li>
                    <li><a href="{{route('orders.index')}}/?type=unpaid">Unpaid</a></li>
                    <li><a href="{{route('orders.index')}}/?type=cancel">cancel</a></li>


                </ul>
            </li>







        </ul>

        <div class="copyright">
            <p><strong>Eclan Dashboard</strong><br/>© All Rights Reserved</p>
            <p>By DexignZone</p>
        </div>
    </div>
</div>
