@extends('frontend.layouts.app')
@section('content')
@include('frontend.layouts.menubar')

<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/product_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/product_responsive.css') }}">


<!-- Single Product -->

<div class="single_product">
		<div class="container">
			<div class="row">

				<!-- Images -->
				<div class="col-lg-2 order-lg-1 order-2">
					<ul class="image_list">
						<li data-image="{{ asset($product->image_one) }}"><img src="{{ asset($product->image_one) }}" alt=""></li>
						<li data-image="{{ asset($product->image_two) }}"><img src="{{ asset($product->image_two) }}" alt=""></li>
						<li data-image="{{ asset($product->image_three) }}"><img src="{{ asset($product->image_three) }}" alt=""></li>
					</ul>
				</div>

				<!-- Selected Image -->
				<div class="col-lg-5 order-lg-2 order-1">
					<div class="image_selected"><img src="{{ asset($product->image_one) }}" alt=""></div>
				</div>

				<!-- Description -->
				<div class="col-lg-5 order-3">
					<div class="product_description">
						<div class="product_category"><h4>{{ $product->category_name }} > {{ $product->subcategory_name }}</h4></div>
						<div class="product_name">{{ $product->product_name }}</div>
						<div class="rating_r rating_r_4 product_rating"><i></i><i></i><i></i><i></i><i></i></div>
						<div class="product_text"><p>{!! $product->product_details !!}</p></div>
						<div class="order_info d-flex flex-row">
							<form action="{{ url('cart/product/add/'.$product->id) }}" method="post">
							@csrf
								<div class="clearfix" style="z-index: 1000;">

								@if($product->product_color == NULL)
									
									@else

								<div class="row">
									<div class="col-md-4">
										<div class="form-group">

										<label for="exampleFormControlSelect1">Color</label>
										<select name="color" id="exampleFormControlSelect1" class="form-control">
											@foreach($product_color as $color)	
												<option value="{{ $color }}">{{ $color }}</option>
											@endforeach
										</select>

										</div>
									</div>
									@endif

									@if($product->product_size == NULL)

									@else
									<div class="col-md-4">
										<div class="form-group">
										<label for="exampleFormControlSelect1">Size</label>
										<select name="size" id="exampleFormControlSelect1" class="form-control input-lg">
										@foreach($product_size as $size)	
												<option value="{{ $size }}">{{ $size }}</option>
											@endforeach
										</select>
										</div>
									</div>
									@endif

									<div class="col-md-4">
										<div class="form-group">

										<label for="exampleFormControlSelect1">Quantity</label>
										<input type="number" class="form-control" value="1" pattern="[0-9]" name="qty">

										</div>
									</div>
								</div>
									

								</div>
								@if($product->discount_price == NULL)
									<div class="product_price discount">${{ $product->selling_price }}</div>
								@else
									<div class="product_price discount">${{ $product->discount_price }}<span><del>${{ $product->selling_price }}</del></span></div>

								@endif
								<div class="button_container">
									<button type="submit" class="button cart_button">Add to Cart</button>
									<div class="product_fav"><i class="fas fa-heart"></i></div>
								</div>
								
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Recently Viewed -->

	<div class="viewed">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="viewed_title_container">
						<h3 class="viewed_title">Product Details</h3>
						<div class="viewed_nav_container">
							<div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
							<div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
						</div>
					</div>
					<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Video Link</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Review</button>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">{!! $product->product_details !!}</div><br>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"><a href="{{ $product->video_link}}" target="_blank"> {{ $product->video_link}}</a></div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">Review</div>
</div>

				</div>				
			</div>
		</div>
	</div>

@endsection