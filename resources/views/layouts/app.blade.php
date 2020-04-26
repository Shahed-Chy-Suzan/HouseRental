
<!----Ekhane FrontEnd tar ekdom "Top Header" then "yield(content)" && Footer tar Code ache --->

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>HouseRental</title>
<meta charset="utf-8">

<!----------this for ajax ----------->
<meta name="csrf" value="{{ csrf_token() }}">       <!----------this for ajax ----------->

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" href="{{asset('public/frontend/logo/logo3.jpg')}}" type="image/x-icon">

<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles/bootstrap4/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/plugins/slick-1.8.0/slick.css')}}">

<link rel="stylesheet" href="{{asset('public/frontend/plugins/aos.css')}}">

<link rel="stylesheet" href="{{asset('public/backend/css/toastr.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/contact_responsive.css')}}">
{{-- <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
{{-- <link rel="stylesheet" href="sweetalert2.min.css">          <!--new another--> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script> --}}

    <!---for Product_details page---->
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/product_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/product_responsive.css') }}">
    <!---for Stripe---->
<script src="https://js.stripe.com/v3/"></script>

<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles/responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles/newstyle.css')}}">

</head>

<body>

    <div class="super_container">

    <!-- Header -->
    <header class="header smooth-scroll" id="home">

<div class="top_bar">
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-row">
                <div class="top_bar_contact_item"><div class="top_bar_icon"><a href="{{ url('/') }}"> <img src="{{asset('public/frontend/logo/logo3.jpg')}}" class="img-fluid rounded-circle" width="65px" height="65px"> <span class="text-primary h5" >BariWala<small style="font-size:12px">.com</small></span></a></div></div>

                <div class="top_bar_contact_item mx-5"><div class="top_bar_icon"><img src="{{asset('public/frontend/images/phone.png')}}" alt=""></div>+38 068 005 3570</div>
                <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{asset('public/frontend/images/mail.png')}}" alt=""></div><a href="https://colorlib.com/cdn-cgi/l/email-protection#234542505750424f465063444e424a4f0d404c4e"><span class="__cf_email__" data-cfemail="34525547404755585147745359555d581a575b59">[email&#160;protected]</span></a></div>

                <div class="top_bar_content ml-auto">
                    <div class="top_bar_menu">
                        <ul class="standard_dropdown top_bar_dropdown">
                            <li>
                                <a href="#">English<i class="fas fa-chevron-down"></i></a>
                                <ul>
                                    <li><a href="#">Italian</a></li>
                                    <li><a href="#">Spanish</a></li>
                                    <li><a href="#">Japanese</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">$ US dollar<i class="fas fa-chevron-down"></i></a>
                                <ul>
                                    <li><a href="#">EUR Euro</a></li>
                                    <li><a href="#">GBP British Pound</a></li>
                                    <li><a href="#">JPY Japanese Yen</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

<!----User login/Register----->
                    <div class="top_bar_user">
                        @guest
                            <div><a href="{{ route('login') }}">
                                {{-- @if(session()->get('lang') == 'bangla')
                                রেজিস্টার / লগইন
                                @else --}}
                                <div class="user_icon"><img src="{{ asset('public/frontend/images/user.svg') }}"></div>Register/Login
                                {{-- @endif --}}
                            </a></div>
                        @else
                            <ul class="standard_dropdown top_bar_dropdown">
                                <li> <a href="{{ route('home') }}"><div class="user_icon"><img src="{{ asset('public/frontend/images/user.svg') }}"></div>
                                    Profile<i class="fas fa-chevron-down"></i></a>
                                    <ul>
                                        <li><a href="{{ route('home') }}">Profile<i class="fas fa-chevron-down"></i></a></li>
                                        <li><a href="">Add My Property</a></li>
                                        <li><a href="{{ route('user.logout') }}">Logout</a></li>
                                    </ul>
                                </li>

                            </ul>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Header Main -->

<div class="header_main" style="">
    <div class="container">
        <div class="row">

            <!-- Logo -->
            <div class="col-lg-2 col-sm-3 col-3 order-1" data-aos="fade-up-right">
                <div class="logo_container">
                <div class="logo" style="">
                    <a href="{{ url('/') }}" class="text-primary">BariWala</a></div>
                </div>
            </div>

            <!-- Search -->
            <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                <div class="header_search">
                    <div class="header_search_content">
                        <div class="header_search_form_container">
                            <form action="#" class="header_search_form clearfix">
                                <input type="search" required="required" class="header_search_input" placeholder="Search by city or state...">
                                <div class="custom_dropdown">
                                    <div class="custom_dropdown_list">
                                        <span class="custom_dropdown_placeholder clc">All Categories</span>
                                        <i class="fas fa-chevron-down"></i>
                                        <ul class="custom_list clc">
                                            <li><a class="clc" href="#">All Categories</a></li>
                                            <li><a class="clc" href="#">Computers</a></li>
                                            <li><a class="clc" href="#">Laptops</a></li>
                                            <li><a class="clc" href="#">Cameras</a></li>
                                            <li><a class="clc" href="#">Hardware</a></li>
                                            <li><a class="clc" href="#">Smartphones</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <button type="submit" class="header_search_button trans_300" value="Submit"><img src="{{asset('public/frontend/images/search.png')}}" alt=""></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Wishlist -->
            <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
                <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                    <div class="wishlist d-flex flex-row align-items-center justify-content-end" data-aos="fade-up-left">
                        <div class="wishlist_icon"><img src="{{asset('public/frontend/images/heart.png')}}" alt=""></div>
                        <div class="wishlist_content">
                            <div class="wishlist_text"><a href="#">Wishlist</a></div>
                            <div class="wishlist_count">115</div>
                        </div>
                    </div>

                    <!-- Cart -->
                    <div class="cart" data-aos="fade-up-left">
                        <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                            <div class="cart_icon">
                                <img src="{{asset('public/frontend/images/cart.png')}}" alt="">
                                <div class="cart_count"><span>10</span></div>
                            </div>
                            <div class="cart_content">
                                <div class="cart_text"><a href="#">Cart</a></div>
                                <div class="cart_price">$85</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</header>


            <!-- Main Navigation -->


    @yield('content')


            <!-------- Start Footer ----------->
	<!-- Footer -->

	<!--<footer class="footer">
		<div class="container">
			<div class="row">

				<div class="col-lg-3 footer_col">
					<div class="footer_column footer_contact">
						<div class="logo_container">
                            {{-- <div class="logo"><a href="#" class="text-primary">BariWala</a></div> --}}
                            {{-- <div class="top_bar_contact_item"><div class="top_bar_icon"><a href=""> <img src="{{asset('public/frontend/logo/logo3.jpg')}}" class="img-fluid rounded-circle" width="80px" height="80px"> <span class="text-primary h4">BariWala</span></a></div></div> --}}
						</div>
						<div class="footer_title">Got Question? Call Us 24/7</div>
						<div class="footer_phone">+38 068 005 3570</div>
						<div class="footer_contact_text">
							<p>17 Princess Road, London</p>
							<p>Grester London NW18JR, UK</p>
						</div>
						<div class="footer_social">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
								<li><a href="#"><i class="fab fa-google"></i></a></li>
								<li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-2 offset-lg-2">
					<div class="footer_column">
						<div class="footer_title">Find it Fast</div>
						<ul class="footer_list">
							<li><a href="#">Computers & Laptops</a></li>
							<li><a href="#">Cameras & Photos</a></li>
							<li><a href="#">Hardware</a></li>
							<li><a href="#">Smartphones & Tablets</a></li>
							<li><a href="#">TV & Audio</a></li>
						</ul>
						<div class="footer_subtitle">Gadgets</div>
						<ul class="footer_list">
							<li><a href="#">Car Electronics</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<ul class="footer_list footer_list_2">
							<li><a href="#">Video Games & Consoles</a></li>
							<li><a href="#">Accessories</a></li>
							<li><a href="#">Cameras & Photos</a></li>
							<li><a href="#">Hardware</a></li>
							<li><a href="#">Computers & Laptops</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<div class="footer_title">Customer Care</div>
						<ul class="footer_list">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order Tracking</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Customer Services</a></li>
							<li><a href="#">Returns / Exchange</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="#">Product Support</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
    </footer>   -->
      <!---------------------defult footer end----------------------->




    <!---------------------contact----------------------->
    <section id="contact">
        <div class="container-box-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <!--contact left-->
                        <div id="contact-left">
                            <div class="vertical-heading">
                                <h5>Who We Are</h5>
                                <h2 style="color: blue"><b>GET <br> In<strong> Touch</strong></b></h2>
                                <p style="font-size: 15px">Got Question? Call Us 24/7</p>
                            </div>

                            <div id="branch">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="branch">
                                            <h4 style="color: blue">Chittagong</h4>
                                            <ul class="brance-details">
                                                <li><i class="fa fa-mobile"></i>+(60) 888-98 00 99</li>
                                                <li><i class="far fa-envelope"></i>support.suzan@chittagong.com</li>
                                                <li><i class="fa fa-map-marker"></i>Chittagong, Bangladesh</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="branch">
                                            <h4 style="color: blue">Dhaka</h4>
                                            <ul class="brance-details">
                                                <li><i class="fa fa-mobile"></i>+(60) 999-98 00 98</li>
                                                <li><i class="far fa-envelope"></i>support.arman@dhaka.com</li>
                                                <li><i class="fa fa-map-marker"></i>Dhaka, Bangladesh</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <ul class="social-links">
                                    <li title="Follow us on Facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li title="Follow us on Linkedin"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li title="Follow us on Twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li title="Follow us on Youtube"><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li title="Follow us on Instagram"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li title="Follow us on Pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li title="Follow us on Whatsapp"><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6">

                        <!--contact right-->
                        <div id="contact-right">
                            <form>
                                <h4 style="color: blue">Send Message</h4>
                                <p>Feel free to contant with us at any moment...</p>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email Address">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="phone" placeholder="Phone No">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="subject" placeholder="Subject">
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="3" cols="4" name="message" placeholder="Your Message Will Go Here"></textarea>
                                </div>

                                <div id="submit-btn">
                                    <a class="btn btn-info btn-block" href="#" title="submit" role="button">Submit</a>
                                </div>

                                <table>
                                    <tr>
                                        <td></td>
                                    </tr>
                                </table>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------contact Ends------------------------>



    <!--footer2-->
    <div class=" footer2 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        Copyright &copy; 2020 All Rights Reserved By : <span><a href="www.facebook.com/armanulalam/" target="_blank"> Arman-Ul-Alam </a> & <a href="www.facebook.com/shahedchysuzan/" target="_blank"> Shahed Chy Suzan </a></span>
                    </p>
                </div>
            </div>
        </div>

        <!---------back to top---------->
        <a href="#home" id="back-to-top" class="btn btn-primary" title="Back to Top" role="button">
            <i class="fa fa-angle-up"></i>
        </a>

    </div>
    <!--footer Ends-->
<!--------- Order Tracking Modal -------------->
<!--
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Your Status Code</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>

            <div class="modal-body">
                <form method="post" action="{{-- {{ route('order.tracking') }}--}}">
                    {{-- @csrf --}}

                    <div class="form-row">
                        <label>Status Code</label>
                        <input type="text" name="code" required="" class="form-control" placeholder="Enter order status code">
                    </div><br>
                    <button class="btn btn-danger" type="submit">Track Now</button>
                </form>
            </div>
        </div>
        </div>
    </div>-->




<script src="{{asset('public/frontend/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('public/frontend/styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('public/frontend/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('public/frontend/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('public/frontend/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('public/frontend/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('public/frontend/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('public/frontend/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('public/frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('public/frontend/plugins/slick-1.8.0/slick.js')}}"></script>
<script src="{{asset('public/frontend/plugins/easing/easing.js')}}"></script>
<!----------newly added-------->
<script src="{{asset('public/frontend/js/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('public/frontend/js/aos.js')}}"></script>
<script src="{{asset('public/frontend/js/jquery.counterup.min.js')}}"></script>    <!--counterup-->

{{-- <script src="{{ asset('public/frontend/js/product_custom.js') }}"></script> --}}
{{-- <script src="{{asset('public/backend/js/sweetalert2.min.js')}}"></script> --}}

<!-----------//for ajax //-------->
{{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>      <!--------for using in ajax ------> --}}
<script src="{{asset('public/frontend/js/sweetalert2@8.js')}}"></script>
{{-- <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script> --}}
<script src="{{asset('public/frontend/js/sweetalert.min.js')}}"></script>

<script src="{{asset('public/backend/js/toastr.min.js')}}"></script>
<script src="{{asset('public/frontend/js/custom.js')}}"></script>




{{---- sweet alert -----}}
<script>
    $(document).on("click", "#return", function(e){
        e.preventDefault();
        var link = $(this).attr("href");
           swal({
             title: "Are you Want to Return?",
             text: "Once Return,You will get return your money!",
             icon: "warning",
             buttons: true,
             dangerMode: true,
           })
           .then((willDelete) => {
             if (willDelete) {
                  window.location.href = link;
             } else {
               swal("Cancel");
             }
           });
       });
</script>

{{--------- Toastr ---------------}}
<script>
    @if(Session::has('message'))
    var type="{{Session::get('alert-type','info')}}"
    switch (type) {
        case 'info':
            toastr.info("{{Session::get('message')}}")
            break;
        case 'success':
            toastr.success("{{Session::get('message')}}")
            break;
        case 'warning':
            toastr.warning("{{Session::get('message')}}")
            break;
        case 'error':
            toastr.error("{{Session::get('message')}}")
            break;
    }
    @endif
</script>


<!--==================================
        ----Nice Scroll bar----
====================================--->
    <script>
        $(function() {
        $("body").niceScroll({
        cursorborder: "1px solid yellow",
        });
    });
    </script>
    <!-- eta "Nice Scroll bar" er jquery code -->


<!--==================================
        ----AOS----
====================================--->
    <script>
        AOS.init({
            duration: 2000
        });
    </script>
    <!-- eta "AOS" er jquery code -->


<!--==================================
        ----stats----
====================================--->
<script>
    $(function () {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });
    </script>


<!--==================================
        -----back-to-top------
======================================--->
<script>
//show and hide white nav
$(function () {

$(window).scroll(function () {

    if ($(window).scrollTop() > 80) {
        //show back top button
        $("#back-to-top").fadeIn();
    }else {
        //hide back top button
        $("#back-to-top").fadeOut();
    }
});
});
</script>




<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-23581568-13');
</script>



</body>
</html>
