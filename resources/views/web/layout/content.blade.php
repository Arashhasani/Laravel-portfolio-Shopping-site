<?php
/**
 * Created by PhpStorm.
 * User: Arash
 * Date: 9/6/2021
 * Time: 12:44 PM
 */


?>

@extends('web.app')



@section('title')
    {{$title}}

    @endsection

@section('content')

    {{$slot}}
    @endsection


