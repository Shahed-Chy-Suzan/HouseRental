@extends('layouts.app')
@section('content')


@php
    $setting=DB::table('sitesetting')->first();
    $wishlist=DB::table('wishlists')->where('user_id',Auth::id())->get();   //for count-wishlist
    $property1=DB::table('user_properties')->where('user_id',Auth::id())->get();
@endphp


<div style="background: #F5F5FA; padding-bottom:80px" data-aos="fade-right">


    <div class="py-4">
        <div class="container">
            <h3 style="font-size: 30px" class="text-primary mb-0"><a href="{{ route('user.wishlist') }}">Your Wishlists : </a></h3>
            <p style="font-size: 17px; margin-top:0px"> {{ count($wishlist) }} Saved Property.</p>
        </div>
    </div>


<!-- Page Content -->
    <div class="container">

    <!-- Project One -->
@foreach($property as $row)
    <div class="row bg-white mb-4 border border-primary rounded ww">
    <div class="col-md-5 ml-0 pl-0">
        <div id="{{$row->property_code}}" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#{{$row->property_code}}" data-slide-to="0" class="active"></li>
                <li data-target="#{{$row->property_code}}" data-slide-to="1"></li>
                <li data-target="#{{$row->property_code}}" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner" style="height: 300px">
                <div class="carousel-item active">
                    <a href="#"><img style="height: 300px; width: 700px" src="{{asset($row->image_one)}}" /></a>
                </div>
                <div class="carousel-item">
                    <a href="#"><img style="height: 300px; width: 700px" src="{{asset($row->image_two)}}" /></a>
                </div>
                <div class="carousel-item">
                    <a href="#"><img style="height: 300px; width: 700px" src="{{asset($row->image_three)}}" /></a>
                </div>
            </div>

            <a href="#{{$row->property_code}}" class="carousel-control-prev" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a href="#{{$row->property_code}}" class="carousel-control-next" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
            </div>
    </div>

    <div class="col-md-7">
    @if($row->purpose=='Sale')
        <h3 class="pt-3 text-primary font-weight-normal">{{$row->area}} Furnished {{$row->type}} Ready For {{$row->purpose}} at {{$row->city_name}}</h3>
    @elseif($row->purpose=='Rent')
        <h3 class="pt-3 text-primary font-weight-normal">A Furnished {{$row->area}} {{$row->type}} Ready To {{$row->purpose}} at {{$row->city_name}}</h3>
    @endif
        <p style="font-size: 15px" class="text-dark mb-0 pb-0">{{$row->address}}, {{$row->subcity_name}}, {{$row->city_name}}.</p>
        <p style="font-size: 16px" class="text-primary mt-0 pt-1">Property Code: {{$row->property_code}}</p>


    @if($row->discount_price == NULL)
        <div style="font-size: 25px" class="product_price discount my-0"> BDT {{$row->price}}</div>
    @else
        <div style="font-size: 25px" class="product_price discount my-0"> BDT {{$row->discount_price}}<span style="font-size: 17px"><del><b> BDT {{$row->price}}</b></del></span></div>
    @endif

        <div class="col-md-12 ml-0 pl-1" style="font-size: 20px">
            <i class="fas fa-bed pr-4" title="Bed Room"> {{$row->bedroom}} </i> |
            <i class="fas fa-bath p-4" title="Bath Room"> {{$row->bathroom}} </i> |
            <i class="fas fa-car p-4" title="Parking"> {{$row->parking}} </i> |
            <i class="fas fa-home p-4" title="Area"> {{$row->area}} </i> |
            <i class="fas fa-building p-4" title="Floor Level"> {{$row->floor}} </i> |
        </div>
        <a class="btn btn-primary py-2 px-4 mr-3 text-white" style="font-size: 18px" roll="button" data-toggle="modal" data-target="#call{{$row->property_id}}"><i class="fas fa-phone pr-1"></i> Call </a>
        <a class="btn btn-primary py-2 px-4 text-white" style="font-size: 18px" roll="button" data-toggle="modal" data-target="#email{{$row->property_id}}"><i class="far fa-envelope pr-1"></i> Email </a>

    </div>
    </div>

@endforeach
    <!-- /.row -->


    <!--------------------Pagination--------------------->
        <div class="p-5" style="margin-left:400px; font-size: 20px;">
            {{ $property->links() }}
        </div>

    </div><!-- /.container -->
</div> <!--bg-color--->



@endsection
