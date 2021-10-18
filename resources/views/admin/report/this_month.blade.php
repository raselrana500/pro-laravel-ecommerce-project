@extends('admin.layouts.master')

@section('admin_content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>This Month Delivery Report</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h4 class="card-body-title text-center"><span class="badge badge-success"style="font-size: 20px;">{{ count($order) }}</span> Order Successfully Delivered in <span class="badge badge-success"style="font-size: 16px;">{{ $month }}</span> Month</h4>
            

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach                    
                </ul>
            </div>
        @endif
          <div class="table-wrapper">
            <table id="datatable1" class="table display tbl-responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">SL NO.</th>
                  <th class="wd-15p">Payment Type</th>
                  <th class="wd-15p">status Code</th>
                  <th class="wd-15p">Subtotal</th>
                  <th class="wd-15p">Shipping</th>
                  <th class="wd-15p">Total</th>
                  <th class="wd-15p">Order Date</th>
                  <th class="wd-15p">Delivery Date</th>
                  <th class="wd-15p">Status</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($order as $key=>$row)
                  <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{ $row->payment_type }}</td>
                  <td>{{ $row->status_code }}</td>
                  <td>{{ $row->subtotal }}</td>
                  <td>{{ $row->shipping }}</td>
                  <td>{{ $row->total }}</td>
                  <td>{{ $row->date }}</td>
                  <td>{{ $row->delivery_date }}</td>
                  <td>
                    @if ($row->status == 0)
                    <span class="badge badge-warning">New Order</span>
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
                      <a href="{{ URL::to('admin/order/view/'.$row->id)  }}" class="btn btn-sm btn-info">View</a>
                      
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->





@endsection