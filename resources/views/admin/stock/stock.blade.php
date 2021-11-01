@extends('admin.layouts.master')

@section('admin_content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Stock Product List Table</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Stock Product List
              
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
                  <th class="wd-15p">product Code</th>
                  <th class="wd-15p">product name</th>
                  <th class="wd-15p">Image</th>
                  <th class="wd-15p">Category</th>
                  <th class="wd-15p">Brand</th>
                  <th class="wd-15p">Quantity</th>
                  <th class="wd-15p">Status</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($product as $key=>$row)
                  <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{ $row->product_code }}</td>
                  <td>{{ $row->product_name }}</td>
                  <td><img src="{{ URL::to($row->image_one) }}" style="width:50px;" alt="">
                  <a href="{{ route('update.product.imageshow',$row->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                  </td>
                  <td>{{ $row->category_name }}</td>
                  <td>{{ $row->name }}</td>
                  <td><span class="badge badge-primary" style="font-size: 16px;">{{ $row->product_quantity }}</span></td>
                  <td>
                    @if( $row->status == 1 )
                    <span class="badge badge-success">Active</span>
                    @else
                    <span class="badge badge-danger">InActive</span>
                    @endif
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