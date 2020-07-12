@extends('layouts.app')
@section('content')

@php                    //------For Counting total Search_Count.
$property1=DB::table('user_properties')
                ->join('cities','user_properties.city_id','cities.id')
                ->select('user_properties.*','cities.city_name')
                ->where([ ['status','1'],['subcity','LIKE', "%{$item}%"] ])
                ->orWhere([ ['status','1'],['city_name','LIKE', "%{$item}%"] ])
                ->orWhere([ ['status','1'],['address','LIKE', "%{$item}%"] ])
                ->orWhere([ ['status','1'],['property_code','LIKE', "%{$item}%"] ]);

$searchCount=DB::table('user_properties')
        ->join('cities','user_properties.city_id','cities.id')
        ->select('user_properties.*','cities.city_name')
        ->where([ ['status','2'],['subcity','LIKE', "%{$item}%"] ])
        ->orWhere([ ['status','2'],['city_name','LIKE', "%{$item}%"] ])
        ->orWhere([ ['status','2'],['address','LIKE', "%{$item}%"] ])
        ->orWhere([ ['status','2'],['property_code','LIKE', "%{$item}%"] ])
        ->union($property1)
        ->get();
@endphp

<div style="background: #F5F5FA; padding-bottom:80px" data-aos="fade-right">

    <div class="py-4">
        <div class="container">
            <h3 style="font-size: 30px" class="text-primary mb-0">Available Properties In {{ $item }} </h3>
            <p style="font-size: 17px; margin-top:0px"> <span class="badge badge-success text-white rounded-circle p-1">{{ count($searchCount) }}</span> Properties found</p>
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

        <!--------'wishlist' using ajax------->
            <div class="carousel-caption" style="transform: translate(70px,-221px)">
                <button class="addwishlist float-right" data-id="{{ $row->id }}" role="button" style="background: none; border-style:none;" title="Add to wishlist">
                    <i class="fa fa-heart text-danger bg-white rounded-circle" style="font-size: 16px; padding: 10px;"></i>
                </button>
            </div>

        <!---------(Discount equation)-------->
            <div class="carousel-caption" style="transform: translate(-70px,-216px)">
                <ul class="float-left bg-danger rounded-circle ">
                    @if($row->discount_price == NULL)
                    <li style="font-size: 15px; padding-top:8px; height:41px; width: 41px; border-radius:50%;">New</li>
                    @else
                    @php
                        $price= implode(explode(',',$row->price));
                        $discount_price= implode(explode(',',$row->discount_price));
                        $amount= $price - $discount_price;
                        $discount= $amount/$price * 100;
                    @endphp
                    <li style="font-size: 15px; padding-top:8px; height:41px; width: 41px; border-radius:50%;" title="Discount Available">
                        {{ intval($discount) }}%
                    </li>
                    @endif
                </ul>
            </div>

                <a href="{{ url('property/details/'.$row->id) }}" title="Click for details">
                    <div class="carousel-item active">
                        <img style="height: 300px; width: 700px" src="{{asset($row->image_one)}}"/>
                    </div>
                    <div class="carousel-item">
                        <img style="height: 300px; width: 700px" src="{{asset($row->image_two)}}"/>
                    </div>
                    <div class="carousel-item">
                        <img style="height: 300px; width: 700px" src="{{asset($row->image_three)}}"/>
                    </div>
                </a>
            </div>

            <a href="#{{$row->property_code}}" class="carousel-control-prev" data-slide="prev" title="Previous">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a href="#{{$row->property_code}}" class="carousel-control-next" data-slide="next" title="Next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>

    <div class="col-md-7">
    @if($row->purpose=='Sale')
        <h3 class="pt-3 text-primary font-weight-normal">
            <a href="{{ url('property/details/'.$row->id) }}" title="Click for details">
                {{$row->area}} Furnished {{$row->type}} Ready For {{$row->purpose}} at {{$row->city_name}}
            </a>
        </h3>
    @elseif($row->purpose=='Rent')
        <h3 class="pt-3 text-primary font-weight-normal">
            <a href="{{ url('property/details/'.$row->id) }}" title="Click for details">
                A Furnished {{$row->area}} {{$row->type}} Ready To {{$row->purpose}} at {{$row->city_name}}
            </a>
        </h3>
    @endif
        <p style="font-size: 15px" class="text-dark mb-0 pb-0" title="Place"><i class="fas fa-map-marker-alt mr-2 p-0" style="font-size:13px;"></i>{{$row->address}}, {{$row->subcity}}, {{$row->city_name}}.</p>
        <p style="font-size: 16px" class="text-primary mt-0 pt-1">Property Code: {{$row->property_code}}</p>


    @if($row->discount_price == NULL)
        <div style="font-size: 25px" class="product_price discount my-0"> BDT {{$row->price}}</div>
    @else
        <div style="font-size: 25px" class="product_price discount my-0"> BDT {{$row->discount_price}}<span style="font-size: 17px"><del><b>BDT {{$row->price}}</b></del></span></div>
        {{-- <div style="font-size: 25px" class="product_price discount my-0"> BDT {{$row->discount_price}} / month<span style="font-size: 17px"><del><b>BDT {{$row->price}}</b></del></span></div> --}}
    @endif

        <div class="col-md-12 ml-0 pl-1" style="font-size: 20px">
            <i class="fas fa-bed pr-4" title="Bed Room"> {{$row->bedroom}} </i> |
            <i class="fas fa-bath p-4" title="Bath Room"> {{$row->bathroom}} </i> |
            <i class="fas fa-car p-4" title="Parking"> {{$row->parking}} </i> |
            <i class="fas fa-home p-4" title="Area"> {{$row->area}} </i> |
            <i class="fas fa-building p-4" title="Floor Level"> {{$row->floor}} </i> |
        </div>

        <div class="more">
            <a class="btn btn-white py-2 px-4 mr-3 text-white button-pipaluk button--inverted" style="font-size: 18px" roll="button" data-toggle="modal" data-target="#call{{$row->id}}"><i class="fas fa-phone pr-1"></i> Call </a>
            <a class="btn py-2 px-4 text-white button-pipaluk button--inverted" style="font-size: 18px" roll="button" data-toggle="modal" data-target="#email{{$row->id}}"><i class="far fa-envelope pr-1"></i> Email </a>
        </div>  <!--div class="more" extra added, & In <a> removed 'btn-primary',added button-pipaluk button--inverted-->

    </div>
    </div>

@endforeach
    <!-- /.row -->

  <!--If all property are sold under e subcategory then it will show this-->
        @if (count($searchCount)== 0)
            <h2 class="text-danger text-center mt-5" style="font-family:Arial, Helvetica, sans-serif "><i class="fa fa-times pr-2"></i> Sorry! No property available at this moment related to {{$item}}.</h2>
        @endif



    <!--------------------Pagination--------------------->
        <div class="p-5" style="margin-left:400px; font-size: 20px;">
            {{-- {{ $property->links() }} --}}
            {{-- {{ $property->appends(request()->except('page'))->links() }} --}}
            {{ $property->appends(request()->query())->links() }}
        </div>

    </div><!-- /.container -->
</div> <!--bg-color--->



@endsection
