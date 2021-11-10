@extends('admin.layouts.master')
@section('admin_content')
<!-- ########## START: MAIN PANEL ########## -->
<?php

$category = DB::table('categories')->get();
$sub_category = DB::table('sub_categories')->get();
$brand = DB::table('brands')->get();


?>
<div class="sl-mainpanel">
  <div class="sl-pagebody">
    <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Add New Product
          <a href="{{ route('all.products') }}" class="btn btn-success btn-sm pull-right">All Products</a>
          </h6>
        <form method="post" action="{{ route('update.product.withoutImage',$product->id) }}"> 
            @csrf
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-8">
                <div class="form-group">
                  <label class="form-control-label">Product Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="product_name" value="{{ $product->product_name }}">
                </div>
              </div><!-- col-4 -->
              {{-- <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Code: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="product_code" value="{{ $product->product_code }}">
                </div>
              </div><!-- col-4 --> --}}
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Quantity: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="product_quantity" value="{{ $product->product_quantity }}">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" data-placeholder="Choose country" name="catId">
                    <option label="Choose Category"></option>
                    @foreach($category as $row)
                      <option value="{{ $row->id }}"
                      <?php
                        if($row->id == $product->category_id){
                          echo "selected";
                        }
                      ?>
                      
                      >{{ $row->category_name}}</option>
                    @endforeach
                  </select>
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Sub-Category: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" data-placeholder="Choose country" name="subcategory_id">
                  <option label="Choose Sub-category"></option>
                  @foreach($sub_category as $row)
                      <option value="{{ $row->id }}"
                      <?php
                        if($row->id == $product->subcategory_id){
                          echo "selected";
                        }
                      ?>
                      
                      >{{ $row->subcategory_name}}</option>
                    @endforeach
                  </select>
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Brand: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" data-placeholder="Choose country" name="brand_id">
                    <option label="Choose Brand"></option>
                    @foreach($brand as $row)
                      <option value="{{ $row->id }}"
                      <?php
                        if($row->id == $product->brand_id){
                          echo "selected";
                        }
                      ?>
                      
                      >{{ $row->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div><!-- col-4 -->

              
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Product Size: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="product_size" value="{{ $product->product_size }}" id="size" data-role="tagsinput">
                </div>
              </div><!-- col-4 -->

              
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Product Color: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="product_color" value="{{ $product->product_color }}" id="color" data-role="tagsinput">
                </div>
              </div><!-- col-4 -->

              
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Selling price: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="selling_price" value="{{ $product->selling_price }}">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Discount price:</label>
                  <input class="form-control" type="text" name="discount_price" value="{{ $product->discount_price }}">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Product Details: <span class="tx-danger">*</span></label>
                  <textarea class="form-control" name="product_details" id="summernote">{{ $product->product_details }}</textarea>
                </div>
              </div><!-- col-4 -->
                
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Video Link:</label>
                  <input class="form-control" type="url" name="video_link" value="{{ $product->video_link }}">
                </div>
              </div><!-- col-4 -->
            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="main_slider" value="1"
                    <?php
                      if($product->main_slider== 1){
                        echo "checked";
                      }
                    ?>
                    
                    >
                    <span>Main Slider</span>
                </label>
            </div><!-- col-4 -->
            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="hot_deal" value="1"
                    <?php
                      if($product->hot_deal== 1){
                        echo "checked";
                      }
                    ?>
                    
                    >
                    
                    <span>Hot Deal</span>
                </label>
            </div><!-- col-4 -->
            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="best_rated" value="1"
                    <?php
                      if($product->best_rated== 1){
                        echo "checked";
                      }
                    ?>
                    
                    >
                    
                    <span>Best Rated</span>
                </label>
            </div><!-- col-4 -->
            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="trend" value="1"
                    <?php
                      if($product->trend== 1){
                        echo "checked";
                      }
                    ?>
                    
                    >
                    
                    <span>Trend Product</span>
                </label>
            </div><!-- col-4 -->
            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="mid_slider" value="1"
                    <?php
                      if($product->main_slider== 1){
                        echo "checked";
                      }
                    ?>
                    
                    >
                    
                    <span>Mid Slider</span>
                </label>
            </div><!-- col-4 -->
            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="hot_new" value="1"
                    <?php
                      if($product->hot_new== 1){
                        echo "checked";
                      }
                    ?>
                    
                    >
                    
                    <span>Hot New</span>
                </label>
            </div><!-- col-4 -->
            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="buyone_getone" value="1"
                    <?php
                      if($product->buyone_getone == 1){
                        echo "checked";
                      }
                    ?>
                    
                    >
                    
                    <span>BuyOne GetOne</span>
                </label>
            </div><!-- col-4 -->
            </div><!-- row -->
            

            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5">Update product</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </div><!-- card -->
      </from>
      </div>
      <!-- row -->
      <br><br><br>    


  
    </div>
    <!-- ########## END: MAIN PANEL ########## -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
    <!-- load Sub category -->
    <script type="text/javascript">
      $(document).ready(function(){
     $('select[name="catId"]').on('change',function(){
          var catId = $(this).val();
          if (catId) {
            
            $.ajax({
              url: "{{ url('/get/subcategory/') }}/"+catId,
              type:"GET",
              dataType:"json",
              success:function(data) { 
              var d =$('select[name="subcategory_id"]').empty();
              $.each(data, function(key, value){
              
              $('select[name="subcategory_id"]').append('<option value="'+ value.id + '">' + value.subcategory_name + '</option>');

              });
              },
            });

          }else{
            alert('danger');
          }

            });
      });
 </script>
 <!-- load image -->
 <script type="text/javascript">
  function readURL(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#one')
        .attr('src', e.target.result)
        .width(80)
        .height(80);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>
<!-- two image -->
 <script type="text/javascript">
  function readURL2(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#two')
        .attr('src', e.target.result)
        .width(80)
        .height(80);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>
<!-- Three image -->
 <script type="text/javascript">
  function readURL3(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#three')
        .attr('src', e.target.result)
        .width(80)
        .height(80);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>
@endsection
