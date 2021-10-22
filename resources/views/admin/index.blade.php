@extends('admin.layouts.master')

@section('admin_content')

@php
    $date = date('d-m-y');
    $todaySale = DB::table('orders')->where('date',$date)->sum('total');

    $month = date('F');
    $thisMonthSale = DB::table('orders')->where('month',$month)->sum('total');

    $year = date('Y');
    $thisYearSale = DB::table('orders')->where('year',$year)->sum('total');


    $todayDelivered = DB::table('orders')->where('delivery_date',$date)->where('status',3)->sum('total');

@endphp
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Admin</a>
        <span class="breadcrumb-item active">Dashboard</span>
      </nav>

      <div class="sl-pagebody">

        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="card pd-20 bg-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Today's Orders</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">${{ $todaySale }}</h3>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="card pd-20 bg-info">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Month</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">${{ $thisMonthSale }}</h3>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-purple">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Year's Sales</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">${{ $thisYearSale }}</h3>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-sl-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Today Delivered</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">${{ $todayDelivered }}</h3>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col-3 -->
        </div><!-- row -->


<br><hr><br>
@php
    // $date = date('d-m-y');
    // $todaySale = DB::table('orders')->where('date',$date)->sum('total');

    // $month = date('F');
    // $thisMonthSale = DB::table('orders')->where('month',$month)->sum('total');

    // $year = date('Y');
    // $thisYearSale = DB::table('orders')->where('year',$year)->sum('total');


    $totalReturn = DB::table('orders')->where('return_order',2)->sum('total');
    $product = DB::table('products')->get();
    $brand = DB::table('brands')->get();
    $user = DB::table('users')->get();

@endphp

<div class="row row-sm">
  <div class="col-sm-6 col-xl-3">
    <div class="card pd-20 bg-danger">
      <div class="d-flex justify-content-between align-items-center mg-b-10">
        <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total Return</h6>
        <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
      </div><!-- card-header -->
      <div class="d-flex align-items-center justify-content-between">
        <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
        <h3 class="mg-b-0 tx-white tx-lato tx-bold">${{ $totalReturn }}</h3>
      </div><!-- card-body -->
    </div><!-- card -->
  </div><!-- col-3 -->
  <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
    <div class="card pd-20 bg-warning">
      <div class="d-flex justify-content-between align-items-center mg-b-10">
        <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total Products</h6>
        <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
      </div><!-- card-header -->
      <div class="d-flex align-items-center justify-content-between">
        <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
        <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ count($product) }}</h3>
      </div><!-- card-body -->
    </div><!-- card -->
  </div><!-- col-3 -->
  <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
    <div class="card pd-20 bg-primary">
      <div class="d-flex justify-content-between align-items-center mg-b-10">
        <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total Brand</h6>
        <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
      </div><!-- card-header -->
      <div class="d-flex align-items-center justify-content-between">
        <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
        <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ count($brand) }}</h3>
      </div><!-- card-body -->
    </div><!-- card -->
  </div><!-- col-3 -->
  <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
    <div class="card pd-20 bg-sl-primary">
      <div class="d-flex justify-content-between align-items-center mg-b-10">
        <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total User</h6>
        <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
      </div><!-- card-header -->
      <div class="d-flex align-items-center justify-content-between">
        <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
        <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ count($user) }}</h3>
      </div><!-- card-body -->
    </div><!-- card -->
  </div><!-- col-3 -->
</div><!-- row -->
        
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
