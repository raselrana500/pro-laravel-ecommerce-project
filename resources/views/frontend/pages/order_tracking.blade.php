@extends('frontend.layouts.app')
@section('content')
    <div class="contact_form">
        <div class="container">
            <h4 class="text-center">Your order "status code" : <span class="text-primary">{{ $track->status_code }}</span></h4><br><br>
            <div class="row">
                <div class="col-md-6">
                    <div class="contact_form_title">
                        
                    </div>
                    <div class="progress">
                        @if ($track->status == 0)
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                        @elseif($track->status == 1)
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        @elseif($track->status == 2)
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        @elseif($track->status == 3)
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-success" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                        @else
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            
                        @endif
                    </div>
                    @if ($track->status == 0)
                            <h4 class="text-danger">Note: Your order are under Review</h4>
                        @elseif($track->status == 1)
                        <h4 class="text-primary">Note: Payment accept,Deliver to under process</h4>
                        @elseif($track->status == 2)
                        <h4 class="text-info">Note: Packing Done,Handover under process</h4>
                        @elseif($track->status == 3)                            
                        <h4 class="text-success">Note: Order Complete.</h4>
                        @else                                                        
                        <h4>Note: Your order cancel by admin.</h4>
                    @endif
                </div>
                <div class="col-md-6">
                    <div class="contact_form_title text-center">
                        <h4>Your order Details</h4>
                        <hr>
                    </div>
                    <ul class="list-group col-lg-12">
                        <li class="list-group-item"><strong>Payment type:</strong> {{ $track->payment_type }} </li>
                        <li class="list-group-item"><strong>Transection id:</strong> {{ $track->payment_id }} </li>
                        <li class="list-group-item"><strong>Balance id:</strong> {{ $track->balance_transection }} </li>
                        <li class="list-group-item"><strong>Subtotal:</strong> ${{ $track->subtotal }} </li>
                        <li class="list-group-item"><strong>Shipping:</strong> ${{ $track->shipping }} </li>
                        <li class="list-group-item"><strong>Vat:</strong> ${{ $track->vat }} </li>
                        <li class="list-group-item"><strong>Total:</strong> ${{ $track->total }} </li>
                        <li class="list-group-item"><strong>Month:</strong> {{ $track->month }} </li>
                        <li class="list-group-item"><strong>Date:</strong> {{ $track->date }} </li>
                        <li class="list-group-item"><strong>Year:</strong> {{ $track->year }} </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection