
<!----Ekhane FrontEnd tar full OUTPUT show ache,"Top Header+Footer" + 'NAV' + "yield(content)" Code ache --->
@extends('layouts.app')
@section('content')
@include('layouts.menubar')



<!---------------------- Start 'Deals of the week' ---------------------------->
@php
  $Deals=DB::table('user_properties')
        ->join('cities','user_properties.city_id','cities.id')
        ->join('subcities','user_properties.subcity_id','subcities.id')
        ->select('user_properties.*','cities.city_name','subcities.subcity_name')
        ->whereIn('status', [1,2])
        ->where('hot_new',1)
        ->orderBy('id','desc')
        ->limit(4)
        ->get();
@endphp

<!-----'Deals of the week' ------>
<div class="deals_featured">
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">

                <!-- Deals -->

                <div class="deals">
                    <div class="deals_title">Deals of the Week</div>
                    <div class="deals_slider_container">

                        <!-- Deals Slider -->
                        <div class="owl-carousel owl-theme deals_slider">
<!---------------------------------------------------------------->
                    @foreach($Deals as $ht)
                            <!-- Deals Item -->
                            <div class="owl-item deals_item">

                                <div class="deals_image portfolio-item" title="Click for details">
                                    {{-- <a href="{{ url('product/details/'.$ht->id.'/'.$ht->product_name) }}"><img src="{{ asset($ht->image_one) }}" style="width: 300px;"></a> --}}
                                    <a href=""><img src="{{ asset($ht->image_one) }}" style="width: 310px;"></a>
                                    <div class="portfolio-item-overlay">
                                        <div class="portfolio-item-details text-center">
                                            <!--item logo-->
                                            <h3>{{ $ht->type }} for {{ $ht->purpose }}</h3>
                                            <!--item strips-->
                                            <span></span>
                                            <!--item description-->
                                            <p>{{$ht->subcity_name}}, {{$ht->city_name}}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="deals_content">
                                    <div class="deals_info_line d-flex flex-row justify-content-start">
                                        <div class="deals_item_category"><a href="#">{{$ht->city_name}}</a></div>
                                        @if($ht->discount_price == NULL)
                                        @else
                                          <div class="deals_item_price_a ml-auto"><del>৳ {{ $ht->price }}</del></div>
                                        @endif
                                    </div>

                                    <div class="deals_info_line d-flex flex-row justify-content-start">
                                        <div class="deals_item_name">{{ $ht->subcity_name }}</div>

                                        @if($ht->discount_price == NULL)
                                          <div class="deals_item_price ml-auto" style="font-size: 18px">৳ {{ $ht->price }}</div>
                                        @else
                                          <div class="deals_item_price ml-auto" style="font-size: 18px">৳ {{ $ht->discount_price }}</div>
                                        @endif
                                    </div>


                                    <div class="DealsWeek row no-gutters align-items-center justify-content-start mt-1">
                                      <span class="col-md-5">{{ $ht->type }} for {{ $ht->purpose }}</span> <span class="col-md-7 mr-auto justify-content-start"><hr></span>
                                    </div>


                                    <div class="row mb-4">
                                        <div class="col-md-12 mb-2">{{$ht->address}}</div>
                                        <div class="col-md-12">
                                            <i class="fas fa-bed" title="Bed Room"> {{$ht->bedroom}}</i>|
                                            <i class="fas fa-bath" title="Bath Room"> {{$ht->bathroom}}</i>|
                                            <i class="fas fa-car" title="Parking"> {{$ht->parking}}</i>|
                                            <i class="fas fa-home" title="Area"> {{$ht->area}}</i>
                                        </div>
                                    </div>


                                    <div class="deals_timer d-flex flex-row align-items-center justify-content-start">
                                        <div class="deals_timer_title_container">
                                            <div class="deals_timer_title">Hurry Up</div>
                                            <div class="deals_timer_subtitle">Offer ends in:</div>
                                        </div>
                                        <div class="deals_timer_content ml-auto">
                                            <div class="deals_timer_box clearfix" data-target-time="">
                                                <div class="deals_timer_unit">
                                                    <div id="deals_timer2_hr" class="deals_timer_hr"></div>
                                                    <span>hours</span>
                                                </div>
                                                <div class="deals_timer_unit">
                                                    <div id="deals_timer2_min" class="deals_timer_min"></div>
                                                    <span>mins</span>
                                                </div>
                                                <div class="deals_timer_unit">
                                                    <div id="deals_timer2_sec" class="deals_timer_sec"></div>
                                                    <span>secs</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        </div>

                    </div>

                    <div class="deals_slider_nav_container">
                        <div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i></div>
                        <div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i></div>
                    </div>
                </div>
    <!----------//-----//------ End of 'Deals of the Weak' -----------//-----------//-------->




<!-----------------------Start 'Featured' ------------------------------>
@php
    $featured=DB::table('user_properties')->join('cities','user_properties.city_id','cities.id')->join('subcities','user_properties.subcity_id','subcities.id')->select('user_properties.*','cities.city_name','subcities.subcity_name')->whereIn('status', [1,2])->orderBy('id','desc')->get();   //sob_property(available)
@endphp

    <!------ Featured ------>
                <div class="featured">
                    <div class="tabbed_container">
                        <div class="tabs">
                            <ul class="clearfix">
                                <li class="active">@if(session()->get('lang') == 'bangla')ফিচারড @else Featured @endif</li>
                                <li>@if(session()->get('lang') == 'bangla')বিক্রয়ের জন্য @else For Sale @endif</li>
                                <li>@if(session()->get('lang') == 'bangla')ভাড়ার জন্য @else To Rent @endif</li>
                            </ul>
                            <div class="tabs_line"><span></span></div>
                        </div>

                        <!-- Product Panel -->
                        <div class="product_panel panel active">
                            <div class="featured_slider slider">

