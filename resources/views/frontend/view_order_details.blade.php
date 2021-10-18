@extends('frontend.layouts.app')
@section('content')


<div class="contact_form">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-primary">
                        <h5>Order Details</h5>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Name: </th>
                                <td>{{ $order->name }}</td>
                            </tr>
                            <tr>
                                <th>Phone: </th>
                                <td>{{ $order->phone }}</td>
                            </tr>
                            <tr>
                                <th>Payment Type: </th>
                                <td>{{ $order->payment_type }}</td>
                            </tr>
                            <tr>
                                <th>Payment Id: </th>
                                <td>{{ $order->payment_id }}</td>
                            </tr>                            
                            <tr>
                                <th>Status Code: </th>
                                <td>{{ $order->status_code }}</td>
                            </tr>
                            <tr>
                                <th>Total: </th>
                                <td>{{ $order->total }} $</td>
                            </tr>
                            <tr>
                                <th>Month: </th>
                                <td>{{ $order->month }}</td>
                            </tr>
                            <tr>
                                <th>Date: </th>
                                <td>{{ $order->date }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-primary">
                        <h5>Shipping Address</h5>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Name: </th>
                                <td>{{ $shipping->ship_name }}</td>
                            </tr>
                            <tr>
                                <th>Phone: </th>
                                <td>{{ $shipping->ship_phone }}</td>
                            </tr>
                            <tr>
                                <th>Email: </th>
                                <td>{{ $shipping->ship_email }}</td>
                            </tr>
                            <tr>
                                <th>Address: </th>
                                <td>{{ $shipping->ship_address }}</td>
                            </tr>
                            <tr>
                                <th>City: </th>
                                <td>{{ $shipping->ship_city }}</td>
                            </tr>
                            <tr>
                                <th>Status: </th>
                                <td>
                                    @if ($order->status == 0)
                                        <span class="badge badge-warning">Pending</span>
                                    @elseif($order->status == 1)
                                        <span class="badge badge-info">Payment Accept</span>
                                    @elseif($order->status == 2)
                                        <span class="badge badge-primary">Process</span>
                                    @elseif($order->status == 3)
                                        <span class="badge badge-success">Deliverd</span>
                                    @else
                                        <span class="badge badge-danger">Cancel</span>
                                    @endif
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <div class="row mt-4">
            <div class="card pd-20 pd-sm-40 col-lg-12">                
                <h5 class="card-body-title text-primary">Your Product List</h5>                  
                <div class="table-wrapper">
                  <table  class="table display responsive nowrap">
                    <thead>
                      <tr>
                        <th class="wd-15p">Product Id</th>
                        <th class="wd-15p">product name</th>
                        <th class="wd-15p">Image</th>
                        <th class="wd-15p">Color</th>
                        <th class="wd-15p">Size</th>
                        <th class="wd-15p">Quantity</th>
                        <th class="wd-15p">Unit price</th>
                        <th class="wd-20p">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($details as $row)
                        <tr>
                        <td>{{ $row->product_code }}</td>
                        <td>{{ $row->product_name }}</td>
                        <td><img src="{{ URL::to($row->image_one) }}" style="width:50px;" alt="">
                        
                        </td>
                        <td>{{ $row->color }}</td>
                        <td>{{ $row->size }}</td>
                        <td>{{ $row->quantity }}</td>
                        <td>{{ $row->single_price }}</td>
                        <td>{{ $row->total_price }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div><!-- table-wrapper -->
              </div><!-- card -->
        </div>
    </div>
    <div class="text-center mt-4">
        <a href="{{ route('user.profile') }}" class="btn btn-primary">Back</a>
    </div>
</div>
@endsection
