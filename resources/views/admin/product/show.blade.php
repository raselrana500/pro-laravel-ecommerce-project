@extends('admin.layouts.master')
@section('admin_content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  <div class="sl-pagebody">
    <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Add New Product
          <a href="{{ route('all.products') }}" class="btn btn-success btn-sm pull-right">All Products</a>
          </h6>
        <form>
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Name:</label><br/>
                  <strong>{{ $product->product_name }}</strong>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Code:</label><br/>
                  <strong>{{ $product->product_code }}</strong>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Quantity:</label><br>
                  <strong>{{ $product->product_quantity }}</strong>
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Category:</label><br>
                  <strong>{{ $product->category_name }}</strong>
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Sub-Category:</label><br>
                  <strong>{{ $product->subcategory_name }}</strong>
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Brand:</label><br>
                  <strong>{{ $product->name }}</strong>
                </div>
              </div><!-- col-4 -->

              
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Size: <span class="tx-danger">*</span></label><br>
                  <strong>{{ $product->product_size }}</strong>
                </div>
              </div><!-- col-4 -->

              
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Color: <span class="tx-danger">*</span></label><br>
                  <strong>{{ $product->product_color }}</strong>
                </div>
              </div><!-- col-4 -->

              
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Selling price: <span class="tx-danger">*</span></label><br>
                  <strong>{{ $product->selling_price }}</strong>
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Product Details: <span class="tx-danger">*</span></label><br>
                  <p>{!! $product->product_details !!}</p>
                </div>
              </div><!-- col-4 -->
                
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Video Link:</label><br>
                  <a href="{{ $product->video_link }}" target="_blank">{{ $product->video_link }}</a>
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Image One (Main Thumbnail): <span class="tx-danger">*</span></label><br>
                  <label class="custom-file">
                    <img src="{{ asset($product->image_one) }}" alt="" style="width:100px;"><br><br><br>
                    </label>
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Image Two</label><br>
                  <label class="custom-file">                    
                  <img src="{{ asset($product->image_two) }}" alt="" style="width:100px;"><br><br><br>
                    </label>
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Image Three</label><br>
                  <label class="custom-file">                    
                  <img src="{{ asset($product->image_three) }}" alt="" style="width:100px;"><br><br><br>
                    </label>
                </div>
              </div><!-- col-4 -->
            <div class="col-lg-4">
                <input type="checkbox" <?php
                  if($product->main_slider == 1){
                    echo "checked";
                  }
                ?> >
                <span>Main Slider</span>
            </div><!-- col-4 -->
            <div class="col-lg-4">
                <input type="checkbox" <?php
                  if($product->hot_deal == 1){
                    echo "checked";
                  }
                ?> >
                
                     <span>Hot Deal</span>
            </div><!-- col-4 -->
            <div class="col-lg-4">
                <input type="checkbox" <?php
                  if($product->best_rated == 1){
                    echo "checked";
                  }
                ?> >
                <span>Best Rated</span>
            </div><!-- col-4 -->
            <div class="col-lg-4">
                <input type="checkbox" <?php
                  if($product->trend == 1){
                    echo "checked";
                  }
                ?> >
                <span>Trend Product</span>
            </div><!-- col-4 -->
            <div class="col-lg-4">
                <input type="checkbox" <?php
                  if($product->mid_slider == 1){
                    echo "checked";
                  }
                ?> >
                <span>Mid Slider</span>
            </div><!-- col-4 -->
            <div class="col-lg-4">
                <input type="checkbox" <?php
                  if($product->hot_new == 1){
                    echo "checked";
                  }
                ?> >
                <span>Hot New</span>
            </div><!-- col-4 -->
            <div class="col-lg-4">
                <input type="checkbox" <?php
                  if($product->buyone_getone == 1){
                    echo "checked";
                  }
                ?> >
                <span>BuyOne getOne</span>
            </div><!-- col-4 -->
            </div><!-- row -->
              <a href="{{ route('all.products') }}" class="btn btn-sm btn-info pull-right">Back</a>
          </div><!-- form-layout -->
          </from>
        </div><!-- card -->
        
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
