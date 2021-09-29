@extends('admin.layouts.master')
@section('admin_content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  <div class="sl-pagebody">
    <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Add New post
          <a href="{{ route('blog.all.post') }}" class="btn btn-success btn-sm pull-right">All post</a>
          </h6>
        <form method="post" action="{{ route('store.blog.post') }}" enctype="multipart/form-data"> 
            @csrf
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Post title in English: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="post_title_en" placeholder="Enter post title in English">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">বাংলায় পোস্টের টাইটেল লিখুন : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="post_title_bn" placeholder="টাইটেল বাংলায় লিখুন">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Post Category: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" data-placeholder="Choose country" name="category_id">
                    <option label="Choose Category"></option>
                    @foreach($postcat as $row)
                    <option value="{{ $row->id }}">{{ $row->post_categoryName_en }}</option>
                    @endforeach
                  </select>
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Post Details in English: <span class="tx-danger">*</span></label>
                  <textarea class="form-control" name="post_details_en" id="summernote"></textarea>
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Post Details in Bangla: <span class="tx-danger">*</span></label>
                  <textarea class="form-control" name="post_details_bn" id="summernote1"></textarea>
                </div>
              </div><!-- col-4 -->
                

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Post Image: <span class="tx-danger">*</span></label><br>
                  <label class="custom-file">
                    <input type="file" id="file" class="custom-file-input" name="post_image" onchange="readURL(this);">
                    <span class="custom-file-control"></span>
                    <img src="#" id="one"alt=""><br>
                    </label>
                </div>
              </div><!-- col-4 -->
            </div><!-- row -->
            
            

            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5" type="submit">Submit</button>
              <!-- <input type="submit" name="submit"value="submit"class="btn btn-success"> -->
              <a href="{{ route('blog.all.post') }}" class="btn btn-info">Back</a>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
          </from>
        </div><!-- card -->
        
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->



 <!-- load image -->
 <script type="text/javascript">
  function readURL(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#one')
        .attr('src', e.target.result)
        .width(120)
        .height(80);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>
@endsection
