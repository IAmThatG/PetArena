<?php
    /**
     * Created by PhpStorm.
     * User: GABRIEL
     * Date: 2/9/2018
     * Time: 11:29 AM
     */
?>
@extends('shared.layout')

@section('content')
    <div class="container">
        <div class="row" id="login-form">
            <div class="col-md-4 align-self-start"></div>

            <div class="col-md-4">
                <div class="card shadow-1">
                    <h4 class="card-title text-center" style="margin-top: 10px;">Login</h4>
                    <hr>
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="{{url('/login')}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><span class="fa fa-envelope"></span></div>
                                    </div>
                                    <input type="email" name="email" id="loginEmail" aria-describedby="emailHelp" class="form-control" placeholder="Email">
                                </div>
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                    anyone else.
                                </small>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><span class="fa fa-lock"></span></div>
                                    </div>
                                    <input type="password" name="password" id="loginPassword" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <div class="custom-control custom-checkbox" style="margin-top: 5px;">
                                <input type="checkbox" class="custom-control-input" id="rememberCheck" name="remember">
                                <label class="custom-control-label" for="rememberCheck">Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-primary" style="margin-top: 10px">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-4 align-self-end"></div>
        </div>
    </div>
@endsection
