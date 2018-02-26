<?php
    /**
     * Created by PhpStorm.
     * User: GABRIEL
     * Date: 2/17/2018
     * Time: 1:08 PM
     */
?>

@extends('shared.layout')

@section('content')
    <h1>Hello User {{$user->email}}</h1>
@endsection
