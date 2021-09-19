<?php
/**
 * Created by PhpStorm.
 * User: Arash
 * Date: 9/7/2021
 * Time: 11:35 AM
 */

?>

@extends('admin.app')


@section('title')

    {{$title}}
    @endsection


@section('content')

    {{$slot}}

    @endsection
