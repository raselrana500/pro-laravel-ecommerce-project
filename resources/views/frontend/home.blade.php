@extends('frontend.layouts.app')
@section('content')

@php
    $order = DB::table('orders')->where('user_id',Auth::id())->orderBy('id','DESC')->limit(10)->get();
@endphp
<div class="contact_form">
    <div class="container">
        <div class="row">
            <div class="col-md-8 card">
                <table class="table tbl-responsive">
                    <thead>
                        <tr>
                            <th>Payment Type</th>
                            <th>Status Code</th>
                            <th>Amount</th>
                            <th>Data</th>
                            <th>Status Code</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order as $row)
                            <tr>
                                <td>{{ $row->payment_type }}</td>
                                <td>{{ $row->status_code}}</td>
                                <td>{{ $row->total }} $ </td>
                                <td>{{ $row->date}}</td>
                                <td>{{ $row->status_code }}</td>
                                <td>
                                    @if ($row->status == 0)
                                    <span class="badge badge-warning">Pending</span>
                                    @elseif($row->status == 1)
                                        <span class="badge badge-info">Payment Accept</span>
                                    @elseif($row->status == 2)
                                        <span class="badge badge-primary">Process</span>
                                    @elseif($row->status == 3)
                                        <span class="badge badge-success">Deliverd</span>
                                    @else
                                        <span class="badge badge-danger">Cancel</span>
                                    @endif
                                  </td>
                                <td>
                                    <a href="{{ URL::to('user/profile/order/view/'.$row->id)  }}" class="btn btn-sm btn-info">View</a>
                                </td>

                            </tr>
                            
                        @endforeach
                        
                    </tbody>
                </table>

            </div>
            <div class="col-md-4">
                <div class="card p-4">
                    <img src="{{ asset('frontend/images/adv_2.png') }}" alt="image"
                    class="card-img-top" style="width:90px;margin-left:34%;">
                    <div class="card">
                        <h4 class="card-title text-center">{{ Auth::user()->name }}</h4>
                    </div>
                    <ul class="list-group list-goup-flush">
                        <li class="list-group-item"><a href="{{ route('password.change') }}">Change Password</a></li>
                        <li class="list-group-item">two</li>
                        <li class="list-group-item">three</li>
                    </ul>
                    <div class="card-body">
                        <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
