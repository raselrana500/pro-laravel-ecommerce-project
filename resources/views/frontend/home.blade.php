@extends('frontend.layouts.app')
@section('content')
<div class="contact_form">
    <div class="container">
        <div class="row">
            <div class="col-8 card">
                <table class="table tbl-responsive">
                    <thead>
                        <tr>
                            <th class="col">#</th>
                            <th class="col">First</th>
                            <th class="col">Last</th>
                            <th class="col">Body</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col">One</td>
                            <td class="col">two</td>
                            <td class="col">three</td>
                            <td class="col">four</td>
                        </tr>
                        <tr>
                            <td class="col">One</td>
                            <td class="col">two</td>
                            <td class="col">three</td>
                            <td class="col">four</td>
                        </tr>
                        <tr>
                            <td class="col">One</td>
                            <td class="col">two</td>
                            <td class="col">three</td>
                            <td class="col">four</td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="col-4">
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
