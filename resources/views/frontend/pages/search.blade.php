@extends('frontend.layouts.app')
@section('content')
@include('frontend.layouts.menubar')

<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/shop_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/shop_responsive.css') }}">
    	<!-- Home -->



	<!-- Shop -->

	<div class="shop">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">

					<!-- Shop Sidebar -->
					<div class="shop_sidebar">
						<div class="sidebar_section">
							<div class="sidebar_title">Category</div>
							<ul class="sidebar_categories">
                                @php
                                    $category = DB::table('categories')->get();
                                @endphp
                                @foreach ($category as $row)
								    <li><a href="{{ url('category/'.$row->id)}}">{{ $row->category_name }}</a></li>                                    
                                @endforeach
							</ul>
						</div>
						<div class="sidebar_section">
							<div class="sidebar_subtitle brands_subtitle">Brands</div>
							<ul class="brands_list">
                                
                                @php
                                    $brandName = DB::table('brands')->get();
                                @endphp
								@foreach ($brandName as $row)
								<li class="brand">
                                    <a href="{{ url('brand/'.$row->id)}}">{{ $row->name }}</a>
                                </li>                                    
                                @endforeach
							</ul>
						</div>
					</div>

				</div>

				<div class="col-lg-9">
					
					<!-- Shop Content -->

					<div class="shop_content">
						<div class="shop_bar clearfix">
							<div class="shop_product_count"><span>{{ count($product) }}</span> products found</div>
							<div class="shop_sorting">
								<span>Sort by:</span>
								<ul>
									<li>
										<span class="sorting_text">highest rated<i class="fas fa-chevron-down"></span></i>
										<ul>
											<li class="shop_sorting_button" data-isotope-option='{ "sortBy": "original-order" }'>highest rated</li>
											<li class="shop_sorting_button" data-isotope-option='{ "sortBy": "name" }'>name</li>
											<li class="shop_sorting_button"data-isotope-option='{ "sortBy": "price" }'>price</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>

						<div class="product_grid row">
							<div class="product_grid_border"></div>

                            @foreach ($product as $row)
                                <!-- Product Item -->
                                <div class="product_item is_new">
                                    <div class="product_border"></div>
                                    <div class="product_image d-flex flex-column align-items-center justify-content-center">
                                        <a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}">
                                        <img src="{{ asset($row->image_one) }}" style="width:100px;" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_price">
                                            @if($row->discount_price == NULL)
											<div class="product_price discount">${{ $row->selling_price }}</div>
											@else
											<div class="product_price discount">${{ $row->discount_price }}<span><del>${{ $row->selling_price }}</del></span></div>

											@endif
                                        </div>
                                        <div class="product_name"><div><a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}" tabindex="0">{{ $row->product_name }}</a></div></div>
										
                                    </div>
                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="product_marks">
                                        @if( $row->discount_price == NULL )
                                        <li class="product_mark product_new">New</li>
                                        @else
                                        <li class="product_mark product_new" style="background:rgb(66, 209, 102);">

                                            @php
                                            $amount = $row->selling_price - $row->discount_price;
                                            $discount = $amount/$row->selling_price*100;
                                            @endphp

                                            {{ intval($discount) }}%

                                        </li>
                                        @endif

                                    </ul>
                                </div>
                                
                            @endforeach

							

						</div>

						<!-- Shop Page Navigation -->

						<div class="shop_page_nav d-flex flex-row">
							
							{{ $product->links() }}
							
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>
@endsection