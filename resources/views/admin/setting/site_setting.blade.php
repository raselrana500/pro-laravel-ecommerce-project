@extends('admin.layouts.master')
@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Website Setting
                    
                </h6>
                <form method="post" action="{{ route('update.site.setting') }}">
                    @csrf
                    <input type="hidden" value="{{ $data->id }}" name="id">
                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Website Name: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="company_name" value="{{ $data->company_name }}"required>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Address: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="company_address" value="{{ $data->company_address }}"required>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Phone Number: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="phone_one" value="{{ $data->phone_one }}"required>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">2nd Phone Number: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="phone_two" value="{{ $data->phone_two }}"required>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="email" name="email" value="{{ $data->email }}"required>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Facebook: </label>
                                    <input class="form-control" type="text" name="facebook" value="{{ $data->facebook }}">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Youtube: </label>
                                    <input class="form-control" type="text" name="youtube" value="{{ $data->youtube }}">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Instagram: </label>
                                    <input class="form-control" type="text" name="instagram" value="{{ $data->instagram }}">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Twitter: </label>
                                    <input class="form-control" type="text" name="twitter" value="{{ $data->twitter }}">
                                </div>
                            </div><!-- col-4 -->

                        </div>
                        
                        
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
