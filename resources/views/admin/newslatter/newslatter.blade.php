@extends('admin.layouts.master')

@section('admin_content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Subscriber Table</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Subscriber List
              <a href="" class="btn btn-sm btn-success" style="float:right;" data-toggle="modal" data-target="#modaldemo3">Delete Selected Item</a>
          </h6>

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Id</th>
                  <th class="wd-15p">Email</th>
                  <th class="wd-15p">Subscribe Time</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($subscriber as $key=>$row)
                  <tr>
                  <td><input type="checkbox"> {{ $key+1 }}</td>
                  <td>{{ $row->email }}</td>
                  <td>{{ \Carbon\Carbon::parse($row->created_at)->diffForHumans() }}</td>
                  <td>
                      <a href="{{ URL::to('delete/sub/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
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