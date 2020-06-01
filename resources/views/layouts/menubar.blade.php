
<!-----Ekkhane Frontend er Navbar + nav er sathe joint 'Main-Slide' ta royeche ---->
<nav class="main_nav py-0 my-0">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="main_nav_content d-flex flex-row">

                    <!-- Categories Menu -->

                    <div class="cat_menu_container">
                        <div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                            <div class="cat_burger"><span></span><span></span><span></span></div>
                            <div class="cat_menu_text" style="">@if(session()->get('lang') == 'bangla') জায়গা পছন্দ করুন @else Choose Places @endif</div>
                            {{-- <small style="font-size:10px; text-transform:capitalize;">Explore Rentals</small> --}}
                        </div>

{{---------- here ---------}}
@php
$city=DB::table('cities')->get();
@endphp
                    <ul class="cat_menu">
                        @foreach( $city as $cat)
                            <li class="hassubs">
                                <a href="#">{{ $cat->city_name }}<i class="fas fa-arrow-circle-right"></i></a>
                                <ul>
                                    @php
                                        $subcity=DB::table('subcities')->where('city_id',$cat->id)->get();
                                    @endphp
                                    @foreach($subcity as $row)
                                    <li><a href="{{ url('products/'.$row->id) }}">{{  $row->subcity_name }}<i class="fas fa-arrow-circle-right z-index-100"></i></a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </div>



                    <!-- Main Nav Menu -->

                    <div class="main_nav_menu ml-auto">
                        <ul class="standard_dropdown main_nav_dropdown">

                            <li><a href="#">@if(session()->get('lang') == 'bangla') হোম @else Home @endif</a></li>

                            <li class="hassubs">
                                <a href="#">@if(session()->get('lang') == 'bangla') পেইজ @else Pages @endif<i class="fas fa-chevron-down"></i></a>
                                <ul>
                                    <li><a href="shop.html">Shop<i class="fas fa-chevron-down"></i></a></li>
                                    <li><a href="#">Product<i class="fas fa-chevron-down"></i></a></li>
                                    <li><a href="blog.html">Blog<i class="fas fa-chevron-down"></i></a></li>
                                    <li><a href="#">Blog Post<i class="fas fa-chevron-down"></i></a></li>
                                    <li><a href="#">Regular Post<i class="fas fa-chevron-down"></i></a></li>
                                    <li><a href="cart.html">Cart<i class="fas fa-chevron-down"></i></a></li>
                                    <li><a href="contact.html">Contact<i class="fas fa-chevron-down"></i></a></li>
                                </ul>
                            </li>

                            <li><a href="{{ route('blog.post') }}">@if(session()->get('lang') == 'bangla') ব্লগ @else Blog @endif </a></li>
                            <li><a href="#">@if(session()->get('lang') == 'bangla') আমাদের সম্পর্কে @else About Us @endif </a></li>
                        </ul>
                    </div>

                    <!-- Menu Trigger -->

                    <div class="menu_trigger_container ml-auto">
                        <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                            <div class="menu_burger">
                                <div class="menu_trigger_text">menu</div>
                                <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</nav>


<!--------------- Menu mobile screen------------>

