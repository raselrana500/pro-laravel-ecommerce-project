@extends('frontend.layouts.app')
@section('content')
@include('frontend.layouts.menubar')

<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/blog_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/blog_responsive.css') }}">
    <!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="blog_posts d-flex flex-row align-items-start justify-content-between">
						
						<!-- Blog post -->
                        @foreach ($post as $row)
                            
                        
						<div class="blog_post">
							<div class="blog_image" style="background-image:url({{ asset($row->post_image) }})"></div>
							<div class="blog_text">
                                @if ( Session()->get('lang') == 'bangla')
                                {{ $row->post_title_bn }}
                                @else
                                {{ $row->post_title_en }}
                                @endif
                                
                            
                            </div>
							<div class="blog_button"><a href="{{ url('blog/postdetails/'.$row->id) }}">
                                @if ( Session()->get('lang') == 'bangla')
                                	পড়া চালিয়ে যান
                                @else
                                	Continue Reading
                                @endif
                                
                            </a></div>
						</div>
                        @endforeach              
						
						
					</div>
				</div>
					
			</div>
		</div>
	</div>
@endsection