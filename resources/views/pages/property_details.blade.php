@extends('layouts.app')
@section('content')

<script src="{{asset('public/frontend/js/jquery.min.js')}}"></script>   <!--f_ajax--->

<div style="background: #F5F5FA; padding-bottom:100px;">


<section class="details container pt-5">
    <p>Flat For Rent > San Francisco > Dhaka > 94102 > 57 Taylor St</p>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">

        <!--------'wishlist' using ajax------->
            <div class="carousel-caption" style="transform: translate(165px,-401px)">
                <button class="addwishlist float-right" data-id="{{ $property->id }}" role="button" style="background: none; border-style:none;" title="Add to wishlist">
                    <i class="fa fa-heart text-danger bg-white rounded-circle" style="font-size: 20px; padding: 12px;"></i>
                </button>
            </div>

        <!---------(Discount equation)-------->
            <div class="carousel-caption" style="transform: translate(-165px,-397px)">
                <ul class="float-left bg-danger rounded-circle ">
                    @if($property->discount_price == NULL)
                    <li style="font-size: 15px; padding-top:12px; height:47px; width: 47px; border-radius:50%;">NEW</li>
                    @else
                    @php
                    $amount= $property->price - $property->discount_price;
                    $discount= $amount/$property->price * 100;
                    @endphp
                    <li style="font-size: 16px; padding-top:12px; height:47px; width: 47px; border-radius:50%;" title="Discount Available">
                        {{ intval($discount) }}%
                    </li>
                    @endif
                </ul>
            </div>

        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url({{asset($property->image_one)}})">

            <div class="carousel-caption d-none d-md-block">
            <h3 class="display-4">First Slide</h3>
            <p class="lead">This is a description for the first slide.</p>
            </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url({{asset($property->image_two)}})">
            <div class="carousel-caption d-none d-md-block">
            <h3 class="display-4">Second Slide</h3>
            <p class="lead">This is a description for the second slide.</p>
            </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url({{asset($property->image_three)}})">
            <div class="carousel-caption d-none d-md-block">
            <h3 class="display-4">Third Slide</h3>
            <p class="lead">This is a description for the third slide.</p>
            </div>
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" title="Previous">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" title="Next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</section>











</div> <!--bg-color--->

@endsection
