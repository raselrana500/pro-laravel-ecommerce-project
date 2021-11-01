@extends('admin.layouts.master')

@section('admin_content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Admin Table</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Admin List
              <a href="{{ route('create.admin') }}" class="btn btn-sm btn-success" style="float:right;">Add New Admin</a>
          </h6>
            

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Id</th>
                  <th class="wd-15p">name</th>
                  <th class="wd-15p">Access</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($userRole as $key=>$row)
                  <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{ $row->name }}</td>
                  <td>
                      @if ($row->category == 1)
                        <span class="badge badge-primary">Category</span>                          
                      @endif

                      @if ($row->coupon == 1)
                        <span class="badge badge-info">Coupon</span>                          
                      @endif
                      
                      @if ($row->product == 1)
                        <span class="badge badge-warning">Product</span>                          
                      @endif

                      @if ($row->blog == 1)
                        <span class="badge badge-success">Blog</span>                          
                      @endif

                      @if ($row->order == 1)
                        <span class="badge badge-secondary">Order</span>                          
                      @endif

                      @if ($row->other == 1)
                        <span class="badge badge-danger">Other</span>                          
                      @endif

                      @if ($row->report == 1)
                        <span class="badge badge-info">Report</span>                          
                      @endif

                      @if ($row->role == 1)
                        <span class="badge badge-warning">Role</span>                          
                      @endif

                      @if ($row->return == 1)
                        <span class="badge badge-success">Return</span>                          
                      @endif

                      @if ($row->contact == 1)
                        <span class="badge badge-primary">Contact</span>                          
                      @endif

                      @if ($row->comment == 1)
                        <span class="badge badge-danger">Comment</span>                          
                      @endif

                      @if ($row->setting == 1)
                        <span class="badge badge-info">Setting</span>                          
                      @endif

                      @if ($row->stock == 1)
                        <span class="badge badge-warning">Stock</span>                          
                      @endif

                  </td>
                  <td>
                     <a href="{{ URL::to('admin/edit/admin/'.$row->id) }}" class="btn btn-sm btn-primary">Edit</a> 
                     <a href="{{ URL::to('admin/delete/admin/'.$row->id) }}" id="delete" class="btn btn-sm btn-danger">Delete</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
    </div><!-- sl-mainpanel -->
</div>
    <!-- ########## END: MAIN PANEL ########## -->




@endsection