@extends('frontend.layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/contact_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/contact_responsive.css') }}">
<div class="contact_form">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 offset-lg-1" style="border:1px solid grey;padding:20px;border-radius:25px;">
                <div class="contact_form_container">
                    <div class="contact_form_title text-center">Sign In</div>

                    <form action="{{ route('login') }}" id="contact_form" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email or Phone</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email or phone">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="exampleInputPassword1" placeholder="Password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="contact_form_button">
                            <button type="submit" class="btn btn-info">Login</button><br><br>
                            <a href="{{ route('password.request') }}">I forgot my password</a><br><br>

                        </div>
                    </form>
                    <br><br>
                    <a href="{{ url('/auth/redirect/facebook') }}" class="btn btn-primary btn-block">Login with Facebook <i class="fab fa-facebook-square" style="font-size:20px;"></i></a>
                    <a href="{{ url('/auth/redirect/google') }}"  class="btn btn-danger btn-block">Login with Google <i class="fab fa-google" style="font-size:20px;"></i> </a>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1" style="border:1px solid grey;padding:20px;border-radius:25px;">
                <div class="contact_form_container">
                    <div class="contact_form_title text-center">Sing Up</div>

                    <form action="{{ route('register') }}" id="contact_form" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Full Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="Enter Your Full Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter phone number">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email ">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation" id="exampleInputPassword1" placeholder="Re-Type Password">
                        </div>
                        <div class="contact_form_button">
                            <button type="submit" class="btn btn-primary">Sign Up</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="panel"></div>
</div>
@endsection