<!---------------------------------------------------------------->
                            @foreach($featured as $row)
                                <!-- Slider Item -->
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                        <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                            {{-- <a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}"><img src="{{ asset($row->image_one) }}" style="height: 130px; width: 125px;"></a> --}}
                                            <a href=""><img src="{{ asset($row->image_one) }}" style="height: 140px; width: 150px;"></a>

                                            <div class="portfolio-item-overlay" title="Click for more">
                                                <div class="portfolio-item-details text-center">
                                                    <!--item logo-->
                                                    <h3 style="font-size:10px">{{ $row->type }} for {{ $row->purpose }}</h3>
                                                    <!--item strips-->
                                                    <span></span>
                                                    <!--item description-->
                                                    <p style="font-size:12px">{{$row->subcity_name}}, {{$row->city_name}}</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="product_content">
                                            {{-- <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div> --}}
                                            @if($row->discount_price == NULL)
                                                <div class="product_price discount my-2"> ৳ {{ $row->price }}</div>
                                            @else
                                             <div class="product_price discount my-2"> ৳ {{ $row->discount_price }}<span><del><b> ৳ {{ $row->price }}</b></del></span></div>
                                            @endif
                                                {{-- <div class="row align-items-center justify-content-start">
                                                    <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                </div> --}}
                                            <div class="row mb-0 pb-0">
                                                <div class="col-md-12 text-primary">{{$row->subcity_name}}, {{$row->city_name}}	</div>
                                                <div class="col-md-12 py-1 text-muted">
                                                    <i class="fas fa-bed" title="Bed Room"> {{$row->bedroom}}</i> |
                                                    <i class="fas fa-bath" title="Bath Room"> {{$row->bathroom}}</i> |
                                                    {{-- <i class="fas fa-car">2</i>| --}}
                                                    <i class="fas fa-home" title="Area"> {{$row->area}}</i>
                                                </div>
                                            </div>

    {{--------"Check Availability" (niche "Modal" er code ache)--------}}
                                            <div class="product_extras">
                                                <button class="product_cart_button">Check Availability</button>
                                            </div>
                                        </div>

        <!------ 'Wishlist' using Toastr--------->
                                        <a href="{{ URL::to('add/wishlist/'.$row->id) }}">
                                            <div class="product_fav">
                                                <i class="fa fa-heart text-danger"></i>
                                            </div>
                                        </a>

        <!---------(Discount equation)-------->
                                        <ul class="product_marks">
                                            @if($row->discount_price == NULL)
                                            <li class="product_mark product_discount" style="background: #6868cc;">NEW</li>
                                            @else
                                            @php
                                            $amount= $row->price - $row->discount_price;
                                            $discount= $amount/$row->price * 100;
                                            @endphp
                                            <li class="product_mark product_discount">
                                                {{ intval($discount) }}%
                                            </li>
                                            @endif
                                        </ul>

                                    </div>
                                </div>
                            @endforeach

                            </div>
                            <div class="featured_slider_dots_cover"></div>
                        </div>

<!-------------//--------------End Featured property-------------//-----------------//------------>



<!---------------------------Start Sale(property)----------------------------------------------------------->
@php
    $sale=DB::table('user_properties')->join('cities','user_properties.city_id','cities.id')->join('subcities','user_properties.subcity_id','subcities.id')->select('user_properties.*','cities.city_name','subcities.subcity_name')->whereIn('status', [1,2])->where('purpose','Sell')->orderBy('id','desc')->get();   //Sale_property(available)
@endphp

            <!-- Product Panel -->

            <div class="product_panel panel">
                <div class="featured_slider slider">

                    <!-- Slider Item -->
<!---------------------------------------------------------------->
                        @foreach($sale as $row)
                            <!-- Slider Item -->
                            <div class="featured_slider_item">
                                <div class="border_active"></div>
                                <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                    <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                        {{-- <a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}"><img src="{{ asset($row->image_one) }}" style="height: 130px; width: 125px;"></a> --}}
                                        <a href=""><img src="{{ asset($row->image_one) }}" style="height: 140px; width: 150px;"></a>

                                        <div class="portfolio-item-overlay" title="Click for more">
                                            <div class="portfolio-item-details text-center">
                                                <!--item logo-->
                                                <h3 style="font-size:10px">{{ $row->type }} for {{ $row->purpose }}</h3>
                                                <!--item strips-->
                                                <span></span>
                                                <!--item description-->
                                                <p style="font-size:12px">{{$row->subcity_name}}, {{$row->city_name}}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product_content">
                                        {{-- <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div> --}}
                                        @if($row->discount_price == NULL)
                                            <div class="product_price discount my-2"> ৳ {{ $row->price }}</div>
                                        @else
                                         <div class="product_price discount my-2"> ৳ {{ $row->discount_price }}<span><del><b> ৳ {{ $row->price }}</b></del></span></div>
                                        @endif
                                            {{-- <div class="row align-items-center justify-content-start">
                                                <span class="col-md-12"><small>Apartment For Rent</small></span>
                                            </div> --}}
                                        <div class="row mb-0 pb-0">
                                            <div class="col-md-12 text-primary">{{$row->subcity_name}}, {{$row->city_name}}	</div>
                                            <div class="col-md-12 py-1 text-muted">
                                                <i class="fas fa-bed" title="Bed Room"> {{$row->bedroom}}</i> |
                                                <i class="fas fa-bath" title="Bath Room"> {{$row->bathroom}}</i> |
                                                {{-- <i class="fas fa-car">2</i>| --}}
                                                <i class="fas fa-home" title="Area"> {{$row->area}}</i>
                                            </div>
                                        </div>

	    {{--------"Check Availability"--------}}
                                        <div class="product_extras">
                                            <button class="product_cart_button">Check Availability</button>
                                        </div>
                                    </div>

    <!------ 'Wishlist' using Toastr--------->
                                    <a href="{{ URL::to('add/wishlist/'.$row->id) }}">
                                        <div class="product_fav">
                                            <i class="fa fa-heart text-danger"></i>
                                        </div>
                                    </a>

    <!---------(Discount equation)-------->
                                    <ul class="product_marks">
                                        @if($row->discount_price == NULL)
                                        <li class="product_mark product_discount" style="background: #6868cc;">NEW</li>
                                        @else
                                        @php
                                        $amount= $row->price - $row->discount_price;
                                        $discount= $amount/$row->price * 100;
                                        @endphp
                                        <li class="product_mark product_discount">
                                            {{ intval($discount) }}%
                                        </li>
                                        @endif
                                    </ul>

                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="featured_slider_dots_cover"></div>
                </div>
<!----------//------------------End Sale(property)--------------//-------------//---------->



<!------------------------Start Rent(property)-------------------------------------------------------------->
@php
    $rent=DB::table('user_properties')->join('cities','user_properties.city_id','cities.id')->join('subcities','user_properties.subcity_id','subcities.id')->select('user_properties.*','cities.city_name','subcities.subcity_name')->whereIn('status', [1,2])->where('purpose','Rent')->orderBy('id','desc')->get();   //Rent_property(available)
@endphp
            <!-- Product Panel -->

            <div class="product_panel panel">
                <div class="featured_slider slider">

                    <!-- Slider Item -->
<!---------------------------------------------------------------->
                    @foreach($rent as $row)
                        <!-- Slider Item -->
                        <div class="featured_slider_item">
                            <div class="border_active"></div>
                            <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                    {{-- <a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}"><img src="{{ asset($row->image_one) }}" style="height: 130px; width: 125px;"></a> --}}
                                    <a href=""><img src="{{ asset($row->image_one) }}" style="height: 140px; width: 150px;"></a>

                                    <div class="portfolio-item-overlay" title="Click for more">
                                        <div class="portfolio-item-details text-center">
                                            <!--item logo-->
                                            <h3 style="font-size:10px">{{ $row->type }} for {{ $row->purpose }}</h3>
                                            <!--item strips-->
                                            <span></span>
                                            <!--item description-->
                                            <p style="font-size:12px">{{$row->subcity_name}}, {{$row->city_name}}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="product_content">
                                    {{-- <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div> --}}
                                    @if($row->discount_price == NULL)
                                        <div class="product_price discount my-2"> ৳ {{ $row->price }}</div>
                                    @else
                                     <div class="product_price discount my-2"> ৳ {{ $row->discount_price }}<span><del><b> ৳ {{ $row->price }}</b></del></span></div>
                                    @endif
                                        {{-- <div class="row align-items-center justify-content-start">
                                            <span class="col-md-12"><small>Apartment For Rent</small></span>
                                        </div> --}}
                                    <div class="row mb-0 pb-0">
                                        <div class="col-md-12 text-primary">{{$row->subcity_name}}, {{$row->city_name}}	</div>
                                        <div class="col-md-12 py-1 text-muted">
                                            <i class="fas fa-bed" title="Bed Room"> {{$row->bedroom}}</i> |
                                            <i class="fas fa-bath" title="Bath Room"> {{$row->bathroom}}</i> |
                                            {{-- <i class="fas fa-car">2</i>| --}}
                                            <i class="fas fa-home" title="Area"> {{$row->area}}</i>
                                        </div>
                                    </div>

        <!--------"Check Availability"-------->
                                    <div class="product_extras">
                                        <button class="product_cart_button">Check Availability</button>
                                    </div>
                                </div>


        <!------ 'Wishlist' using Toastr--------->
                                <a href="{{ URL::to('add/wishlist/'.$row->id) }}">
                                    <div class="product_fav">
                                        <i class="fa fa-heart text-danger"></i>
                                    </div>
                                </a>


        <!---------(Discount equation)-------->
                                <ul class="product_marks">
                                    @if($row->discount_price == NULL)
                                    <li class="product_mark product_discount" style="background: #6868cc;">NEW</li>
                                    @else
                                    @php
                                    $amount= $row->price - $row->discount_price;
                                    $discount= $amount/$row->price * 100;
                                    @endphp
                                    <li class="product_mark product_discount">
                                        {{ intval($discount) }}%
                                    </li>
                                    @endif
                                </ul>

                            </div>
                        </div>
                    @endforeach


                </div>
                <div class="featured_slider_dots_cover"></div>
            </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>      <!--------------- End of "Rent(property)" ------------------>

<!--------------------------- End of "Deals of the Week" -------------------------------------->






<!---------------------------start "Popular Categories" -------------------------------------->
<div class="popular">
<div class="popular_categories">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="popular_categories_content">
                    <div class="popular_categories_title" style="color: white">Popular Categories</div>
                    <div class="popular_categories_slider_nav">
                        <div class="popular_categories_prev popular_categories_nav"><i class="fas fa-angle-left ml-auto"></i></div>
                        <div class="popular_categories_next popular_categories_nav"><i class="fas fa-angle-right ml-auto"></i></div>
                    </div>
                    <div class="popular_categories_link" ><a href="#" style="color: white">full catalog</a></div>
                </div>
            </div>

            <!-- Popular Categories Slider -->

            <div class="col-lg-9">
                <div class="popular_categories_slider_container">
                    <div class="owl-carousel owl-theme popular_categories_slider">

                        <!-- Popular Categories Item -->
                        <div class="owl-item">
                            <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                <div class="popular_category_image"><img src="{{asset('public/frontend/images/sample/Building (2).jpg')}}" width="160px" height="100px"></div>
                                <div class="popular_category_text">Chattogram</div>
                            </div>
                        </div>

                        <!-- Popular Categories Item -->
                        <div class="owl-item">
                            <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                <div class="popular_category_image"><img src="{{asset('public/frontend/images/sample/Building (1).jpg')}}" width="160px" height="100px"></div>
                                <div class="popular_category_text">Dhaka</div>
                            </div>
                        </div>

                        <!-- Popular Categories Item -->
                        <div class="owl-item">
                            <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                <div class="popular_category_image"><img src="{{asset('public/frontend/images/sample/Building (2).jpg')}}" width="160px" height="100px"></div>
                                <div class="popular_category_text">Rajshahi</div>
                            </div>
                        </div>

                        <!-- Popular Categories Item -->
                        <div class="owl-item">
                            <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                <div class="popular_category_image"><img src="{{asset('public/frontend/images/sample/Building (1).jpg')}}" width="160px" height="100px"></div>
                                <div class="popular_category_text">Khulna</div>
                            </div>
                        </div>

                        <!-- Popular Categories Item -->
                        <div class="owl-item">
                            <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                <div class="popular_category_image"><img src="{{asset('public/frontend/images/sample/Building (2).jpg')}}" width="160px" height="100px"></div>
                                <div class="popular_category_text">Sylhet</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>





<!---------------------------------------------------------------------------------------------------->
                            <!--for Showing '5th' 'Electronic' category--->
<!---------------------------------------------------------------------------------------------------->
{{-- @php
$cats=DB::table('categories')->skip(5)->first();
$category_id=$cats->id;
$products=DB::table('products')->where('category_id',$category_id)->where('status',1)->limit(16)->orderBy('id','DESC')->get();
@endphp --}}



    {{-- <div class="new_arrivals">
        <div class="trends_background" style="background-image:url({{ asset('public/frontend/images/trends_background.jpg') }})"></div>
        <div class="trends_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="tabbed_container">
                        <div class="tabs clearfix tabs-right">
                            <div class="new_arrivals_title">{{ $cats->category_name }}</div>
                            <div class="tabs_line" style="border: 1px solid green;"><span></span></div>
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

                                @foreach($products as $row)                 <!----------------------------------->
                                        <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{ asset($row->image_one) }}" style="height: 120px; width: 130px;"></div>
                                            <div class="product_content">

                                            @if($row->discount_price == NULL)
                                                <br><span class="text-danger"><b> ${{ $row->selling_price }} </b></span>
                                            @else
                                             <div class="product_price discount">${{ $row->discount_price }}<span>${{ $row->selling_price }}</span></div>
                                            @endif
                                                <div class="product_name"><div><a href="#">
                                                    {{ $row->product_name }}
                                                </a></div></div>
                <!------add to cart------------->
                                                <div class="product_extras">
                                                    <button id="{{ $row->id }}" class="product_cart_button addcart" data-toggle="modal" data-target="#cartmodal"  onclick="productview(this.id)">Add to Cart</button>
                                                </div>
                                                {{-- <div class="product_extras">
                                                    <button class="product_cart_button addcart" data-id="{{ $row->id }}">Add to Cart</button>
                                                </div> --}}
                                            {{-- </div> --}}
        <!--------------wishlist---------------->
                                            {{-- <a href="{{ URL::to('add/wishlist/'.$row->id) }}">
                                                <div class="product_fav">
                                                    <i class="fa fa-heart text-danger"></i>
                                                </div>
                                            </a> --}}

                                            {{-- <button
                                               class="addwishlist" data-id="{{ $row->id }}">
                                               <div class="product_fav">
                                                  <i class="fa fa-heart text-info"></i>
                                               </div>
                                            </button>

                                            <ul class="product_marks">
                                                 @if($row->discount_price == NULL)
                                                 <li class="product_mark product_discount" style="background: blue;">New</li>

                                                 @else
                                                @php
                                                $amount=$row->selling_price - $row->discount_price;
                                                $discount=$amount/$row->selling_price * 100;
                                                @endphp
                                                 <li class="product_mark product_discount">

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
    </div> --}}

<!-------------------------------- Ends of Showing '5th' 'Electronic' category ------------------------->





<!-- Banner -->

{{-- <div class="banner_2">
    <div class="banner_2_background" style="background-image:url({{ asset('public/frontend/images/Cover/1.jpg') }})"></div>
    <div class="banner_2_container">
        <div class="banner_2_dots"></div>
        <!-- Banner 2 Slider -->

        <div class="owl-carousel owl-theme banner_2_slider">

            <!-- Banner 2 Slider Item -->
            <div class="owl-item">
                <div class="banner_2_item">
                    <div class="container fill_height">
                        <div class="row fill_height">
                            <div class="col-lg-4 col-md-6 fill_height">
                                <div class="banner_2_content">
                                    <div class="banner_2_category">Laptops</div>
                                    <div class="banner_2_title">MacBook Air 13</div>
                                    <div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
                                    <div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                    <div class="button banner_2_button"><a href="#">Explore</a></div>
                                </div>

                            </div>
                            <div class="col-lg-8 col-md-6 fill_height">
                                <div class="banner_2_image_container">
                                    <div class="banner_2_image"><img src="{{asset('public/frontend/images/sample/Building (2).jpg')}}" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Banner 2 Slider Item -->
            <div class="owl-item">
                <div class="banner_2_item">
                    <div class="container fill_height">
                        <div class="row fill_height">
                            <div class="col-lg-4 col-md-6 fill_height">
                                <div class="banner_2_content">
                                    <div class="banner_2_category">Laptops</div>
                                    <div class="banner_2_title">MacBook Air 13</div>
                                    <div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
                                    <div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                    <div class="button banner_2_button"><a href="#">Explore</a></div>
                                </div>

                            </div>
                            <div class="col-lg-8 col-md-6 fill_height">
                                <div class="banner_2_image_container">
                                    <div class="banner_2_image"><img src="images/banner_2_product.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Banner 2 Slider Item -->
            <div class="owl-item">
                <div class="banner_2_item">
                    <div class="container fill_height">
                        <div class="row fill_height">
                            <div class="col-lg-4 col-md-6 fill_height">
                                <div class="banner_2_content">
                                    <div class="banner_2_category">Laptops</div>
                                    <div class="banner_2_title">MacBook Air 13</div>
                                    <div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
                                    <div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                    <div class="button banner_2_button"><a href="#">Explore</a></div>
                                </div>

                            </div>
                            <div class="col-lg-8 col-md-6 fill_height">
                                <div class="banner_2_image_container">
                                    <div class="banner_2_image"><img src="images/banner_2_product.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div> --}}



<!-- Hot New Arrivals -->
<div class="hot_arrivals">
<div class="new_arrivals">
    <div class="container">
        <div class="row pl-5">
            <div class="col">
                <div class="tabbed_container">
                    <div class="tabs clearfix tabs-right">
                        <div class="new_arrivals_title">Hot New Arrivals</div>
                        <ul class="clearfix">
                            <li class="active">Featured</li>
                            <li>Audio & Video</li>
                            <li>Laptops & Computers</li>
                        </ul>
                        <div class="tabs_line" style="border: 1px solid green; margin-bottom: 25px;"><span></span></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-9" style="z-index:1;">

                            <!-- Product Panel -->
                            <div class="product_panel panel active">
                                <div class="arrivals_slider slider">

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (1).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed" title="Bed Room"> 4 </i> |
                                                        <i class="fas fa-bath" title="Bath Room"> 4 </i> |
                                                        {{-- <i class="fas fa-car"> 2 </i>| --}}
                                                        <i class="fas fa-home" title="Area"> 1,486 sqft. </i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (2).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del> </del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed" title="Bed Room">4</i> |
                                                        <i class="fas fa-bath" title="Bath Room">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home" title="Area">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (2).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del> </del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed" title="Bed Room">4</i> |
                                                        <i class="fas fa-bath" title="Bath Room">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home" title="Area">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (2).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del> </del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed" title="Bed Room">4</i> |
                                                        <i class="fas fa-bath" title="Bath Room">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home" title="Area">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (2).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del> </del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed" title="Bed Room">4</i> |
                                                        <i class="fas fa-bath" title="Bath Room">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home" title="Area">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (2).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del> </del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed" title="Bed Room">4</i> |
                                                        <i class="fas fa-bath" title="Bath Room">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home" title="Area">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (2).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del> </del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed" title="Bed Room">4</i> |
                                                        <i class="fas fa-bath" title="Bath Room">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home" title="Area">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (2).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del> </del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed" title="Bed Room">4</i> |
                                                        <i class="fas fa-bath" title="Bath Room">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home" title="Area">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount"></li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (1).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="arrivals_slider_dots_cover"></div>
                            </div>






                            <!-- Product Panel -->
                            <div class="product_panel panel">
                                <div class="arrivals_slider slider">

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="arrivals_slider_dots_cover"></div>
                            </div>




                            <!-- Product Panel -->
                            <div class="product_panel panel">
                                <div class="arrivals_slider slider">

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px" class="img-fluid">
                                                <div class="portfolio-item-overlay" title="Click for more">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px">Apartment For Rent</h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px">Moradpur, Chattogram</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_content">
                                                <div class="product_price discount my-2">৳50,000<span><del>৳55,000</del></span></div>
                                                    {{-- <div class="row align-items-center justify-content-start">
                                                        <span class="col-md-12"><small>Apartment For Rent</small></span>
                                                    </div> --}}
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">Moradpur, Chattogram</div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed">4</i> |
                                                        <i class="fas fa-bath">4</i> |
                                                        {{-- <i class="fas fa-car">2</i>| --}}
                                                        <i class="fas fa-home">1,486 sqft.</i>
                                                    </div>
                                                </div>

                                                <div class="product_extras">
                                                    <button class="product_cart_button">Confirm Property</button>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="arrivals_slider_dots_cover"></div>
                            </div>

                        </div>



                        <div class="col-lg-3">
                            <div class="arrivals_single clearfix">
                                <div class="d-flex flex-column align-items-center justify-content-center">

                                    <div class="arrivals_single_image portfolio-item">
                                        <img src="{{asset('public/frontend/images/sample/bed (2).jpg')}}">
                                        <div class="portfolio-item-overlay" title="Click for more">
                                            <div class="portfolio-item-details text-center">
                                                <!--item logo-->
                                                <h3 style="font-size:10px">Apartment For Rent</h3>
                                                <!--item strips-->
                                                <span></span>
                                                <!--item description-->
                                                <p style="font-size:12px">Moradpur, Chattogram</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="arrivals_single_content">
                                        <div class="arrivals_single_category"><a href="#" class="text-primary">Dhaka</a></div>
                                        <div class="arrivals_single_name_container clearfix">
                                            <div class="arrivals_single_name"><a href="#">12 No. Dhanmondi</a></div>
                                            <div class="arrivals_single_price text-right">৳ 33,790</div>
                                        </div>

                                        <div class="DealsWeek row no-gutters align-items-center justify-content-start mt-0 text-primary">
                                            <span class="col-md-7">Building For Rent</span> <span class="col-md-5 mr-auto justify-content-start"><hr></span>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-md-12">
                                                <i class="fas fa-bed" title="Bed Room"> 5</i> |
                                                <i class="fas fa-bath" title="Bath Room"> 4</i> |
                                                <i class="fas fa-car" title="Parking"> 1</i> |
                                                <i class="fas fa-home" title="Area"> 1,686 sqft.</i>
                                            </div>
                                        </div>
                                        <form action="#"><button class="arrivals_single_button" style="margin-top: 2px;">Confirm Property</button></form>
                                    </div>
                                    <div class="arrivals_single_fav product_fav active"><i class="fas fa-heart"></i></div>
                                    <ul class="arrivals_single_marks product_marks">
                                        <li class="arrivals_single_mark product_mark product_new">new</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>


<!---------------- Best Sellers -------------------->

<div class="best_sellers">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="tabbed_container">
                    <div class="tabs clearfix tabs-right">
                        <div class="new_arrivals_title">Hot Best Sellers</div>
                        <ul class="clearfix">
                            <li class="active">Top 20</li>
                            <li>Audio & Video</li>
                            <li>Laptops & Computers</li>
                        </ul>
                        <div class="tabs_line"><span></span></div>
                    </div>

                    <div class="bestsellers_panel panel active">

                        <!-- Best Sellers Slider -->

                        <div class="bestsellers_slider slider">

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item discount">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="{{asset('public/frontend/images/sample/int (2).jpg')}}" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item discount">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="{{asset('public/frontend/images/sample/int (3).jpg')}}" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Samsung J730F...</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="{{asset('public/frontend/images/sample/int (3).jpg')}}" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Nomi Black White</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="images/best_4.png" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Samsung Charm Gold</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item discount">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="images/best_5.png" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Beoplay H7</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="images/best_6.png" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Huawei MediaPad T3</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item discount">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="images/best_1.png" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item discount">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="images/best_2.png" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="images/best_3.png" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="images/best_4.png" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item discount">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="images/best_5.png" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="images/best_6.png" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="bestsellers_panel panel">

                        <!-- Best Sellers Slider -->

                        <div class="bestsellers_slider slider">

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item discount">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="images/best_1.png" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item discount">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="images/best_2.png" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="images/best_3.png" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="images/best_4.png" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item discount">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="images/best_5.png" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="images/best_6.png" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item discount">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="images/best_1.png" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item discount">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="images/best_2.png" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="images/best_3.png" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="images/best_4.png" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item discount">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="images/best_5.png" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="images/best_6.png" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="bestsellers_panel panel">

                        <!-- Best Sellers Slider -->

                        <div class="bestsellers_slider slider">

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item discount">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="images/best_1.png" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item discount">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="images/best_2.png" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="images/best_3.png" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="images/best_4.png" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item discount">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="images/best_5.png" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="images/best_6.png" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item discount">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="images/best_1.png" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item discount">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="images/best_2.png" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="images/best_3.png" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="images/best_4.png" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item discount">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="images/best_5.png" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="images/best_6.png" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<!-- Trends -->

<div class="trends">
    <div class="trends_background"></div>
    <div class="trends_overlay"></div>
    <div class="container">
        <div class="row">

            <!-- Trends Content -->
            <div class="col-lg-3">
                <div class="trends_container">
                    <h2 class="trends_title text-light">Trends 2020</h2>
                    <div class="trends_text"><p style="color: white">Lorem ipsum dolor sit amet, consectetur adipiscing Donec et.</p></div>
                    <div class="trends_slider_nav">
                        <div class="trends_prev trends_nav"><i class="fas fa-angle-left ml-auto"></i></div>
                        <div class="trends_next trends_nav"><i class="fas fa-angle-right ml-auto"></i></div>
                    </div>
                </div>
            </div>

            <!-- Trends Slider -->
            <div class="col-lg-9">
                <div class="trends_slider_container">

                    <!-- Trends Slider -->

                    <div class="owl-carousel owl-theme trends_slider">

                        <!-- Trends Slider Item -->
                        <div class="owl-item">
                            <div class="trends_item is_new">

                                <div class="trends_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                    <img src="{{asset('public/frontend/images/sample/int (1).jpg')}}">
                                    <div class="portfolio-item-overlay" title="Click for more">
                                        <div class="portfolio-item-details text-center">
                                            <!--item logo-->
                                            <h3 style="font-size:12px">Apartment For Rent</h3>
                                            <!--item strips-->
                                            <span></span>
                                            <!--item description-->
                                            <p style="font-size:13px">Moradpur, Chattogram</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="trends_content" style="margin-top: 5px">
                                    <div class="trends_category"><a href="#">Chattogram</a></div>
                                    <div class="trends_info clearfix">
                                        <div class="trends_name"><a href="product.html">Bahaddarhat</a></div>
                                        <div class="trends_price">৳5,500,000</div>
                                    </div>

                                    <div class="DealsWeek row no-gutters align-items-center justify-content-start mt-0" style="color:blue">
                                        <span class="col-md-7">Building For Rent</span> <span class="col-md-5 mr-auto justify-content-start"><hr></span>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <i class="fas fa-bed" title="Bed Room"> 5 </i> |
                                            <i class="fas fa-bath" title="Bath Room"> 4 </i> |
                                            <i class="fas fa-car" title="Parking"> 1 </i> |
                                            <i class="fas fa-home" title="Area"> 1,686 sqft.</i>
                                        </div>
                                    </div>
                                    {{-- <form action="#"><button class="arrivals_single_button" style="margin: 0px 0px;">Confirm Property</button></form> --}}

                                </div>
                                <ul class="trends_marks">
                                    <li class="trends_mark trends_discount">-25%</li>
                                    <li class="trends_mark trends_new">new</li>
                                </ul>
                                <div class="trends_fav"><i class="fas fa-heart"></i></div>
                            </div>
                        </div>


                        <!-- Trends Slider Item -->
                        <div class="owl-item">
                            <div class="trends_item is_new">

                                <div class="trends_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                    <img src="{{asset('public/frontend/images/sample/int (1).jpg')}}">
                                    <div class="portfolio-item-overlay" title="Click for more">
                                        <div class="portfolio-item-details text-center">
                                            <!--item logo-->
                                            <h3 style="font-size:12px">Apartment For Rent</h3>
                                            <!--item strips-->
                                            <span></span>
                                            <!--item description-->
                                            <p style="font-size:13px">Moradpur, Chattogram</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="trends_content" style="margin-top: 5px">
                                    <div class="trends_category"><a href="#">Chattogram</a></div>
                                    <div class="trends_info clearfix">
                                        <div class="trends_name"><a href="product.html">Bahaddarhat</a></div>
                                        <div class="trends_price">৳5,500,000</div>
                                    </div>

                                    <div class="DealsWeek row no-gutters align-items-center justify-content-start mt-0" style="color:blue">
                                        <span class="col-md-7">Flat For Rent</span> <span class="col-md-5 mr-auto justify-content-start"><hr></span>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <i class="fas fa-bed" title="Bed Room"> 5 </i> |
                                            <i class="fas fa-bath" title="Bath Room"> 4 </i> |
                                            <i class="fas fa-car" title="Parking"> 1 </i> |
                                            <i class="fas fa-home" title="Area"> 1,686 sqft.</i>
                                        </div>
                                    </div>
                                    {{-- <form action="#"><button class="arrivals_single_button" style="margin: 0px 0px;">Add to Cart</button></form> --}}

                                </div>
                                <ul class="trends_marks">
                                    <li class="trends_mark trends_discount">-25%</li>
                                    <li class="trends_mark trends_new">new</li>
                                </ul>
                                <div class="trends_fav"><i class="fas fa-heart"></i></div>
                            </div>
                        </div>

                        <!-- Trends Slider Item -->
                        <div class="owl-item">
                            <div class="trends_item is_new">

                                <div class="trends_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                    <img src="{{asset('public/frontend/images/sample/int (1).jpg')}}">
                                    <div class="portfolio-item-overlay" title="Click for more">
                                        <div class="portfolio-item-details text-center">
                                            <!--item logo-->
                                            <h3 style="font-size:12px">Apartment For Rent</h3>
                                            <!--item strips-->
                                            <span></span>
                                            <!--item description-->
                                            <p style="font-size:13px">Moradpur, Chattogram</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="trends_content" style="margin-top: 5px">
                                    <div class="trends_category"><a href="#">Chattogram</a></div>
                                    <div class="trends_info clearfix">
                                        <div class="trends_name"><a href="product.html">Bahaddarhat</a></div>
                                        <div class="trends_price">৳5,500,000</div>
                                    </div>

                                    <div class="DealsWeek row no-gutters align-items-center justify-content-start mt-0" style="color:blue">
                                        <span class="col-md-7">Building For Rent</span> <span class="col-md-5 mr-auto justify-content-start"><hr></span>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <i class="fas fa-bed" title="Bed Room"> 5 </i> |
                                            <i class="fas fa-bath" title="Bath Room"> 4 </i> |
                                            <i class="fas fa-car" title="Parking"> 1 </i> |
                                            <i class="fas fa-home" title="Area"> 1,686 sqft.</i>
                                        </div>
                                    </div>
                                    {{-- <form action="#"><button class="arrivals_single_button" style="margin: 0px 0px;">Add to Cart</button></form> --}}

                                </div>
                                <ul class="trends_marks">
                                    <li class="trends_mark trends_discount">-25%</li>
                                    <li class="trends_mark trends_new">new</li>
                                </ul>
                                <div class="trends_fav"><i class="fas fa-heart"></i></div>
                            </div>
                        </div>

                        <!-- Trends Slider Item -->
                        <div class="owl-item">
                            <div class="trends_item is_new">

                                <div class="trends_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                    <img src="{{asset('public/frontend/images/sample/int (1).jpg')}}">
                                    <div class="portfolio-item-overlay" title="Click for more">
                                        <div class="portfolio-item-details text-center">
                                            <!--item logo-->
                                            <h3 style="font-size:12px">Apartment For Rent</h3>
                                            <!--item strips-->
                                            <span></span>
                                            <!--item description-->
                                            <p style="font-size:13px">Moradpur, Chattogram</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="trends_content" style="margin-top: 5px">
                                    <div class="trends_category"><a href="#">Chattogram</a></div>
                                    <div class="trends_info clearfix">
                                        <div class="trends_name"><a href="product.html">Bahaddarhat</a></div>
                                        <div class="trends_price">৳5,500,000</div>
                                    </div>

                                    <div class="DealsWeek row no-gutters align-items-center justify-content-start mt-0" style="color:blue">
                                        <span class="col-md-7">Building For Rent</span> <span class="col-md-5 mr-auto justify-content-start"><hr></span>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <i class="fas fa-bed" title="Bed Room"> 5 </i> |
                                            <i class="fas fa-bath" title="Bath Room"> 4 </i> |
                                            <i class="fas fa-car" title="Parking"> 1 </i> |
                                            <i class="fas fa-home" title="Area"> 1,686 sqft.</i>
                                        </div>
                                    </div>
                                    {{-- <form action="#"><button class="arrivals_single_button" style="margin: 0px 0px;">Add to Cart</button></form> --}}

                                </div>
                                <ul class="trends_marks">
                                    <li class="trends_mark trends_discount">-25%</li>
                                    <li class="trends_mark trends_new">new</li>
                                </ul>
                                <div class="trends_fav"><i class="fas fa-heart"></i></div>
                            </div>
                        </div>

                        <!-- Trends Slider Item -->
                        <div class="owl-item">
                            <div class="trends_item is_new">

                                <div class="trends_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                    <img src="{{asset('public/frontend/images/sample/int (1).jpg')}}">
                                    <div class="portfolio-item-overlay" title="Click for more">
                                        <div class="portfolio-item-details text-center">
                                            <!--item logo-->
                                            <h3 style="font-size:12px">Apartment For Rent</h3>
                                            <!--item strips-->
                                            <span></span>
                                            <!--item description-->
                                            <p style="font-size:13px">Moradpur, Chattogram</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="trends_content" style="margin-top: 5px">
                                    <div class="trends_category"><a href="#">Chattogram</a></div>
                                    <div class="trends_info clearfix">
                                        <div class="trends_name"><a href="product.html">Bahaddarhat</a></div>
                                        <div class="trends_price">৳5,500,000</div>
                                    </div>

                                    <div class="DealsWeek row no-gutters align-items-center justify-content-start mt-0" style="color:blue">
                                        <span class="col-md-7">Building For Rent</span> <span class="col-md-5 mr-auto justify-content-start"><hr></span>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <i class="fas fa-bed" title="Bed Room"> 5 </i> |
                                            <i class="fas fa-bath" title="Bath Room"> 4 </i> |
                                            <i class="fas fa-car" title="Parking"> 1 </i> |
                                            <i class="fas fa-home" title="Area"> 1,686 sqft.</i>
                                        </div>
                                    </div>
                                    {{-- <form action="#"><button class="arrivals_single_button" style="margin: 0px 0px;">Add to Cart</button></form> --}}

                                </div>
                                <ul class="trends_marks">
                                    <li class="trends_mark trends_discount">-25%</li>
                                    <li class="trends_mark trends_new">new</li>
                                </ul>
                                <div class="trends_fav"><i class="fas fa-heart"></i></div>
                            </div>
                        </div>

                        <!-- Trends Slider Item -->
                        <div class="owl-item">
                            <div class="trends_item is_new">

                                <div class="trends_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                    <img src="{{asset('public/frontend/images/sample/int (1).jpg')}}">
                                    <div class="portfolio-item-overlay" title="Click for more">
                                        <div class="portfolio-item-details text-center">
                                            <!--item logo-->
                                            <h3 style="font-size:12px">Apartment For Rent</h3>
                                            <!--item strips-->
                                            <span></span>
                                            <!--item description-->
                                            <p style="font-size:13px">Moradpur, Chattogram</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="trends_content" style="margin-top: 5px">
                                    <div class="trends_category"><a href="#">Chattogram</a></div>
                                    <div class="trends_info clearfix">
                                        <div class="trends_name"><a href="product.html">Bahaddarhat</a></div>
                                        <div class="trends_price">৳5,500,000</div>
                                    </div>

                                    <div class="DealsWeek row no-gutters align-items-center justify-content-start mt-0" style="color:blue">
                                        <span class="col-md-7">Building For Rent</span> <span class="col-md-5 mr-auto justify-content-start"><hr></span>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <i class="fas fa-bed" title="Bed Room"> 5 </i> |
                                            <i class="fas fa-bath" title="Bath Room"> 4 </i> |
                                            <i class="fas fa-car" title="Parking"> 1 </i> |
                                            <i class="fas fa-home" title="Area"> 1,686 sqft.</i>
                                        </div>
                                    </div>
                                    {{-- <form action="#"><button class="arrivals_single_button" style="margin: 0px 0px;">Add to Cart</button></form> --}}

                                </div>
                                <ul class="trends_marks">
                                    <li class="trends_mark trends_discount">-25%</li>
                                    <li class="trends_mark trends_new">new</li>
                                </ul>
                                <div class="trends_fav"><i class="fas fa-heart"></i></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>





<!-- Adverts -->

{{-- <div class="adverts">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 advert_col">

                <!-- Advert Item -->

                <div class="advert d-flex flex-row align-items-center justify-content-start">
                    <div class="advert_content">
                        <div class="advert_title"><a href="#">Trends 2018</a></div>
                        <div class="advert_text">Lorem ipsum dolor sit amet, consectetur adipiscing Donec et.</div>
                    </div>
                    <div class="ml-auto"><div class="advert_image"><img src="{{asset('public/frontend/images/sample/Building (2).jpg')}}" alt=""></div></div>
                </div>
            </div>

            <div class="col-lg-4 advert_col">

                <!-- Advert Item -->

                <div class="advert d-flex flex-row align-items-center justify-content-start">
                    <div class="advert_content">
                        <div class="advert_subtitle">Trends 2018</div>
                        <div class="advert_title_2"><a href="#">Sale -45%</a></div>
                        <div class="advert_text">Lorem ipsum dolor sit amet, consectetur.</div>
                    </div>
                    <div class="ml-auto"><div class="advert_image"><img src="{{asset('public/frontend/images/sample/Building (1).jpg')}}" alt=""></div></div>
                </div>
            </div>

            <div class="col-lg-4 advert_col">

                <!-- Advert Item -->

                <div class="advert d-flex flex-row align-items-center justify-content-start">
                    <div class="advert_content">
                        <div class="advert_title"><a href="#">Trends 2018</a></div>
                        <div class="advert_text">Lorem ipsum dolor sit amet, consectetur.</div>
                    </div>
                    <div class="ml-auto"><div class="advert_image"><img src="{{asset('public/frontend/images/sample/Building (2).jpg')}}" alt=""></div></div>
                </div>
            </div>

        </div>
    </div>
</div> --}}



<!-- Reviews -->

<div class="reviews" style="background-color: #EFF6FA">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="reviews_title_container">
                    <h3 class="reviews_title">Latest Reviews</h3>
                    <div class="reviews_all ml-auto"><a href="#">view all <span>reviews</span></a></div>
                </div>

                <div class="reviews_slider_container">

                    <!-- Reviews Slider -->
                    <div class="owl-carousel owl-theme reviews_slider">

                        <!-- Reviews Slider Item -->
                        <div class="owl-item">
                            <div class="review d-flex flex-row align-items-start justify-content-start">
                                <div><div class="review_image"><img src="{{asset('public/frontend/images/sample/Building (2).jpg')}}" alt=""></div></div>
                                <div class="review_content">
                                    <div class="review_name">Roberto Sanchez</div>
                                    <div class="review_rating_container">
                                        <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="review_time">2 day ago</div>
                                    </div>
                                    <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
                                </div>
                            </div>
                        </div>

                        <!-- Reviews Slider Item -->
                        <div class="owl-item">
                            <div class="review d-flex flex-row align-items-start justify-content-start">
                                <div><div class="review_image"><img src="{{asset('public/frontend/images/sample/Building (1).jpg')}}" alt=""></div></div>
                                <div class="review_content">
                                    <div class="review_name">Brandon Flowers</div>
                                    <div class="review_rating_container">
                                        <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="review_time">2 day ago</div>
                                    </div>
                                    <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
                                </div>
                            </div>
                        </div>

                        <!-- Reviews Slider Item -->
                        <div class="owl-item">
                            <div class="review d-flex flex-row align-items-start justify-content-start">
                                <div><div class="review_image"><img src="{{asset('public/frontend/images/sample/w (2).jpg')}}" alt=""></div></div>
                                <div class="review_content">
                                    <div class="review_name">Emilia Clarke</div>
                                    <div class="review_rating_container">
                                        <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="review_time">2 day ago</div>
                                    </div>
                                    <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
                                </div>
                            </div>
                        </div>

                        <!-- Reviews Slider Item -->
                        <div class="owl-item">
                            <div class="review d-flex flex-row align-items-start justify-content-start">
                                <div><div class="review_image"><img src="images/review_1.jpg" alt=""></div></div>
                                <div class="review_content">
                                    <div class="review_name">Roberto Sanchez</div>
                                    <div class="review_rating_container">
                                        <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="review_time">2 day ago</div>
                                    </div>
                                    <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
                                </div>
                            </div>
                        </div>

                        <!-- Reviews Slider Item -->
                        <div class="owl-item">
                            <div class="review d-flex flex-row align-items-start justify-content-start">
                                <div><div class="review_image"><img src="images/review_2.jpg" alt=""></div></div>
                                <div class="review_content">
                                    <div class="review_name">Brandon Flowers</div>
                                    <div class="review_rating_container">
                                        <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="review_time">2 day ago</div>
                                    </div>
                                    <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
                                </div>
                            </div>
                        </div>

                        <!-- Reviews Slider Item -->
                        <div class="owl-item">
                            <div class="review d-flex flex-row align-items-start justify-content-start">
                                <div><div class="review_image"><img src="images/review_3.jpg" alt=""></div></div>
                                <div class="review_content">
                                    <div class="review_name">Emilia Clarke</div>
                                    <div class="review_rating_container">
                                        <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="review_time">2 day ago</div>
                                    </div>
                                    <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="reviews_dots"></div>
                </div>
            </div>
        </div>
    </div>
</div>           <!-------------Ends // Review/Default---------------->




@php
    $setting=DB::table('sitesetting')->first();
@endphp

        <!-------------stats // we deliver services---------------->
 <section id="stats">
    <div class="container-box-md py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="vertical-heading">
                        <h2>We Deliver <br /> <strong>Excellent</strong> Services</h2>
                    </div>
                </div>
            </div>
            <div class="row wow">
                <div class="col-md-3 col-sm-6 col-6">
                    <!--stats-item 01-->
                    <div class="stats-item text-center">
                        <i class="far fa-chart-bar"></i>
                        <h3 class="counter">{{ $setting->experience }}</h3>
                        <p>Years Experiance</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6">
                    <!--stats-item 02-->
                    <div class="stats-item text-center">
                        <i class="fab fa-codepen"></i>
                        <h3 class="counter">{{ $setting->project }}</h3>
                        <p>Project Done</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6">
                    <!--stats-item 03-->
                    <div class="stats-item text-center">
                        <i class="fas fa-trophy"></i>
                        <h3 class="counter">{{ $setting->award }}</h3>
                        <p>Awards Received</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6">
                    <!--stats-item 04-->
                    <div class="stats-item text-center">
                        <i class="fa fa-users"></i>
                        <h3 class="counter">{{ $setting->clients }}</h3>
                        <p>Happy Clients</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--------End stats // we deliver services---------------->




<!-------------------------------clients----------------------------->
<section id="clients">
    <div class="container-box-sm py-5">
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="horizontal-heading text-center">
                        <h4 style="color: #F4C613">Satisfied Clients <br></h4>
                        <h1>Our Happy Clients</h1>
                        <div class="line mt-3"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="clients-details" class="owl-carousel owl-theme">
                        <!--clients 01-->
                        <div class="clients">
                            <img src="{{asset('public/frontend/images/client/client-1.png')}}" alt="clients" class="img-fluid">
                        </div>
                        <!--clients 02-->
                        <div class="clients">
                            <img src="{{asset('public/frontend/images/client/client-2.png')}}" alt="clients" class="img-fluid">
                        </div>
                        <!--clients 03-->
                        <div class="clients">
                            <img src="{{asset('public/frontend/images/client/client-3.png')}}" alt="clients" class="img-fluid">
                        </div>
                        <!--clients 04-->
                        <div class="clients">
                            <img src="{{asset('public/frontend/images/client/client-4.png')}}" alt="clients" class="img-fluid">
                        </div>
                        <!--clients 05-->
                        <div class="clients">
                            <img src="{{asset('public/frontend/images/client/client-5.png')}}" alt="clients" class="img-fluid">
                        </div>
                        <!--clients 06-->
                        <div class="clients">
                            <img src="{{asset('public/frontend/images/client/client-6.png')}}" alt="clients" class="img-fluid">
                        </div>
                        <!--clients 07-->
                        <div class="clients">
                            <img src="{{asset('public/frontend/images/client/client-7.png')}}" alt="clients" class="img-fluid">
                        </div>
                        <!--clients 08-->
                        <div class="clients">
                            <img src="{{asset('public/frontend/images/client/client-8.png')}}" alt="clients" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!------------------clients Ends----------------------->












<!-- Recently Viewed -->

{{-- <div class="viewed">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="viewed_title_container">
                    <h3 class="viewed_title">Recently Viewed</h3>
                    <div class="viewed_nav_container">
                        <div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
                        <div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
                    </div>
                </div>

                <div class="viewed_slider_container">

                    <!-- Recently Viewed Slider -->

                    <div class="owl-carousel owl-theme viewed_slider">

                        <!-- Recently Viewed Item -->
                        <div class="owl-item">
                            <div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="viewed_image"><img src="{{asset('public/frontend/images/sample/w (3).jpg')}}" alt=""></div>
                                <div class="viewed_content text-center">
                                    <div class="viewed_price">$225<span>$300</span></div>
                                    <div class="viewed_name"><a href="#">Beoplay H7</a></div>
                                </div>
                                <ul class="item_marks">
                                    <li class="item_mark item_discount">-25%</li>
                                    <li class="item_mark item_new">new</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Recently Viewed Item -->
                        <div class="owl-item">
                            <div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="viewed_image"><img src="{{asset('public/frontend/images/sample/k (3).jpg')}}" alt=""></div>
                                <div class="viewed_content text-center">
                                    <div class="viewed_price">$379</div>
                                    <div class="viewed_name"><a href="#">LUNA Smartphone</a></div>
                                </div>
                                <ul class="item_marks">
                                    <li class="item_mark item_discount">-25%</li>
                                    <li class="item_mark item_new">new</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Recently Viewed Item -->
                        <div class="owl-item">
                            <div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="viewed_image"><img src="{{asset('public/frontend/images/sample/w (2).jpg')}}" alt=""></div>
                                <div class="viewed_content text-center">
                                    <div class="viewed_price">$225</div>
                                    <div class="viewed_name"><a href="#">Samsung J730F...</a></div>
                                </div>
                                <ul class="item_marks">
                                    <li class="item_mark item_discount">-25%</li>
                                    <li class="item_mark item_new">new</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Recently Viewed Item -->
                        <div class="owl-item">
                            <div class="viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="viewed_image"><img src="images/view_4.jpg" alt=""></div>
                                <div class="viewed_content text-center">
                                    <div class="viewed_price">$379</div>
                                    <div class="viewed_name"><a href="#">Huawei MediaPad...</a></div>
                                </div>
                                <ul class="item_marks">
                                    <li class="item_mark item_discount">-25%</li>
                                    <li class="item_mark item_new">new</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Recently Viewed Item -->
                        <div class="owl-item">
                            <div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="viewed_image"><img src="images/view_5.jpg" alt=""></div>
                                <div class="viewed_content text-center">
                                    <div class="viewed_price">$225<span>$300</span></div>
                                    <div class="viewed_name"><a href="#">Sony PS4 Slim</a></div>
                                </div>
                                <ul class="item_marks">
                                    <li class="item_mark item_discount">-25%</li>
                                    <li class="item_mark item_new">new</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Recently Viewed Item -->
                        <div class="owl-item">
                            <div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="viewed_image"><img src="images/view_6.jpg" alt=""></div>
                                <div class="viewed_content text-center">
                                    <div class="viewed_price">$375</div>
                                    <div class="viewed_name"><a href="#">Speedlink...</a></div>
                                </div>
                                <ul class="item_marks">
                                    <li class="item_mark item_discount">-25%</li>
                                    <li class="item_mark item_new">new</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}




<!-- Brands -->

{{-- <div class="brands">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="brands_slider_container">

                    <!-- Brands Slider -->

                    <div class="owl-carousel owl-theme brands_slider">

                        <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('public/frontend/images/brands_1.jpg') }}" alt=""></div></div>
                        <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('public/frontend/images/brands_1.jpg') }}" alt=""></div></div>
                        <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('public/frontend/images/brands_1.jpg') }}" alt=""></div></div>
                        <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{asset('public/frontend/images/sample/bed (2).jpg')}}" alt=""></div></div>
                        <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="public/frontend/images/sample/bed (3).jpg')}}" alt=""></div></div>
                        <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_6.jpg" alt=""></div></div>
                        <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_7.jpg" alt=""></div></div>
                        <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_8.jpg" alt=""></div></div>

                    </div>

                    <!-- Brands Slider Navigation -->
                    <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
                    <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

                </div>
            </div>
        </div>
    </div>
</div> --}}




