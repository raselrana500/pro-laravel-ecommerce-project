@extends('admin.layouts.master')

@section('admin_content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Search Report</h5>
        </div><!-- sl-page-title -->
        <div class="row">
            <div class="col-md-4">
                
                <div class="card pd-20 pd-sm-40">
                    
                    <div class="table-wrapper">
                        <form action="{{ route('search.by.date') }}" method="post">
                            @csrf
                            <div class="modal-body pd-20">
                            <div class="form-group">
                                <label for="">Search by Date</label>
                                <input type="date" class="form-control" name="date" value="">
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-info pd-x-20">Search</button>
                            </div>
                        </form>
                    </div><!-- table-wrapper -->
                </div><!-- card -->
            </div>
            <div class="col-md-4">
                
                <div class="card pd-20 pd-sm-40">
                    
                    <div class="table-wrapper">
                        <form action="{{ route('search.by.month') }}" method="post">
                            @csrf
                            <div class="modal-body pd-20">
                            <div class="form-group">
                                <label for="">Search by Month</label>
                                <select name="month" class="form-control">
                                    <option>Select Month</option>
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-info pd-x-20">Search</button>
                            </div>
                        </form>
                    </div><!-- table-wrapper -->
                </div><!-- card -->
            </div>
            <div class="col-md-4">
                
                <div class="card pd-20 pd-sm-40">
                    
                    <div class="table-wrapper">
                        <form action="{{ route('search.by.year') }}" method="post">
                            @csrf
                            <div class="modal-body pd-20">
                            <div class="form-group">
                                <label for="">Search by Year</label>
                                <select name="year" class="form-control">
                                    <option>Select Year</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                </select>
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-info pd-x-20">Search</button>
                            </div>
                        </form>
                    </div><!-- table-wrapper -->
                </div><!-- card -->
            </div>

                   
        </div>
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->



@endsection