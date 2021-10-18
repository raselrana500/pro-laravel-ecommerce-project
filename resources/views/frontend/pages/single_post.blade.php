@extends('frontend.layouts.app')
@section('content')
@include('frontend.layouts.menubar')

<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/blog_single_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/blog_single_responsive.css') }}">
	<!-- Single Blog Post -->
@foreach ($post as $row)
    

	<div class="single_post">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="single_post_title">
                        @if ( Session()->get('lang') == 'bangla')
                                {{ $row->post_title_bn }}
                        @else
                            {{ $row->post_title_en }}
                        @endif

                    </div>
                    <img class="img-fluid" src="{{ asset($row->post_image) }}" alt="post-image is here">
					<div class="single_post_text">
						<p>
                            @if ( Session()->get('lang') == 'bangla')
                                {!! $row->post_details_bn !!}
                        @else
                            {!! $row->post_details_en !!}
                        @endif
                        </p>

						
					</div>
				</div>
			</div>
		</div>
	</div>
@endforeach

@endsection