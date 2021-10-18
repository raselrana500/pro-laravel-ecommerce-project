@extends('admin.layouts.master')

@section('admin_content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">

      <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Order Details</h6>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            Order Details
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
                        <div class="card-header">
                            Shipping Address
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


            <div class="row">
                <div class="card pd-20 pd-sm-40 col-lg-12">
                    <h6 class="card-body-title">Product Details
                       
                    </h6>
                      
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

            @if ($order->status == 0)
                <a href="{{ url('admin/payment/accept/'.$order->id) }}" class="btn btn-info">Payment Accept</a>
                <a href="{{ url('admin/payment/cancel/'.$order->id) }}" class="btn btn-danger">Order Cancel</a>
            @elseif($order->status == 1)
                <a href="{{ url('admin/delivery/process/'.$order->id) }}" class="btn btn-primary">Send To Process</a>
            @elseif($order->status == 2)
                <a href="{{ url('admin/delivery/done/'.$order->id) }}" class="btn btn-primary">Process Done</a>
            @elseif($order->status == 4)
                <strong class="text-danger text-center"> This Order not valid !!<br>cancel by Admin !!</strong>
            <a href="{{ url('admin/payment/accept/'.$order->id) }}" class="btn btn-info">Payment Accept</a>
            @else
                <strong class="text-success text-center">This product has successfully delivered !!</strong>
            @endif
            

        </div>
      </div>
</div>
    
@endsection