<!-- Newsletter -->

<div class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
                    <div class="newsletter_title_container">
                        <div class="newsletter_icon"><img src="{{ asset('public/frontend/images/send.png') }}" alt=""></div>
                        <div class="newsletter_title">Sign up for Newsletter</div>
                        <div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
                    </div>
                    <div class="newsletter_content clearfix">
                        <form action="{{ route('store.newsletters') }}" class="newsletter_form" method="post">
                            @csrf
                            <input type="email" class="newsletter_input" required="required" placeholder="Enter your email address" name="email">
                            <button class="newsletter_button" type="submit">Subscribe</button>
                        </form>
                        <div class="newsletter_unsubscribe_link"><a href="">unsubscribe</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>      <!------------End Newsletter -------------->






<!----------------------------------- FAQ ------------------------------------->
<div id="accordion" role="tablist" class="bg-dark py-5 text-light text-center ">
    <div class="container py-4">
        <div class="row text-center">
            <div class="col">
                <h2 class="mb-0">Frequently Asked Questions</h2>
            </div>
        </div>
        <div class="row mt-5">
        <div class="col-md-12">

            <div class="card bg-light text-dark my-2">
                <div class="card-header text-primary" role="tab">
                    <h4 class="mb-0">
                    <div data-toggle="collapse" href="#questionOne"><i class="fa fa-arrow-circle-down pr-2"></i>How do I post a property for rent/sell? </div>
                    </h4>
                </div>
                <div class="collapse" id="questionOne" data-parent="#accordion">
                    <div class="card-body text-left">
                    <p class="mb-0">
                        <ol class="offset-md-3 text-muted" style="font-size: 15px; word-spacing: 4px">
                            <li> At first “Log-in” to your account, then go to your “profile” page.</li>
                            <li> Select the “Add My Property” option from the menu to get started.</li>
                            <li> Then a “form” will appear in your screens to fill up and submit.</li>
                            <li> Enter basic information about your properties including lease terms and utilities.</li>
                            <li> Upload a few photos too of your properties for rent or sell.</li>
                            <li> Preview your listing to make sure everything looks right.</li>
                            <li> “Submit” your listing.</li>
                        </ol>
                    </p>
                    </div>
                </div>
            </div>

            {{-- <div class="card bg-light text-dark my-2">
                <div class="card-header text-primary" role="tab">
                    <h4 class="mb-0">
                    <div data-toggle="collapse" href="#questionTwo"><i class="fa fa-arrow-circle-down pr-2"></i>What will my rental listing look like? </div>
                    </h4>
                </div>
                <div class="collapse" id="questionTwo" data-parent="#accordion">
                    <div class="card-body">
                    <p class="mb-0" style="font-size: 15px">If you're posting a Rent, you'll see a preview screen before publish your listing through our mail. This shows you a page similar to what renters will see, so you can make any edits you want before it goes live.</p>
                    </div>
                </div>
            </div> --}}

            <div class="card bg-light text-dark my-2">
                <div class="card-header text-primary" role="tab">
                    <h4 class="mb-0">
                    <div data-toggle="collapse" href="#questionThree"><i class="fa fa-arrow-circle-down pr-2"></i>How can I submit feedback on my experience?</div>
                    </h4>
                </div>
                <div class="collapse" id="questionThree" data-parent="#accordion">
                    <div class="card-body">
                    <p class="mb-0" style="font-size: 15px">We’re always open to feedback that will help us give you the best experience possible. If you’re posting a Room for Rent, send your thoughts and suggestions to <a href="mailto:{{ $setting->email_one }}"> {{ $setting->email_one }} </a>. For feedback on other types of rentals you can email <a href="mailto:{{ $setting->email_two }}"> {{ $setting->email_two }} </a>.</p>
                    </div>
                </div>
            </div>

            <div class="card bg-light text-dark my-2">
                <div class="card-header text-primary" role="tab">
                    <h4 class="mb-0">
                    <div data-toggle="collapse" href="#questionFour"><i class="fa fa-arrow-circle-down pr-2"></i>How will I know when a renter is interested in my listing?</div>
                    </h4>
                </div>
                <div class="collapse" id="questionFour" data-parent="#accordion">
                    <div class="card-body">
                    <p class="mb-0" style="font-size: 15px; word-spacing: 2px">How renters contact you is up to you. You can choose to display your phone number so renters can call or text you directly. If you don’t want to share your number we’ll personally knock you and will forward renter’s written inquiries to your email address. We don’t display your email address, so you don’t have to worry about spam.</p>
                    </div>
                </div>
            </div>

        </div>

        </div>
    </div>
</div>      <!-------------------End FAQ ------------------>







{{--/*==================================
            clients
====================================*/ --}}
<script>
$(function () {
    $("#clients-details").owlCarousel({
        items: 6,
        autoplay: true,
        smartSpeed: 500,
        loop: true,
        dots: true,
        nav: false,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        responsive: {
            // breakpoint from 0 up
            0: {
                items: 2
            },
            // breakpoint from 480 up
            480: {
                items: 3
            },
            // breakpoint from 768 up
            768: {
                items: 6
            }
        }

    });
});
</script>

 <!-- ------------------------------------------------------- -->

@endsection
