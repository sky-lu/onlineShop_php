@extends('layout')
@section('content')
<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>MyAccount</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active">MyAccount</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Cart  -->
<div class="cart-box-main">
    <div class="container">
        <div class="row new-account-login">
            <div class="col-sm-6 col-lg-6 mb-3">
                <div class="title-left">
                    <h3>Account Login</h3>
                </div>
                <!-- <h5><a data-toggle="collapse" href="#formLogin" role="button" aria-expanded="false">Click here to Login</a></h5> -->
                <form class="mt-3 review-form-box" id="formLogin" action="/myaccount/login" method="post">
                    @CSRF
                    @if ($errors->login->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->login->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="InputEmail" class="mb-0">Email Address</label>
                            <input type="email" class="form-control" id="InputEmail" name="email" placeholder="Enter Email"> </div>
                        <div class="form-group col-md-6">
                            <label for="InputPassword" class="mb-0">Password</label>
                            <input type="password" class="form-control" id="InputPassword" name="password" placeholder="Password"> </div>
                    </div>
                    <button type="submit" class="btn hvr-hover">Login</button>
                </form>
            </div>
            <div class="col-sm-6 col-lg-6 mb-3">
                <div class="title-left">
                    <h3>Create New Account</h3>
                </div>
                <!-- <h5><a data-toggle="collapse" href="#formRegister" role="button" aria-expanded="false">Click here to Register</a></h5> -->
                <form class="mt-3 review-form-box" id="formRegister" method="post" action="/myaccount/signup">
                    @CSRF
                    @if ($errors->signup->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->signup->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="InputName" class="mb-0">First Name</label>
                            <input type="text" class="form-control" id="InputName" name="fname" placeholder="First Name"> </div>
                        <div class="form-group col-md-6">
                            <label for="InputLastname" class="mb-0">Last Name</label>
                            <input type="text" class="form-control" id="InputLastname" name="lname" placeholder="Last Name"> </div>
                        <div class="form-group col-md-6">
                            <label for="InputEmail1" class="mb-0">Email Address</label>
                            <input type="email" class="form-control" id="InputEmail1" name="email" placeholder="Enter Email"> </div>
                        <div class="form-group col-md-6">
                            <label for="InputPassword1" class="mb-0">Password</label>
                            <input type="password" class="form-control" id="InputPassword1" name="password" placeholder="Password"> </div>
                        <div class="form-group col-md-6">
                            <label for="InputPassword2" class="mb-0">Confirm Password</label>
                            <input type="password" class="form-control" id="InputPassword2" name="password_confirmation" placeholder="Confirm Password"> </div>
                    </div>
                    <button type="submit" class="btn hvr-hover">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop