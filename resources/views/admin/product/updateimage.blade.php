@extends('admin.layouts.master')
@section('admin_content')
<!-- ########## START: MAIN PANEL ########## -->

<div class="sl-mainpanel">
<div class="sl-pagebody">
    <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Add New Product</h6>
          <form action="{{ route('update.product.image',$product->id) }}" method="post" enctype="multipart/form-data">
          @csrf
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Image One (Main Thumbnail): <span class="tx-danger">*</span></label><br>
                  <label class="custom-file">
                    <img src="{{ asset($product->image_one) }}" alt="" style="width:100px;"><br><br><br>
                    </label>
                    <label class="custom-file">
                    <input type="file" id="file" class="custom-file-input" name="image_one" onchange="readURL(this);"><br><br>
                    <span class="custom-file-control"></span>
                    <input type="hidden" name="old_one" value="{{ $product->image_one }}">
                    <img src="#" id="one"alt=""><br><br><br>
                    </label>
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Image Two</label><br>
                  <label class="custom-file">                    
                  <img src="{{ asset($product->image_two) }}" alt="" style="width:100px;"><br><br><br>
                    </label>
                    <label class="custom-file">
                    <input type="file" id="file" class="custom-file-input" name="image_two" onchange="readURL2(this);"><br><br>
                    <span class="custom-file-control"></span>
                    <input type="hidden" name="old_two" value="{{ $product->image_two }}">
                    <img src="#" id="two"alt=""><br><br><br>
                    </label>
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Image Three</label><br>
                  <label class="custom-file">                    
                  <img src="{{ asset($product->image_three) }}" alt="" style="width:100px;"><br><br><br>
                    </label>
                    <label class="custom-file">
                    <input type="file" id="file" class="custom-file-input" name="image_three" onchange="readURL3(this);"><br><br>
                    <span class="custom-file-control"></span>
                    <input type="hidden" name="old_three" value="{{ $product->image_three }}">
                    <img src="#" id="three"alt=""><br><br><br>
                    </label>
                </div>
              </div><!-- col-4 -->
              <button type="submit" class="btn btn-sm btn-primary">Update image</button>
            </form>
        </div>
      </div>
      
  
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