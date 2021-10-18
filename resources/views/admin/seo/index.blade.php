@extends('admin.layouts.master')
@section('admin_content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  <div class="sl-pagebody">
    <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Seo setting
          </h6>
        <form method="post" action="{{ route('admn.seo.info.update') }}"> 
            @csrf
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Meta Title: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="meta_title" value="{{ $seo->meta_title }}">
                </div>
              </div>
              
              <!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Meta Author : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="meta_author"  value="{{ $seo->meta_author }}">
                </div>
              </div>
              
              <!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Meta Tag : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="meta_tag"  value="{{ $seo->meta_tag }}">
                </div>
              </div><!-- col-4 -->

              
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Meta Description: <span class="tx-danger">*</span></label>
                  <textarea class="form-control" name="meta_description" id="summernote">{{ $seo->meta_description }}</textarea>
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Google Analytics: <span class="tx-danger">*</span></label>
                  <textarea class="form-control" name="google_analytics" id="summernote1">{{ $seo->google_analytics }}</textarea>
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Bing Analytics: <span class="tx-danger">*</span></label>
                  <textarea class="form-control" name="bing_analytics" id="summernote">{{ $seo->bing_analytics }}</textarea>
                    <input type="hidden" name="id" value="{{ $seo->id }}">
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
