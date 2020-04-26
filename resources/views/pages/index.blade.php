
<!----Ekhane FrontEnd tar full OUTPUT show ache,"Top Header+Footer" + 'NAV' + "yield(content)" Code ache --->
@extends('layouts.app')
@section('content')
@include('layouts.menubar')

{{----------- for applying ajax in wishlist --------------}}
{{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> --}}
<script src="{{asset('public/frontend/js/jquery.min.js')}}"></script>

{{-- @php
 $featured=DB::table('products')->where('status',1)->orderBy('id','desc')->limit(24)->get();    //sob_product(available)
 $trend=DB::table('products')->where('status',1)->where('trend',1)->orderBy('id','desc')->limit(24)->get();
 $best=DB::table('products')->where('status',1)->where('best_rated',1)->orderBy('id','desc')->limit(24)->get();
 $hot=DB::table('products')->join('brands','products.brand_id','brands.id')->select('brands.brand_name','products.*')->where('products.status',1)->where('hot_deal',1)->orderBy('id','desc')->limit(4)->get();
@endphp --}}



<!-- Characteristics -->

{{-- <div class="characteristics">
    <div class="container">
        <div class="row">

            <!-- Char. Item -->
            <div class="col-lg-3 col-md-6 char_col">

                <div class="char_item d-flex flex-row align-items-center justify-content-start">
                    <div class="char_icon"><img src="images/char_1.png" alt=""></div>
                    <div class="char_content">
                        <div class="char_title">Free Delivery</div>
                        <div class="char_subtitle">from $50</div>
                    </div>
                </div>
            </div>

            <!-- Char. Item -->
            <div class="col-lg-3 col-md-6 char_col">

                <div class="char_item d-flex flex-row align-items-center justify-content-start">
                    <div class="char_icon"><img src="images/char_2.png" alt=""></div>
                    <div class="char_content">
                        <div class="char_title">Free Delivery</div>
                        <div class="char_subtitle">from $50</div>
                    </div>
                </div>
            </div>

            <!-- Char. Item -->
            <div class="col-lg-3 col-md-6 char_col">

                <div class="char_item d-flex flex-row align-items-center justify-content-start">
                    <div class="char_icon"><img src="images/char_3.png" alt=""></div>
                    <div class="char_content">
                        <div class="char_title">Free Delivery</div>
                        <div class="char_subtitle">from $50</div>
                    </div>
                </div>
            </div>

            <!-- Char. Item -->
            <div class="col-lg-3 col-md-6 char_col">

                <div class="char_item d-flex flex-row align-items-center justify-content-start">
                    <div class="char_icon"><img src="images/char_4.png" alt=""></div>
                    <div class="char_content">
                        <div class="char_title">Free Delivery</div>
                        <div class="char_subtitle">from $50</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<!-- Deals of the week -->

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

                            <!-- Deals Item -->
                            <div class="owl-item deals_item">

                                <div class="deals_image portfolio-item" title="Click for details">
                                    <img src="{{asset('public/frontend/images/sample/bed (3).jpg')}}">
                                    <div class="portfolio-item-overlay">
                                        <div class="portfolio-item-details text-center">
                                            <!--item logo-->
                                            <h3>Flat for Rent</h3>
                                            <!--item strips-->
                                            <span></span>
                                            <!--item description-->
                                            <p>Dhanmonti, Dhaka</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="deals_content">
                                    <div class="deals_info_line d-flex flex-row justify-content-start">
                                        <div class="deals_item_category"><a href="#">Dhaka</a></div>
                                        <div class="deals_item_price_a ml-auto"><del>৳ 60,000</del></div>
                                    </div>
                                    <div class="deals_info_line d-flex flex-row justify-content-start">
                                        <div class="deals_item_name">Dhanmondi</div>
                                        <div class="deals_item_price ml-auto" style="font-size: 18px">৳ 55,000</div>
                                    </div>


                                    <div class="DealsWeek row no-gutters align-items-center justify-content-start mt-1">
                                        <span class="col-md-5">Home For Rent</span> <span class="col-md-7 mr-auto justify-content-start"><hr></span>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-12 mb-2">Road NO 1, Dhanmodi</div>
                                        <div class="col-md-12">
                                            <i class="fas fa-bed" title="Bed Room"> 5</i>|
                                            <i class="fas fa-bath" title="Bath Room"> 4</i>|
                                            <i class="fas fa-car" title="Parking"> 1</i>|
                                            <i class="fas fa-home" title="Area"> 1,686 sqft.</i>
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


                            <!-- Deals Item -->
                            <div class="owl-item deals_item">

                                <div class="deals_image portfolio-item" title="Click for details">
                                    <img src="{{asset('public/frontend/images/sample/bed (2).jpg')}}">
                                    <div class="portfolio-item-overlay">
                                        <div class="portfolio-item-details text-center">
                                            <!--item logo-->
                                            <h3>Apartment For Sell</h3>
                                            <!--item strips-->
                                            <span></span>
                                            <!--item description-->
                                            <p>Halishahar, Chattogram</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="deals_content">
                                    <div class="deals_info_line d-flex flex-row justify-content-start">
                                        <div class="deals_item_category"><a href="#">Chattogram</a></div>
                                        <div class="deals_item_price_a ml-auto"><del>৳ 6,500,000</del></div>
                                    </div>
                                    <div class="deals_info_line d-flex flex-row justify-content-start">
                                        <div class="deals_item_name">Halishahar</div>
                                        <div class="deals_item_price ml-auto" style="font-size: 18px">৳ 5,900,000</div>
                                    </div>


                                    <div class="DealsWeek row  no-gutters align-items-center justify-content-start mt-1">
                                        <span class="col-md-5">Apartment For Sell</span> <span class="col-md-7 mr-auto justify-content-start"><hr></span>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-12 mb-2">39 No. South Halishahar Ward, Halishahar</div>
                                        <div class="col-md-12">
                                            <i class="fas fa-bed" title="Bed Room"> 4</i>|
                                            <i class="fas fa-bath" title="Bath Room"> 4</i>|
                                            <i class="fas fa-car" title="Parking"> 2</i>|
                                            <i class="fas fa-home" title="Area"> 1,486 sqft.</i>
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
                                                    <div id="deals_timer1_hr" class="deals_timer_hr"></div>
                                                    <span>hours</span>
                                                </div>
                                                <div class="deals_timer_unit">
                                                    <div id="deals_timer1_min" class="deals_timer_min"></div>
                                                    <span>mins</span>
                                                </div>
                                                <div class="deals_timer_unit">
                                                    <div id="deals_timer1_sec" class="deals_timer_sec"></div>
                                                    <span>secs</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Deals Item -->
                            <div class="owl-item deals_item">

                                <div class="deals_image portfolio-item" title="Click for details">
                                    <img src="{{asset('public/frontend/images/sample/bed (1).jpg')}}">
                                    <div class="portfolio-item-overlay">
                                        <div class="portfolio-item-details text-center">
                                            <!--item logo-->
                                            <h3>Apartment For Rent</h3>
                                            <!--item strips-->
                                            <span></span>
                                            <!--item description-->
                                            <p>Oxyzen, Chattogram</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="deals_content">
                                    <div class="deals_info_line d-flex flex-row justify-content-start">
                                        <div class="deals_item_category"><a href="#">Chattogram</a></div>
                                        <div class="deals_item_price_a ml-auto"><del>৳ 7,500,000</del></div>
                                    </div>
                                    <div class="deals_info_line d-flex flex-row justify-content-start">
                                        <div class="deals_item_name">Oxyzen</div>
                                        <div class="deals_item_price ml-auto" style="font-size: 18px">৳ 6,900,000</div>
                                    </div>


                                    <div class="DealsWeek row no-gutters align-items-center justify-content-start mt-1">
                                        <span class="col-md-5">Apartment For Rent</span> <span class="col-md-7 mr-auto justify-content-start"><hr></span>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-12 mb-2">39 No. Ananna Abasik, Oxyzen</div>
                                        <div class="col-md-12">
                                            <i class="fas fa-bed" title="Bed Room"> 3</i>|
                                            <i class="fas fa-bath" title="Bath Room"> 2</i>|
                                            <i class="fas fa-car" title="Parking"> 0</i>|
                                            <i class="fas fa-home" title="Area"> 1,086 sqft.</i>
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
                                                    <div id="deals_timer3_hr" class="deals_timer_hr"></div>
                                                    <span>hours</span>
                                                </div>
                                                <div class="deals_timer_unit">
                                                    <div id="deals_timer3_min" class="deals_timer_min"></div>
                                                    <span>mins</span>
                                                </div>
                                                <div class="deals_timer_unit">
                                                    <div id="deals_timer3_sec" class="deals_timer_sec"></div>
                                                    <span>secs</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="deals_slider_nav_container">
                        <div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i></div>
                        <div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i></div>
                    </div>
                </div>



    <!----------------- Featured ------------------------------>
                <div class="featured">
                    <div class="tabbed_container">
                        <div class="tabs">
                            <ul class="clearfix">
                                <li class="active">Featured</li>
                                <li>On Sale</li>
                                <li>Best Rated</li>
                            </ul>
                            <div class="tabs_line"><span></span></div>
                        </div>

                        <!-- Product Panel -->
                        <div class="product_panel panel active">
                            <div class="featured_slider slider">

                                <!-- Slider Item -->
                                <div class="featured_slider_item">
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
                                                    <i class="fas fa-bed" title="Bed Room">4</i> |
                                                    <i class="fas fa-bath" title="Bath Room">4</i> |
                                                    {{-- <i class="fas fa-car">2</i>| --}}
                                                    <i class="fas fa-home" title="Area">1,486 sqft.</i>
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
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                        <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                            <img src="{{asset('public/frontend/images/sample/bed (1).jpg')}}" width="130px" height="125px" class="img-fluid" style="margin-left:15px;">
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
                                                <button class="product_cart_button">Add to Cart</button>
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
                                <div class="featured_slider_item">
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
                                                <button class="product_cart_button">Add to Cart</button>
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
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                        <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                            <img src="{{asset('public/frontend/images/sample/bed (3).jpg')}}" width="130px" height="125px">
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
                                                    <i class="fas fa-bed" title="Bed Room">4</i> |
                                                    <i class="fas fa-bath" title="Bath Room">4</i> |
                                                    {{-- <i class="fas fa-car">2</i>| --}}
                                                    <i class="fas fa-home" title="Area">1,486 sqft.</i>
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
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                        <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                            <img src="{{asset('public/frontend/images/sample/bed (3).jpg')}}" width="130px" height="125px">
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
                                                    <i class="fas fa-bed" title="Bed Room">4</i> |
                                                    <i class="fas fa-bath" title="Bath Room">4</i> |
                                                    {{-- <i class="fas fa-car">2</i>| --}}
                                                    <i class="fas fa-home" title="Area">1,486 sqft.</i>
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
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                        <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                            <img src="{{asset('public/frontend/images/sample/bed (3).jpg')}}" width="130px" height="125px">
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
                                                    <i class="fas fa-bed" title="Bed Room">4</i> |
                                                    <i class="fas fa-bath" title="Bath Room">4</i> |
                                                    {{-- <i class="fas fa-car">2</i>| --}}
                                                    <i class="fas fa-home" title="Area">1,486 sqft.</i>
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
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                        <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                            <img src="{{asset('public/frontend/images/sample/bed (3).jpg')}}" width="130px" height="125px">
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
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                        <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                            <img src="{{asset('public/frontend/images/sample/bed (3).jpg')}}" width="130px" height="125px">
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
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                        <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                            <img src="{{asset('public/frontend/images/sample/bed (3).jpg')}}" width="130px" height="125px">
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
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                        <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                            <img src="{{asset('public/frontend/images/sample/bed (1).jpg')}}" width="130px" height="125px">
                                            <div class="portfolio-item-overlay">
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
                                                <div class="col-md-12 pt-1 text-muted">
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
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                        <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                            <img src="{{asset('public/frontend/images/sample/bed (2).jpg')}}" width="130px" height="125px">
                                            <div class="portfolio-item-overlay">
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
                                                <div class="col-md-12 pt-1 text-muted">
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
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                        <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                            <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px">
                                            <div class="portfolio-item-overlay">
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
                                                <div class="col-md-12 pt-1 text-muted">
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
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                        <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                            <img src="{{asset('public/frontend/images/sample/bed (3).jpg')}}" width="130px" height="125px">
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
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                        <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                            <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px">
                                            <div class="portfolio-item-overlay">
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
                                                <div class="col-md-12 pt-1 text-muted">
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
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                        <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                            <img src="{{asset('public/frontend/images/sample/bed (3).jpg')}}" width="130px" height="125px">
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
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_8.png" alt=""></div>
                                        <div class="product_content">
                                            <div class="product_price">$225</div>
                                            <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                                            <div class="product_extras">
                                                <div class="product_color">
                                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                                    <input type="radio" name="product_color" style="background:#000000">
                                                    <input type="radio" name="product_color" style="background:#999999">
                                                </div>
                                                <button class="product_cart_button">Add to Cart</button>
                                            </div>
                                        </div>
                                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                                        <ul class="product_marks">
                                            <li class="product_mark product_discount"></li>
                                            <li class="product_mark product_new">new</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="featured_slider_dots_cover"></div>
                        </div>



                        <!-- Product Panel -->

                        <div class="product_panel panel">
                            <div class="featured_slider slider">

                                <!-- Slider Item -->
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                        <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                            <img src="{{asset('public/frontend/images/sample/bed (3).jpg')}}" width="130px" height="125px">
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
                                                    <i class="fas fa-bed" title="Bed Room">4</i> |
                                                    <i class="fas fa-bath" title="Bath Room">4</i> |
                                                    {{-- <i class="fas fa-car">2</i>| --}}
                                                    <i class="fas fa-home" title="Area">1,486 sqft.</i>
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
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                        <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                            <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px">
                                            <div class="portfolio-item-overlay">
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
                                                <div class="col-md-12 pt-1 text-muted">
                                                    <i class="fas fa-bed" title="Bed Room">4</i> |
                                                    <i class="fas fa-bath" title="Bath Room">4</i> |
                                                    {{-- <i class="fas fa-car">2</i>| --}}
                                                    <i class="fas fa-home" title="Area">1,486 sqft.</i>
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
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                        <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                            <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px">
                                            <div class="portfolio-item-overlay">
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
                                                <div class="col-md-12 pt-1 text-muted">
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
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                        <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                            <img src="{{asset('public/frontend/images/sample/bed (4).jpg')}}" width="130px" height="125px">
                                            <div class="portfolio-item-overlay">
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
                                                <div class="col-md-12 pt-1 text-muted">
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
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_5.png" alt=""></div>
                                        <div class="product_content">
                                            <div class="product_price">$225</div>
                                            <div class="product_name"><div><a href="product.html">Canon STM Kit...</a></div></div>
                                            <div class="product_extras">
                                                <div class="product_color">
                                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                                    <input type="radio" name="product_color" style="background:#000000">
                                                    <input type="radio" name="product_color" style="background:#999999">
                                                </div>
                                                <button class="product_cart_button">Add to Cart</button>
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
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_6.png" alt=""></div>
                                        <div class="product_content">
                                            <div class="product_price">$379</div>
                                            <div class="product_name"><div><a href="product.html">Samsung J330F...</a></div></div>
                                            <div class="product_extras">
                                                <div class="product_color">
                                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                                    <input type="radio" name="product_color" style="background:#000000">
                                                    <input type="radio" name="product_color" style="background:#999999">
                                                </div>
                                                <button class="product_cart_button">Add to Cart</button>
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
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_7.png" alt=""></div>
                                        <div class="product_content">
                                            <div class="product_price">$379</div>
                                            <div class="product_name"><div><a href="product.html">Lenovo IdeaPad</a></div></div>
                                            <div class="product_extras">
                                                <div class="product_color">
                                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                                    <input type="radio" name="product_color" style="background:#000000">
                                                    <input type="radio" name="product_color" style="background:#999999">
                                                </div>
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
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_8.png" alt=""></div>
                                        <div class="product_content">
                                            <div class="product_price">$225</div>
                                            <div class="product_name"><div><a href="product.html">Digitus EDNET...</a></div></div>
                                            <div class="product_extras">
                                                <div class="product_color">
                                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                                    <input type="radio" name="product_color" style="background:#000000">
                                                    <input type="radio" name="product_color" style="background:#999999">
                                                </div>
                                                <button class="product_cart_button">Add to Cart</button>
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
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_1.png" alt=""></div>
                                        <div class="product_content">
                                            <div class="product_price">$225</div>
                                            <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                                            <div class="product_extras">
                                                <div class="product_color">
                                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                                    <input type="radio" name="product_color" style="background:#000000">
                                                    <input type="radio" name="product_color" style="background:#999999">
                                                </div>
                                                <button class="product_cart_button">Add to Cart</button>
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
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_2.png" alt=""></div>
                                        <div class="product_content">
                                            <div class="product_price">$379</div>
                                            <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                                            <div class="product_extras">
                                                <div class="product_color">
                                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                                    <input type="radio" name="product_color" style="background:#000000">
                                                    <input type="radio" name="product_color" style="background:#999999">
                                                </div>
                                                <button class="product_cart_button">Add to Cart</button>
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
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_3.png" alt=""></div>
                                        <div class="product_content">
                                            <div class="product_price">$379</div>
                                            <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                                            <div class="product_extras">
                                                <div class="product_color">
                                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                                    <input type="radio" name="product_color" style="background:#000000">
                                                    <input type="radio" name="product_color" style="background:#999999">
                                                </div>
                                                <button class="product_cart_button">Add to Cart</button>
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
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_4.png" alt=""></div>
                                        <div class="product_content">
                                            <div class="product_price">$225</div>
                                            <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                                            <div class="product_extras">
                                                <div class="product_color">
                                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                                    <input type="radio" name="product_color" style="background:#000000">
                                                    <input type="radio" name="product_color" style="background:#999999">
                                                </div>
                                                <button class="product_cart_button">Add to Cart</button>
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
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_5.png" alt=""></div>
                                        <div class="product_content">
                                            <div class="product_price">$225</div>
                                            <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                                            <div class="product_extras">
                                                <div class="product_color">
                                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                                    <input type="radio" name="product_color" style="background:#000000">
                                                    <input type="radio" name="product_color" style="background:#999999">
                                                </div>
                                                <button class="product_cart_button">Add to Cart</button>
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
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_6.png" alt=""></div>
                                        <div class="product_content">
                                            <div class="product_price">$379</div>
                                            <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                                            <div class="product_extras">
                                                <div class="product_color">
                                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                                    <input type="radio" name="product_color" style="background:#000000">
                                                    <input type="radio" name="product_color" style="background:#999999">
                                                </div>
                                                <button class="product_cart_button">Add to Cart</button>
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
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_7.png" alt=""></div>
                                        <div class="product_content">
                                            <div class="product_price">$379</div>
                                            <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                                            <div class="product_extras">
                                                <div class="product_color">
                                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                                    <input type="radio" name="product_color" style="background:#000000">
                                                    <input type="radio" name="product_color" style="background:#999999">
                                                </div>
                                                <button class="product_cart_button">Add to Cart</button>
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
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_8.png" alt=""></div>
                                        <div class="product_content">
                                            <div class="product_price">$225</div>
                                            <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                                            <div class="product_extras">
                                                <div class="product_color">
                                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                                    <input type="radio" name="product_color" style="background:#000000">
                                                    <input type="radio" name="product_color" style="background:#999999">
                                                </div>
                                                <button class="product_cart_button">Add to Cart</button>
                                            </div>
                                        </div>
                                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                                        <ul class="product_marks">
                                            <li class="product_mark product_discount"></li>
                                            <li class="product_mark product_new">new</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="featured_slider_dots_cover"></div>
                        </div>

                        <!-- Product Panel -->

                        <div class="product_panel panel">
                            <div class="featured_slider slider">

                                <!-- Slider Item -->
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                        <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                            <img src="{{asset('public/frontend/images/sample/bed (3).jpg')}}" width="130px" height="125px">
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
                                                    <i class="fas fa-bed" title="Bed Room">4</i> |
                                                    <i class="fas fa-bath" title="Bath Room">4</i> |
                                                    {{-- <i class="fas fa-car">2</i>| --}}
                                                    <i class="fas fa-home" title="Area">1,486 sqft.</i>
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
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                        <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                            <img src="{{asset('public/frontend/images/sample/bed (3).jpg')}}" width="130px" height="125px">
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
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_3.png" alt=""></div>
                                        <div class="product_content">
                                            <div class="product_price">$379</div>
                                            <div class="product_name"><div><a href="product.html">Sony MDRZX310W</a></div></div>
                                            <div class="product_extras">
                                                <div class="product_color">
                                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                                    <input type="radio" name="product_color" style="background:#000000">
                                                    <input type="radio" name="product_color" style="background:#999999">
                                                </div>
                                                <button class="product_cart_button">Add to Cart</button>
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
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_2.png" alt=""></div>
                                        <div class="product_content">
                                            <div class="product_price">$379</div>
                                            <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                                            <div class="product_extras">
                                                <div class="product_color">
                                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                                    <input type="radio" name="product_color" style="background:#000000">
                                                    <input type="radio" name="product_color" style="background:#999999">
                                                </div>
                                                <button class="product_cart_button">Add to Cart</button>
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
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_3.png" alt=""></div>
                                        <div class="product_content">
                                            <div class="product_price">$379</div>
                                            <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                                            <div class="product_extras">
                                                <div class="product_color">
                                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                                    <input type="radio" name="product_color" style="background:#000000">
                                                    <input type="radio" name="product_color" style="background:#999999">
                                                </div>
                                                <button class="product_cart_button">Add to Cart</button>
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
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_4.png" alt=""></div>
                                        <div class="product_content">
                                            <div class="product_price">$225</div>
                                            <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                                            <div class="product_extras">
                                                <div class="product_color">
                                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                                    <input type="radio" name="product_color" style="background:#000000">
                                                    <input type="radio" name="product_color" style="background:#999999">
                                                </div>
                                                <button class="product_cart_button">Add to Cart</button>
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
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_5.png" alt=""></div>
                                        <div class="product_content">
                                            <div class="product_price">$225</div>
                                            <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                                            <div class="product_extras">
                                                <div class="product_color">
                                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                                    <input type="radio" name="product_color" style="background:#000000">
                                                    <input type="radio" name="product_color" style="background:#999999">
                                                </div>
                                                <button class="product_cart_button">Add to Cart</button>
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
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_6.png" alt=""></div>
                                        <div class="product_content">
                                            <div class="product_price">$379</div>
                                            <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                                            <div class="product_extras">
                                                <div class="product_color">
                                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                                    <input type="radio" name="product_color" style="background:#000000">
                                                    <input type="radio" name="product_color" style="background:#999999">
                                                </div>
                                                <button class="product_cart_button">Add to Cart</button>
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
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_7.png" alt=""></div>
                                        <div class="product_content">
                                            <div class="product_price">$379</div>
                                            <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                                            <div class="product_extras">
                                                <div class="product_color">
                                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                                    <input type="radio" name="product_color" style="background:#000000">
                                                    <input type="radio" name="product_color" style="background:#999999">
                                                </div>
                                                <button class="product_cart_button">Add to Cart</button>
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
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_8.png" alt=""></div>
                                        <div class="product_content">
                                            <div class="product_price">$225</div>
                                            <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                                            <div class="product_extras">
                                                <div class="product_color">
                                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                                    <input type="radio" name="product_color" style="background:#000000">
                                                    <input type="radio" name="product_color" style="background:#999999">
                                                </div>
                                                <button class="product_cart_button">Add to Cart</button>
                                            </div>
                                        </div>
                                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                                        <ul class="product_marks">
                                            <li class="product_mark product_discount"></li>
                                            <li class="product_mark product_new">new</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="featured_slider_dots_cover"></div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>    <!--------------------------- End of "Deals of the Week" -------------------------------------->






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
                                                    <button class="product_cart_button">Add to Cart</button>
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
                                                <img src="{{asset('public/frontend/images/sample/bed (3).jpg')}}" width="130px" height="125px" class="img-fluid">
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
                                                <div class="product_price discount my-2">৳50,000<span><del></del></span></div>
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
                                                    <button class="product_cart_button">Add to Cart</button>
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
                                        <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_8.jpg" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$225</div>
                                                <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                                                <div class="product_extras">
                                                    <div class="product_color">
                                                        <input type="radio" checked name="product_color" style="background:#b19c83">
                                                        <input type="radio" name="product_color" style="background:#000000">
                                                        <input type="radio" name="product_color" style="background:#999999">
                                                    </div>
                                                    <button class="product_cart_button">Add to Cart</button>
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
                                        <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_1.jpg" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$225</div>
                                                <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                                                <div class="product_extras">
                                                    <div class="product_color">
                                                        <input type="radio" checked name="product_color" style="background:#b19c83">
                                                        <input type="radio" name="product_color" style="background:#000000">
                                                        <input type="radio" name="product_color" style="background:#999999">
                                                    </div>
                                                    <button class="product_cart_button">Add to Cart</button>
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
                                        <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_2.jpg" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$379</div>
                                                <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                                                <div class="product_extras">
                                                    <div class="product_color">
                                                        <input type="radio" checked name="product_color" style="background:#b19c83">
                                                        <input type="radio" name="product_color" style="background:#000000">
                                                        <input type="radio" name="product_color" style="background:#999999">
                                                    </div>
                                                    <button class="product_cart_button">Add to Cart</button>
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
                                        <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_3.jpg" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$379</div>
                                                <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                                                <div class="product_extras">
                                                    <div class="product_color">
                                                        <input type="radio" checked name="product_color" style="background:#b19c83">
                                                        <input type="radio" name="product_color" style="background:#000000">
                                                        <input type="radio" name="product_color" style="background:#999999">
                                                    </div>
                                                    <button class="product_cart_button">Add to Cart</button>
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
                                        <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_4.jpg" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$225</div>
                                                <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                                                <div class="product_extras">
                                                    <div class="product_color">
                                                        <input type="radio" checked name="product_color" style="background:#b19c83">
                                                        <input type="radio" name="product_color" style="background:#000000">
                                                        <input type="radio" name="product_color" style="background:#999999">
                                                    </div>
                                                    <button class="product_cart_button">Add to Cart</button>
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
                                        <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_5.jpg" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$225</div>
                                                <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                                                <div class="product_extras">
                                                    <div class="product_color">
                                                        <input type="radio" checked name="product_color" style="background:#b19c83">
                                                        <input type="radio" name="product_color" style="background:#000000">
                                                        <input type="radio" name="product_color" style="background:#999999">
                                                    </div>
                                                    <button class="product_cart_button">Add to Cart</button>
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
                                        <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_6.jpg" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$379</div>
                                                <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                                                <div class="product_extras">
                                                    <div class="product_color">
                                                        <input type="radio" checked name="product_color" style="background:#b19c83">
                                                        <input type="radio" name="product_color" style="background:#000000">
                                                        <input type="radio" name="product_color" style="background:#999999">
                                                    </div>
                                                    <button class="product_cart_button">Add to Cart</button>
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
                                        <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_7.jpg" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$379</div>
                                                <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                                                <div class="product_extras">
                                                    <div class="product_color">
                                                        <input type="radio" checked name="product_color" style="background:#b19c83">
                                                        <input type="radio" name="product_color" style="background:#000000">
                                                        <input type="radio" name="product_color" style="background:#999999">
                                                    </div>
                                                    <button class="product_cart_button">Add to Cart</button>
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
                                        <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_7.jpg" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$379</div>
                                                <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                                                <div class="product_extras">
                                                    <div class="product_color">
                                                        <input type="radio" checked name="product_color" style="background:#b19c83">
                                                        <input type="radio" name="product_color" style="background:#000000">
                                                        <input type="radio" name="product_color" style="background:#999999">
                                                    </div>
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
                                        <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_8.jpg" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$225</div>
                                                <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                                                <div class="product_extras">
                                                    <div class="product_color">
                                                        <input type="radio" checked name="product_color" style="background:#b19c83">
                                                        <input type="radio" name="product_color" style="background:#000000">
                                                        <input type="radio" name="product_color" style="background:#999999">
                                                    </div>
                                                    <button class="product_cart_button">Add to Cart</button>
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
                                        <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_1.jpg" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$225</div>
                                                <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                                                <div class="product_extras">
                                                    <div class="product_color">
                                                        <input type="radio" checked name="product_color" style="background:#b19c83">
                                                        <input type="radio" name="product_color" style="background:#000000">
                                                        <input type="radio" name="product_color" style="background:#999999">
                                                    </div>
                                                    <button class="product_cart_button">Add to Cart</button>
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
                                        <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_2.jpg" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$379</div>
                                                <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                                                <div class="product_extras">
                                                    <div class="product_color">
                                                        <input type="radio" checked name="product_color" style="background:#b19c83">
                                                        <input type="radio" name="product_color" style="background:#000000">
                                                        <input type="radio" name="product_color" style="background:#999999">
                                                    </div>
                                                    <button class="product_cart_button">Add to Cart</button>
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
                                        <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_3.jpg" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$379</div>
                                                <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                                                <div class="product_extras">
                                                    <div class="product_color">
                                                        <input type="radio" checked name="product_color" style="background:#b19c83">
                                                        <input type="radio" name="product_color" style="background:#000000">
                                                        <input type="radio" name="product_color" style="background:#999999">
                                                    </div>
                                                    <button class="product_cart_button">Add to Cart</button>
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
                                        <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_5.jpg" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$225</div>
                                                <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                                                <div class="product_extras">
                                                    <div class="product_color">
                                                        <input type="radio" checked name="product_color" style="background:#b19c83">
                                                        <input type="radio" name="product_color" style="background:#000000">
                                                        <input type="radio" name="product_color" style="background:#999999">
                                                    </div>
                                                    <button class="product_cart_button">Add to Cart</button>
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
                                        <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_6.jpg" alt=""></div>
                                            <div class="product_content">
                                                <div class="product_price">$379</div>
                                                <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                                                <div class="product_extras">
                                                    <div class="product_color">
                                                        <input type="radio" checked name="product_color" style="background:#b19c83">
                                                        <input type="radio" name="product_color" style="background:#000000">
                                                        <input type="radio" name="product_color" style="background:#999999">
                                                    </div>
                                                    <button class="product_cart_button">Add to Cart</button>
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
                                            <span class="col-md-6">Home For Rent</span> <span class="col-md-6 mr-auto justify-content-start"><hr></span>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-md-12">
                                                <i class="fas fa-bed" title="Bed Room"> 5</i> |
                                                <i class="fas fa-bath" title="Bath Room"> 4</i> |
                                                <i class="fas fa-car" title="Parking"> 1</i> |
                                                <i class="fas fa-home" title="Area"> 1,686 sqft.</i>
                                            </div>
                                        </div>
                                        <form action="#"><button class="arrivals_single_button" style="margin-top: 2px;">Add to Cart</button></form>
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
                                        <span class="col-md-8">Appartment For Rent</span> <span class="col-md-4 mr-auto justify-content-start"><hr></span>
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
                                        <span class="col-md-8">Appartment For Rent</span> <span class="col-md-4 mr-auto justify-content-start"><hr></span>
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
                                      <span class="col-md-8">Appartment For Rent</span> <span class="col-md-4 mr-auto justify-content-start"><hr></span>
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
                                      <span class="col-md-8">Appartment For Rent</span> <span class="col-md-4 mr-auto justify-content-start"><hr></span>
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
                                      <span class="col-md-8">Appartment For Rent</span> <span class="col-md-4 mr-auto justify-content-start"><hr></span>
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
                                      <span class="col-md-8">Appartment For Rent</span> <span class="col-md-4 mr-auto justify-content-start"><hr></span>
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
</div>




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
                        <h3 class="counter">26</h3>
                        <p>Years Experiance</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6">
                    <!--stats-item 02-->
                    <div class="stats-item text-center">
                        <i class="fab fa-codepen"></i>
                        <h3 class="counter">300</h3>
                        <p>Project Done</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6">
                    <!--stats-item 03-->
                    <div class="stats-item text-center">
                        <i class="fas fa-trophy"></i>
                        <h3 class="counter">100</h3>
                        <p>Awards Received</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6">
                    <!--stats-item 04-->
                    <div class="stats-item text-center">
                        <i class="fa fa-users"></i>
                        <h3 class="counter">276</h3>
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

<div class="viewed">
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
</div>

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
                        <form action="#" class="newsletter_form">
                            <input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
                            <button class="newsletter_button">Subscribe</button>
                        </form>
                        <div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>      <!------------End Newsletter -------------->




<!--------------product "Cart_add" modal------------------>

<!-- Modal -->
{{-- <div class="modal fade " id="cartmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="exampleModalLabel">Product Short Description</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
         <div class="row">
            <div class="col-md-4">

                <div class="card" style="width: 16rem;">
                <img src="" class="card-img-top" id="pimage" style="height: 240px;">
                <div class="card-body">

                </div>
              </div>
            </div>
            <div class="col-md-4 ml-auto">
                <ul class="list-group">
                    <li class="list-group-item"> <h4 class="card-title" id="pname"></h4></span></li>
                    <li class="list-group-item">Product code: <span id="pcode"> </span></li>
                    <li class="list-group-item">Category:  <span id="pcat"> </span></li>
                    <li class="list-group-item">SubCategory:  <span id="psubcat"> </span></li>
                    <li class="list-group-item">Brand: <span id="pbrand"> </span></li>
                    <li class="list-group-item">Stock: <span class="badge " style="background: green; color:white;">Available</span></li>
                </ul>
            </div>
            <div class="col-md-4 ">
                <form action="" method="post">
                  @csrf
                  <input type="hidden" name="product_id" id="product_id">   <!---hidden//taking_ID--->
                  <div class="form-group" id="colordiv">
                    <label for="">Color</label>
                    <select name="color" class="form-control">
                    </select>
                  </div>
                   <div class="form-group" id="sizediv" >
                    <label for="exampleInputEmail1">Size</label>
                    <select name="size" class="form-control" id="size">
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Quantity</label>
                    <input type="number" class="form-control" value="1" name="qty">
                  </div>
                  <button type="submit" class="btn btn-primary">Add To Cart</button>
                </form>
             </div>
           </div>
        </div>
      </div>
    </div>
  </div> --}}

  <!--modal end-->

<!---Model er JS/ajax code-->
  <script type="text/javascript">
      function productview(id){     //--(productview(id)//-->from 'add to Cart' button div)
            $.ajax({
                // url: "{{  url('/cart/product/view/') }}/"+id,    //-----------------------//-------------//------
                type:"GET",
                dataType:"json",
                success:function(data) {
                    $('#pname').text(data.product.product_name);
                    $('#pimage').attr('src',data.product.image_one);
                    $('#pcat').text(data.product.category_name);
                    $('#psubcat').text(data.product.subcategory_name);
                    $('#pbrand').text(data.product.brand_name);
                    $('#pcode').text(data.product.product_code);
                    $('#product_id').val(data.product.id);

                    var d =$('select[name="size"]').empty();
                    $.each(data.size, function(key, value){
                        $('select[name="size"]').append('<option value="'+ value +'">' + value + '</option>');
                        if (data.size == "") {
                                $('#sizediv').hide();
                        }else{
                                $('#sizediv').show();
                        }
                    });

                    var d =$('select[name="color"]').empty();
                    $.each(data.color, function(key, value){
                        $('select[name="color"]').append('<option value="'+ value +'">' + value + '</option>');
                            if (data.color == "") {
                                $('#colordiv').hide();
                        } else{
                                $('#colordiv').show();
                        }
                    });
               }
        })
      }
  </script>


{{----------- for applying ajax in wishlist --------------}}

{{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> --}}
{{---   OR----////----
    <script src="{{asset('public/frontend/js/jquery.min.js')}}"></script> --}}


{{-- -----------------------for wishlist------------------------ --}}
<script type="text/javascript">
    $(document).ready(function() {
          $('.addwishlist').on('click', function(){     //--from add to 'wishlist' button/name //-->(.addwishlist)
            var id = $(this).data('id');
            if(id) {
               $.ajax({
                   //url: "{{  url('/add/wishlist/') }}/"+id,   //------------------//----------------//---------
                   type:"GET",
                   dataType:"json",
                   success:function(data) {
                     const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000
                      })

                     if($.isEmptyObject(data.error)){
                          Toast.fire({
                            type: 'success',
                            title: data.success
                          })
                     }else{
                           Toast.fire({
                              type: 'error',
                              title: data.error
                          })
                     }
                   },
               });
           } else {
               alert('danger');
           }
            e.preventDefault();
       });
   });
</script>


<!--Nicher ajax er 'add to cart' er code ta main index.blade.php page e 'add to cart' e click korlei Ajax diye kono load charai 'Cart' e add hoye notification asto(mane auto load hoye jetho),sei bebostar jonno code ta likha hoyechilo,kinto pore frontend theke sob data(size,color) soho niye jaowar jonno 'modal' use kore kaj kora hoyeche,tai ora r lagteche na ekn--->

{{-- //------------for addcart------------------- --}}
{{-- <script type="text/javascript">
    $(document).ready(function() {
          $('.addcart').on('click', function(){
            var id = $(this).data('id');
            //alert(id) //comment  korte hobe porer line theke "e.preventDefault();" er aghe porjonto//
            if(id) {
               $.ajax({
                   url: "{{  url('/add/to/cart/') }}/"+id,
                   type:"GET",
                   dataType:"json",
                   success:function(data) {
                     const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000
                      })

                     if($.isEmptyObject(data.error)){
                          Toast.fire({
                            type: 'success',
                            title: data.success
                          })
                     }else{
                           Toast.fire({
                              type: 'error',
                              title: data.error
                          })
                     }

                   },

               });
           } else {
               alert('danger');
           }
            e.preventDefault();
       });
   });

</script> --}}



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
