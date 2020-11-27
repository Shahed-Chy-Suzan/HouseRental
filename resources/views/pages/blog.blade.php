@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/blog_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/blog_responsive.css') }}">



<section id="homeBlog" class="text-left text-light" style="background-image:url({{ asset('public/frontend/images/Cover/blog5.jpg') }})">
    <div class="primary-overlay1">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 offset-lg-1 pt-5 mt-5" data-aos="zoom-in">
            <div class="shadow-lg rounded" style=" background:#AC5488; opacity: .8; color:white">
                <h1 class="home_title text-center p-5 mt-5 shadow-lg">
                    @if(session()->get('lang') == 'bangla')
                        আমাদের ব্লগে আপনাকে স্বাগতম
                    @else
                        Welcome to Our Blog
                    @endif
                </h1>
            </div>
        </div>

        </div>
      </div>
    </div>
</section>



<!-- Blog -->

<div class="blog" style="background-color: #F5F5FA;">
	<div class="container" data-aos="fade-right">
		<div class="row">
			<div class="col">
				<div class="blog_posts d-flex flex-row align-items-start justify-content-between">

					@foreach($post as $row)
					<!-- Blog post -->
					<div class="blog_post bg-white"><a class="text-dark" href="{{url('blog/description/'.$row->id)}}">
						<div class="blog_image" style="background-image:url({{ asset($row->post_image) }})"></div>
						<div class="blog_text">
                                @if(session()->get('lang') == 'bangla')
                                    {{ $row->post_title_bn }}
                                @else
                                    {{ $row->post_title_en }}
                                @endif
                            </a>
						</div>
						<div class="blog_button"><a href="{{url('blog/description/'.$row->id)}}">
							 @if(session()->get('lang') == 'bangla')
						    	বিস্তারিত পড়ুন...
							@else
						        Continue Reading...
						    @endif
					    </a></div>
					</div>
                    @endforeach

				</div>
			</div>
		</div>
    </div>
    <!--------------------Pagination--------------------->
            <div class="p-5" style="margin-left:600px; font-size: 20px;">
                {{ $post->links() }}
            </div>

@endsection
