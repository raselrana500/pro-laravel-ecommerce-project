@extends('admin.layouts.master')

@section('admin_content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">

      <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Message Details</h6>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Message Details
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <th>Name: </th>
                                    <td>{{ $data->name }}</td>
                                </tr>
                                <tr>
                                    <th>Phone: </th>
                                    <td>{{ $data->phone }}</td>
                                </tr>
                                <tr>
                                    <th>Email: </th>
                                    <td>{{ $data->email }}</td>
                                </tr>
                                <tr>
                                    <th>Message: </th>
                                    <td>{!! $data->messege !!}</td>
                                </tr>
                                
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>


            

            

        </div>
      </div>
</div>
    
@endsection