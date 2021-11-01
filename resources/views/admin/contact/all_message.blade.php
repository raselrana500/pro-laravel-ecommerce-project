@extends('admin.layouts.master')

@section('admin_content')
<!-- ########## START: MAIN PANEL ########## -->
@php
    $newMessage = DB::table('contacts')->where('status',0)->get();
@endphp
<div class="sl-mainpanel">

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Order Details</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Order List</h6>
          <h4 class="card-body-title text-center"><span class="badge badge-success"style="font-size: 20px;">{{ count($newMessage) }}</span> Unseen Message</h4>

          <div class="table-wrapper">
            <table id="datatable1" class="table display tbl-responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">SL NO.</th>
                  <th class="wd-15p">Name</th>
                  <th class="wd-15p">Phone</th>
                  <th class="wd-15p">Email</th>
                  <th class="wd-15p">Message</th>
                  <th class="wd-15p">Status</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($data as $key=>$row)
                  @if ($row->status == 0)
                  <tr style="font-weight: bold;">
                    <td>{{ $key+1 }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->phone }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ Str::limit($row->messege, 10) }}</td>
                    <td>
                      @if ($row->status == 0)
                      <span class="badge badge-danger">New Message</span>
                      @elseif($row->status == 1)
                          <span class="badge badge-success">Already Seen</span>
                      @endif
                    </td>
                    
                    <td>
                        <a href="{{ URL::to('admin/message/view/'.$row->id)  }}" class="btn btn-sm btn-info">View</a>
                        @if ($row->status == 0)
                        <a href="{{ URL::to('admin/message/seen/'.$row->id)  }}" class="btn btn-sm btn-primary">Seen</a>
                        @endif
                        @if ($row->status == 1)
                        <a href="{{ URL::to('admin/message/unseen/'.$row->id)  }}" class="btn btn-sm btn-warning">Unseen</a>
                        @endif
                        
                        
                    </td>
                  </tr>
                  @else
                  <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->phone }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ Str::limit($row->messege, 10) }}</td>
                    <td>
                      @if ($row->status == 0)
                      <span class="badge badge-danger">New Message</span>
                      @elseif($row->status == 1)
                          <span class="badge badge-success">Already Seen</span>
                      @endif
                    </td>
                    
                    <td>
                        <a href="{{ URL::to('admin/message/view/'.$row->id)  }}" class="btn btn-sm btn-info">View</a>
                        @if ($row->status == 0)
                        <a href="{{ URL::to('admin/message/seen/'.$row->id)  }}" class="btn btn-sm btn-primary">Seen</a>
                        @endif
                        @if ($row->status == 1)
                        <a href="{{ URL::to('admin/message/unseen/'.$row->id)  }}" class="btn btn-sm btn-warning">Unseen</a>
                        @endif
                        
                        
                    </td>
                  </tr>
                  @endif
                @endforeach
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->





@endsection