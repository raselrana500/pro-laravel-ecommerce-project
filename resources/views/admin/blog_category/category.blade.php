@extends('admin.layouts.master')

@section('admin_content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Category Table</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Category List
              <a href="" class="btn btn-sm btn-success" style="float:right;" data-toggle="modal" data-target="#modaldemo3">Add New Category</a>
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
                  <th class="wd-15p">Category name en</th>
                  <th class="wd-15p">Category name bn</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($catList as $key=>$row)
                  <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{ $row->post_categoryName_en }}</td>
                  <td>{{ $row->post_categoryName_bn }}</td>
                  <td>
                      <a href="{{ $row->id }}" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modaledit{{ $row->id }}">Edit</a>
                      <a href="{{ URL::to('delete/blogcategory/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
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
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add Category</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form method="post" action="{{ route('store.blog.category') }}"> 
            @csrf
        <div class="modal-body pd-20">       
            <div class="form-group">
                <label for="exampleInputEmail1">Category Name English</label>
                <input type="text" class="form-control" name="post_categoryName_en" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="english">
                
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Category Name Bangla</label>
                <input type="text" class="form-control" name="post_categoryName_bn" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="bangla">
                
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

<!-- update category -->
@foreach($catList as $row)
<!-- Edit MODAL -->
<div id="modaledit{{ $row->id }}" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Edit Category</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form method="post" action="{{ route('update.blog.category',$row->id) }}" enctype="multipart/form-data"> 
            @csrf
            <div class="modal-body pd-20">       
            <div class="form-group">
                <label for="exampleInputEmail1">Category Name English</label>
                <input type="text" class="form-control" name="post_categoryName_en" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $row->post_categoryName_en }}">
                
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Category Name Bangla</label>
                <input type="text" class="form-control" name="post_categoryName_bn" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $row->post_categoryName_bn }}">
                
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