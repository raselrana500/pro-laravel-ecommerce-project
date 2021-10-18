@extends('frontend.layouts.app')

@section('content')
@include('frontend.layouts.menubar')

<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/contact_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/contact_responsive.css') }}">
@php
    $setting = DB::table('settings')->first();
    $charge = $setting->shipping_charge;
    $vat = $setting->vat;
@endphp

<div class="contact_form">
    <div class="container">
        <h2 class="text-center mb-4">Payment</h2>
        <div class="row">
            <div class="col-lg-7" style="border:1px solid grey;padding:20px;border-radius:25px;">
                <div class="contact_form_container">
                    <div class="contact_form_title text-center">Cart products</div>
                    <div class="cart_items">
                        <ul class="cart_list">
                            @foreach($cart as $row)
                            <li class="cart_item clearfix">
                                <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                    <div class="cart_item_name cart_info_col">
                                        {{-- <div class="cart_item_title text-center"><b>Product Image</b></div> --}}
                                        <div class="cart_item_text text-center"><img src="{{ asset($row->options->image) }}" style="width: 70px;" alt=""></div>
                                    </div>
                                    <div class="cart_item_name cart_info_col">
                                        <div class="cart_item_title text-center"><b>Product Name</b></div>
                                        <div class="cart_item_text text-center">{{ $row->name }}</div>
                                    </div>

                                    @if($row->options->color == NULL)

                                    @else
                                    <div class="cart_item_color cart_info_col">
                                        <div class="cart_item_title text-center"><b>Color</b></div>
                                        <div class="cart_item_text text-center">{{ $row->options->color }}</div>
                                    </div>
                                    @endif

                                    @if($row->options->size == NULL)

                                    @else
                                    <div class="cart_item_color cart_info_col">
                                        <div class="cart_item_title text-center"><b>Size</b></div>
                                        <div class="cart_item_text text-center">{{ $row->options->size }}</div>
                                    </div>
                                    @endif


                                    <div class="cart_item_quantity cart_info_col">
                                        <div class="cart_item_title text-center"><b>Quantity</b></div>
                                        <div class="cart_item_text text-center">{{ $row->qty }}</div>
                                    </div>
                                    <div class="cart_item_price cart_info_col">
                                        <div class="cart_item_title text-center"><b>Price</b></div>
                                        <div class="cart_item_text text-center">${{ $row->price }}</div>
                                    </div>
                                    <div class="cart_item_total cart_info_col">
                                        <div class="cart_item_title text-center"><b>Total</b></div>
                                        <div class="cart_item_text text-center">${{ $row->price*$row->qty }}</div>
                                    </div>

                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>   


                    <ul class="list-group col-lg-8" style="float: right;">
                        @if (Session::has('coupon'))
                            <li class="list-group-item"><b>Subtotal : <span style="float: right;">${{ Session::get('coupon')['balance'] }}</span></li>
                            <li class="list-group-item">Coupon : ({{ Session::get('coupon')['name'] }})
                                <a href="{{ route('coupon.remove') }}" class="btn btn-sm btn-danger">X</a>
                                <span style="float: right;">${{ Session::get('coupon')['discount'] }}</span></li>
                        @else
                        <li class="list-group-item">Subtotal : <span style="float: right;">${{ Cart::subtotal() }}</span></li>
                        @endif
                        

                        <li class="list-group-item">Shiping Charge : <span style="float: right;">${{ $charge }}</span></li>
                        <li class="list-group-item">Vat : <span style="float: right;">${{ $vat }}</span></li>
                        @if (Session::has('coupon'))
                        <li class="list-group-item">Total : <span style="float: right;">${{ Session::get('coupon')['balance'] + $charge + $vat }}</span></li>
                        @else
                            
                        @endif
                        <li class="list-group-item">Total : <span style="float: right;">${{ Cart::subtotal() + $charge + $vat }}</span></li>
                    </ul>


                </div>
            </div>
            <div class="col-lg-5" style="border:1px solid grey;padding:20px;border-radius:25px;">
                <div class="contact_form_container">
                    <div class="contact_form_title text-center">Shipping Address</div>
                        
                    <form action="{{ route('payment.process') }}" id="contact_form" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1"><b>Full Name</b></label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Your Full Name">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1"><b>Phone</b></label>
                            <input type="text" class="form-control" name="phone" placeholder="Enter Your Phone Number">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1"><b>Email</b></label>
                            <input type="email" class="form-control" 
                                id="exampleInputEmail1" name="email" 
                                aria-describedby="emailHelp" placeholder="Enter Your Email Address">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1"><b>Address</b></label>
                            <input type="text" class="form-control"  name="address" placeholder="Enter Your Address">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1"><b>City</b></label>
                            <input type="text" class="form-control"  name="city" placeholder="Enter Your City">
                        </div>

                        <div class="contact_form_title text-center">Payment By</div>
                        <div class="form-group">
                            <ul class="logos_list">
                                <li>
                                    <input type="radio" name="payment" value="stripe">
                                    <img src="{{ asset('public/frontend/images/payment/mastercard.png') }}" style="width: 100px;" alt="">
                                </li>
                                <li>
                                    <input type="radio" name="payment" value="paypal">
                                    <img src="{{ asset('public/frontend/images/payment/paypal.png') }}" style="width: 100px;" alt="">
                                </li>
                                <li>
                                    <input type="radio" name="payment" value="ideal">
                                    <img src="{{ asset('public/frontend/images/payment/mollie.png') }}" style="width: 100px;" alt="">
                                </li>
                                <li>
                                    <input type="radio" name="payment" value="sslcommerz">
                                    <img src="{{ asset('public/frontend/images/payment/ssl.png') }}" style="width: 100px;" alt="">
                                </li>
                                <li>
                                    <input type="radio" name="payment" value="sslcommerz">
                                    <img src="{{ asset('public/frontend/images/payment/cod.png') }}" style="width: 100px;" alt="">
                                </li>
                            </ul>
                        </div>

                        <div class="contact_form_button text-center">
                            <button type="submit" class="btn btn-primary">Pay Now</button>
                        </div>
                    </form>
                    

                </div>
            </div>
        </div>
    </div>
    <div class="panel"></div>
</div>
@endsection