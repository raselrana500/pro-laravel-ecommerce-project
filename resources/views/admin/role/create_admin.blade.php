@extends('admin.layouts.master')
@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Create New Admin
                    <a href="{{ route('admin.all.user') }}" class="btn btn-success btn-sm pull-right">All Admin</a>
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
                <form method="post" action="{{ route('store.admin.info') }}">
                    @csrf
                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">User Name: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="name" placeholder="Enter user Name"
                                        required>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Phone Number: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="phone" placeholder="Enter phone number"
                                        required>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="email" name="email"
                                        placeholder="Enter Email Address" required>
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Password: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="password" name="password"
                                        placeholder="Enter Password" required>
                                </div>
                            </div><!-- col-4 -->
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-2">
                                <label class="ckbox">
                                    <input type="checkbox" name="category" value="1">
                                    <span>Category</span>
                                </label>
                            </div><!-- col-2 -->
                            <div class="col-lg-2">
                                <label class="ckbox">
                                    <input type="checkbox" name="coupon" value="1">
                                    <span>Coupon</span>
                                </label>
                            </div><!-- col-2 -->
                            <div class="col-lg-2">
                                <label class="ckbox">
                                    <input type="checkbox" name="product" value="1">
                                    <span>Product</span>
                                </label>
                            </div><!-- col-2 -->
                            <div class="col-lg-2">
                                <label class="ckbox">
                                    <input type="checkbox" name="blog" value="1">
                                    <span>Blog</span>
                                </label>
                            </div><!-- col-2 -->
                            <div class="col-lg-2">
                                <label class="ckbox">
                                    <input type="checkbox" name="order" value="1">
                                    <span>Order</span>
                                </label>
                            </div><!-- col-2 -->
                            <div class="col-lg-2">
                                <label class="ckbox">
                                    <input type="checkbox" name="other" value="1">
                                    <span>Other</span>
                                </label>
                            </div><!-- col-2 -->
                            <div class="col-lg-2">
                                <label class="ckbox">
                                    <input type="checkbox" name="report" value="1">
                                    <span>Report</span>
                                </label>
                            </div><!-- col-2 -->
                            <div class="col-lg-2">
                                <label class="ckbox">
                                    <input type="checkbox" name="role" value="1">
                                    <span>Role</span>
                                </label>
                            </div><!-- col-2 -->
                            <div class="col-lg-2">
                                <label class="ckbox">
                                    <input type="checkbox" name="return" value="1">
                                    <span>Return</span>
                                </label>
                            </div><!-- col-2 -->
                            <div class="col-lg-2">
                                <label class="ckbox">
                                    <input type="checkbox" name="comment" value="1">
                                    <span>Comment</span>
                                </label>
                            </div><!-- col-2 -->
                            <div class="col-lg-2">
                                <label class="ckbox">
                                    <input type="checkbox" name="setting" value="1">
                                    <span>Setting</span>
                                </label>
                            </div><!-- col-4 -->
                        </div><!-- row -->
                        
                        <hr><br>


                        <div class="form-layout-footer">
                            <button class="btn btn-info mg-r-5" type="submit">Submit</button>
                            <!-- <input type="submit" name="submit"value="submit"class="btn btn-success"> -->
                        </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->
                </form>
            </div><!-- card -->

        </div><!-- sl-mainpanel -->
        <!-- ########## END: MAIN PANEL ########## -->

    @endsection
