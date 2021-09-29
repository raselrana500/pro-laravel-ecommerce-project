@extends('admin.layouts.master')

@section('admin_content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Coupon Table</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Coupon List
              <a href="" class="btn btn-sm btn-success" style="float:right;" data-toggle="modal" data-target="#modaldemo3">Add New Coupon</a>
          </h6>
            

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
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Id</th>
                  <th class="wd-15p">Coupon Code</th>
                  <th class="wd-15p">Discount (%)<</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($coupons as $key=>$row)
                  <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{ $row->coupon }}</td>
                  <td>{{ $row->discount }}%</td>
                  <td>
                      <a href="{{ $row->id }}" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modaledit{{ $row->id }}">Edit</a>
                      <a href="{{ URL::to('delete/coupon/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->


<!-- LARGE MODAL -->
<div id="modaldemo3" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add Coupon</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form method="post" action="{{ route('store.coupon') }}"> 
            @csrf
        <div class="modal-body pd-20">       
            <div class="form-group">
                <label for="exampleInputEmail1">Coupon Code</label>
                <input type="text" class="form-control" name="coupon" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Coupon Name">                
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Discoun (%)</label>
                <input type="text" class="form-control" name="discount" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Discount">                
            </div>
            
            </div><!-- modal-body -->
            <div class="modal-footer">
            <input type="submit" class="btn btn-info pd-x-20" value="Submit">
            <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
        </form>
        </div>
    </div>
    </div><!-- modal-dialog -->
</div><!-- modal -->

@foreach($coupons as $row)
<!-- Edit MODAL -->
<div id="modaledit{{ $row->id }}" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Edit Coupon</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form method="post" action="{{ route('update.coupon',$row->id) }}"> 
            @csrf
            <div class="modal-body pd-20">       
            <div class="form-group">
                <label for="exampleInputEmail1">Coupon Code</label>
                <input type="text" class="form-control" name="coupon" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $row->coupon}}">                
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Discount (%)<</label>
                <input type="text" class="form-control" name="discount" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $row->discount}}">                
            </div>
            
            </div><!-- modal-body -->
            <div class="modal-footer">
            <input type="submit" class="btn btn-info pd-x-20" value="Submit">
            <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
        </form>
        </div>
    </div>
    </div><!-- modal-dialog -->
</div><!-- modal -->
@endforeach


@endsection