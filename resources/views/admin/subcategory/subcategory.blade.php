@extends('admin.layouts.master')

@section('admin_content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">

  <div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>SubCategory Table</h5>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
      <h6 class="card-body-title">Sub-Category List
        <a href="" class="btn btn-sm btn-success" style="float:right;" data-toggle="modal" data-target="#modaldemo3">Add New Sub_category</a>
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
              <th class="wd-15p">Sub Category name</th>
              <th class="wd-15p">Category name</th>
              <th class="wd-20p">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($subcat as $key=>$row)
            <tr>
              <td>{{ $key+1 }}</td>
              <td>{{ $row->subcategory_name }}</td>
              <td>{{ $row->category_name }}</td>
              <td>
                <a href="{{ $row->id }}" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modaledit{{ $row->id }}">Edit</a>
                <a href="{{ URL::to('delete/subcategory/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div><!-- table-wrapper -->
    </div><!-- card -->
  </div><!-- sl-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->

  <!-- Add Sub Category -->
  <!-- LARGE MODAL -->
  <div id="modaldemo3" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add Sub Category</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="post" action="{{ route('store.subcategory') }}">
          @csrf
          <div class="modal-body pd-20">
            <div class="form-group">
              <label for="exampleInputEmail1">Sub Category Name</label>
              <input type="text" class="form-control" name="subcategory_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="sub Category name">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Category Name</label>
              <select name="catId" id="" class="form-control">

                @foreach($category as $row)
                <option value="{{ $row->id }}">{{ $row->category_name}}</option>
                @endforeach

              </select>
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

@foreach($subcat as $row)
<!-- Edit MODAL -->
<div id="modaledit{{ $row->id }}" class="modal fade">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content tx-size-sm">
      <div class="modal-header pd-x-20">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Edit Sub Category</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{ route('update.subcategory',$row->id) }}">
        @csrf
        <div class="modal-body pd-20">
          <div class="form-group">
            <label for="exampleInputEmail1">Sub Category Name</label>
            <input type="text" class="form-control" name="subcategory_name" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $row->subcategory_name}}">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Category Name</label>
            <select name="catId" id="" class="form-control">

              @foreach($category as $result)
              <option value="{{ $row->id }}" <?php if ($result->id == $row->catId) {
                                                echo "selected";
                                              }
                                              ?>>{{ $result->category_name }}</option>
              @endforeach

            </select>
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