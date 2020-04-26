
<!-----Ekkhane Frontend er Navbar + nav er sathe joint 'Main-Slide' ta royeche ---->
<nav class="main_nav">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="main_nav_content d-flex flex-row">

                    <!-- Categories Menu -->

                    <div class="cat_menu_container">
                        <div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                            <div class="cat_burger"><span></span><span></span><span></span></div>
                            <div class="cat_menu_text" style="">Choose Places</div>
                            {{-- <small style="font-size:10px; text-transform:capitalize;">Explore Rentals</small> --}}
                        </div>

                        <ul class="cat_menu">
                            <li class="hassubs">
                                <a href="#">Chattogram<i class="fas fa-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Raozan<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="#">Moradpur<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="#">GEC<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="#">Halisahar<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="#">Colonel Hat<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="#">Agrabad<i class="fas fa-chevron-right"></i></a></li>
                                </ul>
                            </li>

                            <li><a href="#">Dhaka<i class="fas fa-chevron-right"></i></a></li>

                            <li class="hassubs">
                                <a href="#">Rajshahi<i class="fas fa-chevron-right"></i></a>
                                <ul>
                                    <li class="hassubs">
                                        <a href="#">Menu Item<i class="fas fa-chevron-right"></i></a>
                                        <ul>
                                            <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                                </ul>
                            </li>
                            <li><a href="#">Barishal<i class="fas fa-chevron-right"></i></a></li>
                            <li><a href="#">Khulna<i class="fas fa-chevron-right"></i></a></li>
                            <li><a href="#">Sylhet<i class="fas fa-chevron-right"></i></a></li>
                            <li><a href="#">Comilla<i class="fas fa-chevron-right"></i></a></li>
                            <li><a href="#">Mymonshing<i class="fas fa-chevron-right"></i></a></li>
                            <li><a href="#">Rongpur<i class="fas fa-chevron-right"></i></a></li>
                        </ul>
                    </div>

                    <!-- Main Nav Menu -->

                    <div class="main_nav_menu ml-auto">
                        <ul class="standard_dropdown main_nav_dropdown">

                            <li><a href="#">Home<i class="fas fa-chevron-down"></i></a></li>

                            <li class="hassubs">
                                <a href="#">Pages<i class="fas fa-chevron-down"></i></a>
                                <ul>
                                    <li><a href="shop.html">Shop<i class="fas fa-chevron-down"></i></a></li>
                                    <li><a href="product.html">Product<i class="fas fa-chevron-down"></i></a></li>
                                    <li><a href="blog.html">Blog<i class="fas fa-chevron-down"></i></a></li>
                                    <li><a href="blog_single.html">Blog Post<i class="fas fa-chevron-down"></i></a></li>
                                    <li><a href="regular.html">Regular Post<i class="fas fa-chevron-down"></i></a></li>
                                    <li><a href="cart.html">Cart<i class="fas fa-chevron-down"></i></a></li>
                                    <li><a href="contact.html">Contact<i class="fas fa-chevron-down"></i></a></li>
                                </ul>
                            </li>
                            <li><a href="blog.html">Blog<i class="fas fa-chevron-down"></i></a></li>
                            <li><a href="contact.html">About Us<i class="fas fa-chevron-down"></i></a></li>
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


<section id="showcase" class="">
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
                        <h1 class="text-light p-3" style="">Search properties for sale and for rent in Bangladesh</h1>
                    </div>
                </div>
            </div>
          </div>
          <div class="carousel-item carousel-img-2">
             <div class="container">
                <div class="col-lg-8 offset-lg-4 pt-5">
                <div class="shadow-lg rounded" style="background:#AC5488; opacity: .8">
                    <h1 class="text-light p-3" style="">Search properties for sale and for rent in Bangladesh</h1>
                </div>
                </div>
               </div>
               </div>
               <div class="carousel-item carousel-img-3">
                  <div class="container">
                      <div class="col-lg-8 offset-lg-4 pt-5">
                        <div class="shadow-lg rounded" style=" background:#AC5488; opacity: .8">
                            <h1 class="text-light p-3" style="">Search properties for sale and for rent in Bangladesh</h1>
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

