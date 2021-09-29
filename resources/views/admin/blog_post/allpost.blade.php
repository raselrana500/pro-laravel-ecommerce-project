@extends('admin.layouts.master')

@section('admin_content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Post Table</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Post List
              <a href="{{ route('add.blog.post') }}" class="btn btn-sm btn-primary" style="float:right;">Add New Post</a>
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
            <table id="datatable1" class="table display responsive nowrap tbl-responsive">
              <thead>
                <tr>
                  <th class="wd-15p">Id</th>
                  <th class="wd-15p">Post Title En</th>
                  <th class="wd-15p">post_image</th>
                  <th class="wd-15p">Category</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($allpost as $key=>$row)
                  <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{ substr($row->post_title_en, 0,  20) }}</td>
                  <td><img src="{{ URL::to($row->post_image) }}" style="width:50px;"></td>
                  <td>{{ $row->post_categoryName_en }}</td>
                  <td>
                      <a href="{{ URL::to('edit/blogpost/'.$row->id) }}" class="btn btn-sm btn-info">Edit</a>
                      <a href="{{ URL::to('delete/blogpost/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
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