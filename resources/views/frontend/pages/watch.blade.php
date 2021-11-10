@php
$category = DB::table('categories')->skip(3)->first();
$catId = $category->id;

$product = DB::table('products')->where('category_id',$catId)->where('status',1)->orderBy('id','desc')->get();

@endphp
<div class="new_arrivals">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="tabbed_container">
					<div class="tabs clearfix tabs-right">
						<div class="new_arrivals_title">{{ $category->category_name }}</div>
						<ul class="clearfix">
							<li class="active"></li>
						</ul>
						<div class="tabs_line"><span></span></div>
					</div>
					<div class="row">
						<div class="col-lg-12" style="z-index:1;">

							<!-- Product Panel -->
							<div class="product_panel panel active">
								<div class="arrivals_slider slider">

									@foreach($product as $row)
									<!-- Slider Item -->
									<div class="featured_slider_item">
									<div class="border_active"></div>
									<div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
										<div class="product_image d-flex flex-column align-items-center justify-content-center">
											<a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}">
												<img src="{{ URL::to($row->image_one) }}" style="width:80px;" alt="">
											</a>
										</div>
										<div class="product_content">
											@if($row->discount_price == NULL)
											<div class="product_price discount">${{ $row->selling_price }}</div>
											@else
											<div class="product_price discount">${{ $row->discount_price }}<span><del>${{ $row->selling_price }}</del></span></div>

											@endif

											<div class="product_name">
												<div><a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}">{{ $row->product_name }}</a></div>
											</div>
											<div class="product_extras">

												<button id="{{ $row->id }}"data-toggle="modal" data-target="#cartmodal" onclick="productview(this.id)"class="product_cart_button" data-id="{{ $row->id }}">Add to Cart</button>
											
											</div>
										</div>
										<button class="addwishlist" data-id="{{ $row->id }}">
											<div class="product_fav"><i class="fas fa-heart"></i></div>
										</button>
										<ul class="product_marks">
											@if( $row->discount_price == NULL )
											<li class="product_mark product_discount">New</li>
											@else
											<li class="product_mark product_discount" style="background:green;">

												@php
												$amount = $row->selling_price - $row->discount_price;
												$discount = $amount/$row->selling_price*100;
												@endphp

												{{ intval($discount) }}%

											</li>
											@endif

										</ul>
									</div>
								</div>
									@endforeach


								</div>
								<div class="arrivals_slider_dots_cover"></div>
							</div>

					

						</div>

					</div>

				</div>
			</div>
		</div>
	</div>
</div>