<div class="page_menu">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="page_menu_content">

                    <div class="page_menu_search">
                        <form action="#">
                            <input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
                        </form>
                    </div>
                    <ul class="page_menu_nav">
                        <li class="page_menu_item has-children">
                            <a href="#">Language<i class="fa fa-angle-down"></i></a>
                            <ul class="page_menu_selection">
                                <li><a href="#">English<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Italian<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Spanish<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Japanese<i class="fa fa-angle-down"></i></a></li>
                            </ul>
                        </li>
                        <li class="page_menu_item has-children">
                            <a href="#">Currency<i class="fa fa-angle-down"></i></a>
                            <ul class="page_menu_selection">
                                <li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">GBP British Pound<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a></li>
                            </ul>
                        </li>
                        <li class="page_menu_item">
                            <a href="#">Home<i class="fa fa-angle-down"></i></a>
                        </li>
                        <li class="page_menu_item has-children">
                            <a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
                            <ul class="page_menu_selection">
                                <li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
                                <li class="page_menu_item has-children">
                                    <a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                            </ul>
                        </li>
                        <li class="page_menu_item has-children">
                            <a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
                            <ul class="page_menu_selection">
                                <li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                            </ul>
                        </li>
                        <li class="page_menu_item has-children">
                            <a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
                            <ul class="page_menu_selection">
                                <li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                            </ul>
                        </li>
                        <li class="page_menu_item"><a href="blog.html">blog<i class="fa fa-angle-down"></i></a></li>
                        <li class="page_menu_item"><a href="contact.html">contact<i class="fa fa-angle-down"></i></a></li>
                    </ul>

                    <div class="menu_contact">
                        <div class="menu_contact_item"><div class="menu_contact_icon"><img src="images/phone_white.png" alt=""></div>+38 068 005 3570</div>
                        <div class="menu_contact_item"><div class="menu_contact_icon"><img src="images/mail_white.png" alt=""></div><a href="https://colorlib.com/cdn-cgi/l/email-protection#fd9b9c8e898e9c91988ebd9a909c9491d39e9290"><span class="__cf_email__" data-cfemail="5f393e2c2b2c3e333a2c1f38323e3633713c3032">[email&#160;protected]</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</header>



<!-- Banner -->

{{-- <div class="banner" style="z-index: -1;">
    <div class="banner_background" style="background-image:url(images/banner_background.jpg)"></div>
    <div class="container fill_height">
        <div class="row fill_height">
            <div class="banner_product_image"><img src="images/banner_product.png" alt=""></div>
            <div class="col-lg-5 offset-lg-4 fill_height">
                <div class="banner_content">
                    <h1 class="banner_text">new era of smartphones</h1>
                    <div class="banner_price"><span>$530</span>$460</div>
                    <div class="banner_product_name">Apple Iphone 6s</div>
                    <div class="button banner_button"><a href="#">Shop Now</a></div>
                </div>
            </div>
        </div>
    </div>
</div> --}}


 <!---------------------------(Not Working for Dynamic) Main Slider-Carousal-(Nav) --------------------------->

<section id="showcase">
    <div id="slider" class="carousel slide" data-ride="carousel"> <!--.carousel-fade-->
      <ol class="carousel-indicators">
         <li class="active" data-target="#slider" data-slide-to="0"></li>
         <li data-target="#slider" data-slide-to="1"></li>
         <li data-target="#slider" data-slide-to="2"></li>
      </ol>
        <div class="carousel-inner">
          <div class="carousel-item carousel-img-1 active">
            <div class="container">
                <div class="col-lg-8 offset-lg-4 pt-5" data-aos="flip-right">
                    <div class="shadow-lg rounded" style=" background:#AC5488; opacity: .8">
                        <h1 class="text-light p-3" style="">@if(session()->get('lang') == 'bangla')বাংলাদেশে বিক্রয় এবং ভাড়ার জন্য প্রপার্টি খুঁজে দেখুন @else Search properties for sale and rent in Bangladesh @endif </h1>
                    </div>
                </div>
            </div>
          </div>
          <div class="carousel-item carousel-img-2">
             <div class="container">
                <div class="col-lg-8 offset-lg-4 pt-5">
                <div class="shadow-lg rounded" style="background:#AC5488; opacity: .8">
                    <h1 class="text-light p-3" style="">@if(session()->get('lang') == 'bangla')বাংলাদেশে বিক্রয় এবং ভাড়ার জন্য প্রপার্টি খুঁজে দেখুন @else Search properties for sale and rent in Bangladesh @endif</h1>
                </div>
                </div>
               </div>
               </div>
               <div class="carousel-item carousel-img-3">
                  <div class="container">
                      <div class="col-lg-8 offset-lg-4 pt-5">
                        <div class="shadow-lg rounded" style=" background:#AC5488; opacity: .8">
                            <h1 class="text-light p-3" style="">@if(session()->get('lang') == 'bangla')বাংলাদেশে বিক্রয় এবং ভাড়ার জন্য প্রপার্টি খুঁজে দেখুন @else Search properties for sale and rent in Bangladesh @endif</h1>
                        </div>
                    </div>
                    </div>
               </div>
          </div>
          <a href="#slider" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a href="#slider" class="carousel-control-next" data-slide="next">
              <span class="carousel-control-next-icon"></span>
          </a>
      </div>
  </section>



  <!-------------------------------(Not Working for Dynamic)-Main Slider-------------------------------->

{{-- <section class="pt-0 mt-0">
    <div id="carousel-example" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example" data-slide-to="1"></li>
          <li data-target="#carousel-example" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" style="height: 650px">
          <div class="carousel-item active">
            <img src="public/frontend/images/Cover/1.jpg"/>
            <div class="container row">
                <div class="col-lg-8 offset-lg-4 pt-5" data-aos="flip-right">
                    <div class="shadow-lg rounded" style=" background:#AC5488; opacity: .8">
                        <h1 class="text-light p-3" style="">@if(session()->get('lang') == 'bangla')বাংলাদেশে বিক্রয় এবং ভাড়ার জন্য প্রপার্টি খুঁজে দেখুন @else Search properties for sale and rent in Bangladesh @endif </h1>
                    </div>
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="public/frontend/images/Cover/7.jpg"/>
            <div class="container">
                <div class="col-lg-8 offset-lg-4 pt-5" data-aos="flip-right">
                    <div class="shadow-lg rounded" style=" background:#AC5488; opacity: .8">
                        <h1 class="text-light p-3" style="">@if(session()->get('lang') == 'bangla')বাংলাদেশে বিক্রয় এবং ভাড়ার জন্য প্রপার্টি খুঁজে দেখুন @else Search properties for sale and rent in Bangladesh @endif </h1>
                    </div>
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="public/frontend/images/Cover/3.jpg"/>
            <div class="container">
                <div class="col-lg-8 offset-lg-4 pt-5" data-aos="flip-right">
                    <div class="shadow-lg rounded" style=" background:#AC5488; opacity: .8">
                        <h1 class="text-light p-3" style="">@if(session()->get('lang') == 'bangla')বাংলাদেশে বিক্রয় এবং ভাড়ার জন্য প্রপার্টি খুঁজে দেখুন @else Search properties for sale and rent in Bangladesh @endif </h1>
                    </div>
                </div>
            </div>
          </div>
        </div>

        <a href="#carousel-example" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a href="#carousel-example" class="carousel-control-next" data-slide="next">
              <span class="carousel-control-next-icon"></span>
          </a>
      </div>
</section> --}}
