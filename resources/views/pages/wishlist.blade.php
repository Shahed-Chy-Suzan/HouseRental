@extends('layouts.app')
@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/cart_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/cart_responsive.css') }}">

	<!-- Cart -->

	<div class="cart_section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 ">
					<div class="cart_container">
						<div class="cart_title">Your Wishlist</div>
						<div class="cart_items">
							<ul class="cart_list">
                                @foreach($property as $row)
                                <li class="cart_item clearfix cart_list">
                                    {{-- {{ url('property/details/'.$row->id.'/'.$row->property_name) }} --}}
                                    <div class="cart_item_image"><a href=""><img src="{{ asset( $row->image_one) }}" style="height: 100px;"></a></div>
                                    <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                        <div class="cart_item_name cart_info_col">
                                            <div class="cart_item_title">Name</div>
                                            <div class="cart_item_text">{{ $row->city_name }}</div>
                                        </div>

                                        <div class="cart_item_color cart_info_col">
                                            <div class="cart_item_title">Color</div>
                                            <div class="cart_item_text">
                                                    {{ $row->subcity_name }}
                                            </div>
                                        </div>


                                        <div class="cart_item_color cart_info_col">
                                            <div class="cart_item_title">Size</div>
                                            <div class="cart_item_text">
                                                    {{ $row->purpose }}
                                            </div>
                                        </div>


                                        <div class="cart_item_total cart_info_col">
                                            <div class="cart_item_title">Action</div><br><br>
                                            <button  class="btn btn-sm btn-danger addcart">Add To Cart</button>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
							</ul>
						</div>

					</div>
				</div>
			</div>
		</div>
    </div>



{{-- ------------------------------------- --}}

<div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <svg class="bd-placeholder-img" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" role="img"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg>

      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">It's a broader card with text below as a natural lead-in to extra content. This content is a little longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>







<script src="{{ asset('public/frontend/js/cart_custom.js') }}"></script>

@endsection
