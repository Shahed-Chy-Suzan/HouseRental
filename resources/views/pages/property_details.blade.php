@extends('layouts.app')
@section('content')

<script src="{{asset('public/frontend/js/jquery.min.js')}}"></script>   <!--f_ajax--->

{{-- <div style="background: #F5F5FA; padding-bottom:100px;"> --}}
<div style="background-image: linear-gradient(to top, rgba(255, 255, 255, 0.5) , #F5F5FA);">

<section class="details container py-3">

<!---------- Breadcum ---------->
    <p style="font-size:15px;" class="mb-2 text-primary"> {{$property->type}} For {{$property->purpose}} &nbsp;>&nbsp; {{$property->subcity}} &nbsp;>&nbsp; {{$property->city_name}} &nbsp;>&nbsp; Property Code: {{$property->property_code}}</p>

<!-------Image_Slider_carousal------->
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
                        $price= implode(explode(',',$property->price));
                        $discount_price= implode(explode(',',$property->discount_price));
                        $amount= $price - $discount_price;
                        $discount= $amount/$price * 100;
                    @endphp
                    <li style="font-size: 16px; padding-top:12px; height:47px; width: 47px; border-radius:50%;" title="Discount Available">
                        {{ intval($discount) }}%
                    </li>
                    @endif
                </ul>
            </div>

    <!------ Slide One - Set the background image for this slide in the line below -------->
        <div class="carousel-item active" style="background-image: url({{asset($property->image_one)}})">

            <div class="carousel-caption d-none d-md-block">
            {{-- <h3 class="display-4">First Slide</h3>
            <p class="lead">This is a description for the first slide.</p> --}}
            </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url({{asset($property->image_two)}})">
            <div class="carousel-caption d-none d-md-block">
            {{-- <h3 class="display-4">Second Slide</h3>
            <p class="lead">This is a description for the second slide.</p> --}}
            </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url({{asset($property->image_three)}})">
            <div class="carousel-caption d-none d-md-block">
            {{-- <h3 class="display-4">Third Slide</h3>
            <p class="lead">This is a description for the third slide.</p> --}}
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
<!-------End Image_Slider_carousal----->



<!-------------------------Details-Property-------------------------------->
    <div>
        <!--heading-->
        @if($property->city_name=='Chattogram' || $property->city_name=='Khulna' || $property->city_name=='Sylhet')
            <h3 class="pt-4 text-primary font-weight-normal" style="font-size: 25px;">
                Visit This Furnished {{$property->type}} Up For {{$property->purpose}} Covering An Area Of {{$property->area}} At {{$property->subcity}}, {{$property->city_name}}
            </h3>
        @elseif($property->purpose=='Sale')
            <h3 class="pt-4 text-primary font-weight-normal" style="font-size: 25px;">
                Grab This Luxurious {{$property->area}} {{$property->type}} Is Up For {{$property->purpose}} At {{$property->subcity}}, {{$property->city_name}}
            </h3>
        @elseif($property->purpose=='Rent')
            <h3 class="pt-4 text-primary font-weight-normal" style="font-size: 25px;">
                Make This {{$property->type}} Your Next Residing Location, Which Is Ready To {{$property->purpose}} At {{$property->subcity}}, {{$property->city_name}}
            </h3>
        @endif  <!--End heading-->

        <p style="font-size: 18px" class="text-dark mb-0 pb-0" title="Place"><i class="fas fa-map-marker-alt mr-2 p-0" style="font-size:16px;"></i>{{$property->address}}, {{$property->subcity}}, {{$property->city_name}}.</p>
        <p style="font-size: 18px" class="text-primary mt-0 pt-1 mb-1">Property Code: {{$property->property_code}}</p>

        <!----Price---->
        @if($property->purpose=='Sale')
            @if($property->discount_price == NULL)
                <div style="font-size: 26px" class="product_price discount my-0"> BDT {{$property->price}}</div>
            @else
                <div style="font-size: 26px" class="product_price discount my-0"> BDT {{$property->discount_price}}<span style="font-size: 17px"><del><b>BDT {{$property->price}}</b></del></span></div>
            @endif
        @else
            @if($property->discount_price == NULL)
                <div style="font-size: 26px" class="product_price discount my-0"> BDT {{$property->price}} / Month</div>
            @else
                <div style="font-size: 26px" class="product_price discount my-0"> BDT {{$property->discount_price}} / Month<span style="font-size: 18px"><del><b>BDT {{$property->price}}</b></del></span></div>
            @endif
        @endif  <!----End Price---->

        <!----bed-bath-kitchen-park-floor---->
        {{-- <div class="col-md-12 ml-0 pl-1" style="font-size: 20px">
            <i class="fas fa-bed pr-4" title="Bed Room"> {{$property->bedroom}} </i> |
            <i class="fas fa-bath p-4" title="Bath Room"> {{$property->bathroom}} </i> |
            <i class="fas fa-car p-4" title="Parking"> {{$property->parking}} </i> |
            <i class="fas fa-home p-4" title="Area"> {{$property->area}} </i> |
            <i class="fas fa-building p-4" title="Floor Level"> {{$property->floor}} </i> |
        </div> --}}
        <div class="py-3 more">
            <a class="btn py-2 px-4 mr-3 text-white button-pipaluk button--inverted" style="font-size: 18px" roll="button" data-toggle="modal" data-target="#call{{$property->id}}"><i class="fas fa-phone pr-1"></i> Call </a>
            <a class="btn py-2 px-4 text-white button-pipaluk button--inverted" style="font-size: 18px" roll="button" data-toggle="modal" data-target="#email{{$property->id}}"><i class="far fa-envelope pr-1"></i> Email </a>
        </div>


        <!----Overview---->
        <div class="row mt-4">    <!----border---->
            <h3 class="col-md-12 p-2 text-success" style="background-color: #e1f1e9e5; font-size:29px;">Overview</h3>
            <div class="col-md-5">
                    <table class="table table-hover" style="font-size: 16px;">
                        <tr>
                            <td class="border-0">Type :</td>                   <!--class="border-0"-->
                            <td class="border-0">{{ $property->type }}</td>    <!--class="border-0"-->
                        </tr>
                        <tr>
                          <td>Area :</td>
                          <td>{{ $property->area }}</td>
                      </tr>
                      <tr>
                          <td>Price :</td>
                          <td>৳ {{ $property->price }}</td>
                      </tr>
                      <tr>
                          @if (isset($property->discount_price))
                            <td>Discount Price ({{ intval($discount) }}%) :</td>
                            <td>৳ {{ $property->discount_price }}</td>
                          @else
                            <td>Discount Price :</td>
                            <td>Not Available</td>
                          @endif
                      </tr>
                      <tr>
                          <td>Categoty :</td>
                          <td>{{ $property->category }}</td>
                      </tr>
                      <tr>
                          <td>Purpose :</td>
                          <td>{{ $property->purpose }}</td>
                      </tr>
                      <tr><td></td><td></td></tr>
                    </table>
            </div> <!---end col-md-5--->

            <div class="col-md-1"></div>

            <div class="col-md-5">
                <table class="table table-hover" style="font-size: 16px;">
                    <tr>
                        <td class="border-0">Bedroom : </td>
                        <td class="border-0">{{ $property->bedroom }}</td>
                    </tr>
                    <tr>
                        <td>Bathroom : </td>
                        <td>{{ $property->bathroom }}</td>
                    </tr>
                    <tr>
                        <td>Kitchen : </td>
                        <td>{{ $property->kitchen }}</td>
                    </tr>
                    <tr>
                        <td>Parking : </td>
                        <td>{{ $property->parking }}</td>
                    </tr>
                    <tr>
                      <td>Floor Level :</td>
                      <td>{{ $property->floor }}</td>
                    </tr>
                    <tr>
                        <td>Service Charge :</td>
                        @if (isset($property->service_charge))
                          <td>৳ {{ $property->service_charge }}</td>
                        @else
                          <td>N/A</td>
                        @endif
                    </tr>
                    <tr><td></td><td></td></tr>
                </table>
            </div> <!---end col-md-5--->
        </div>	 <!---End Row // End Overview--->


        <!-----Description----->
        <div class="row text-justify my-2">     <!----border---->
          <h3 class="col-md-12 p-2 mb-3 text-success" style="background-color: #e1f1e9e5; font-size:29px;">Description</h3>
          <div class="pl-5 pr-3 pb-3" style="font-size: 16px;">
              {!! $property->details !!}
          </div>
        </div>    <!---End Description--->


        <!-----Map----->
        <div class="row mt-4">
          <h3 class="col-md-12 p-2 mb-3 text-success" style="background-color: #e1f1e9e5; font-size:29px;">Map</h3>
          <div class="col-md-12 ml-2 pr-2">
            @if (isset($property->map_link))
                <iframe src="{{$property->map_link}}" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            @else
                <span style="font-size: 15px;"> Sorry!!! No Map Link Is Available To Show At This moment. </span>
            @endif

          </div>
        </div>    <!---End Map--->



<!-------- Start Facebook_Comment_Box-----Video Link------>
    <div class="row mt-5 pt-0">
        <h3 class="col-md-12 p-2 mb-3 text-success" style="background-color: #e1f1e9e5; font-size:29px;">Property Review</h3>
        <div class="col-md-12 ml-2 pr-2">
            <ul class="nav nav-tabs " role="tablist">
                <li class="nav-item" style="background-color: #e1f1e9e5"><a class="nav-link active" href="#bootstrap-home" aria-controls="home" role="tab" data-toggle="tab">Comment Box</a></li>
                <li class="nav-item" style="background-color: #e1f1e9e5"><a class="nav-link" href="#bootstrap-about" aria-controls="about" role="tab" data-toggle="tab">Video or Link</a></li>
            </ul>

            <div class="card pmd-card">
                <div class="card-body">
                    <!-- Tab panes -->
                    <div class="tab-content">
{{--for-Facebook Comment box Plugin --------}}
                        <div role="tablist" aria-labelledby="home-tab" class="tab-pane fade show active" id="bootstrap-home">
                            <div class="fb-comments" data-href="{{ Request::url() }}" data-numposts="5" data-width=""></div>
                        </div>
                        <div role="tablist" aria-labelledby="home-tab" class="tab-pane fade" id="bootstrap-about" style="font-size: 15px;">
                            @if (isset($property->video))
                                Property Videos : <a href="{{ $property->video }}" target="_blank" class="pl-1">{{ $property->video }}</a>
                            @else
                                Sorry!!! No Video Is Available At This Moment.
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>    <!---End Facebook_Comment_Box-----Video Link--->

{{--For---------// Facebook Comment box Plugin //--------}}
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0" nonce="Aq3B6GmW"></script>



<!------------------------------------------------------------------------------------------------------------>
                                    <!-----See Nearby Property------>
<!------------------------------------------------------------------------------------------------------------>

<!-----See Nearby Property----->
<div class="row mt-5 pb-5">
    <h3 class="col-md-12 p-2 mb-3 text-success" style="background-color: #e1f1e9e5; font-size:29px;">Nearby Properties</h3>
    <div class="col-md-12">

@php
$bestRated=DB::table('user_properties')->join('cities','user_properties.city_id','cities.id')->join('subcities','user_properties.subcity_id','subcities.id')->select('user_properties.*','cities.city_name','subcities.subcity_name')->whereIn('status', [1,2])->where('city_name',$property->city_name)->orderBy('id','desc')->get();  //--where('subcity',$property->subcity)->
@endphp

<div class="trends row ml-1 py-5 pl-3">
  {{-- <div class="trends_background"></div>
  <div class="trends_overlay"></div> --}}
  <div class=""></div>
  <div class="trends_overlay" style="background-color: rgba(225, 241, 233, 0.5);"></div>
  <div class="container py-3">
      <div class="row">

          <!-- Trends Content -->
          <div class="col-lg-2">
              <div class="trends_container">
                  <h2 class="trends_title text-primary" style="font-size: 33px;">See Nearby Property</h2>
                  <div class="trends_text"><p style="color: #7d74ff">Explore<br>Your Nearby<br>Neighborhoods...</p></div>
                  <div class="trends_slider_nav">
                      <div class="trends_prev trends_nav" title="Previous"><i class="fas fa-angle-left ml-auto"></i></div>
                      <div class="trends_next trends_nav" title="Next"><i class="fas fa-angle-right ml-auto"></i></div>
                  </div>
              </div>
          </div>

          <!-- Trends Slider -->
          <div class="col-lg-10">
              <div class="trends_slider_container">

                  <!-- Trends Slider -->
                  <div class="owl-carousel owl-theme trends_slider">

  <!-------------------------------------------------------------------->
                      <!-- Trends Slider Item -->
                  @foreach($bestRated as $row)
                      <div class="owl-item my-0 py-0">
                          <div class="trends_item is_new mb-0 pb-0" style="background-color: rgba(167, 167, 255, 0.3)">

                              <div class="trends_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                  <img src="{{ asset($row->image_one) }}" style="width: 200px; height: 200px">
                                  <a href="{{ url('property/details/'.$row->id) }}" class="portfolio-item-overlay" title="Click for details">
                                      <div class="portfolio-item-details text-center">
                                          <!--item logo-->
                                          <h3 style="font-size:12px">{{ $row->type }} For {{ $row->purpose }}</h3>
                                          <!--item strips-->
                                          <span></span>
                                          <!--item description-->
                                          <p style="font-size:13px">{{$row->subcity_name}}, {{$row->city_name}}</p>
                                      </div>
                                  </a>
                              </div>

                              <div class="trends_content" style="margin-top: 5px">
                                  <div class="trends_info clearfix">
                                      <span class="trends_category">
                                          <a href="{{ url('property/details/'.$row->id) }}" title="Click for details">
                                              {{$row->city_name}}
                                          </a>
                                      </span>
                                      @if($row->discount_price == NULL)
                                      @else
                                          <span class="trends_price ml-auto" style="font-size: 15px"><del>৳ {{ $row->price }}</del></span>
                                      @endif
                                  </div>

                                  <div class="trends_info clearfix">
                                      <div class="trends_name">
                                          <a href="{{ url('property/details/'.$row->id) }}" title="Click for details">
                                              {{ $row->subcity_name }}
                                          </a>
                                      </div>
                                      @if($row->discount_price == NULL)
                                          <div class="trends_price ml-auto text-danger" style="font-size: 18px">৳ {{ $row->price }}</div>
                                      @else
                                          <div class="trends_price ml-auto text-danger" style="font-size: 18px">৳ {{ $row->discount_price }}</div>
                                      @endif
                                  </div>

                                  <div class="DealsWeek row no-gutters align-items-center justify-content-start mt-0" style="color:blue">
                                      <span class="col-md-7">{{ $row->type }} For {{ $row->purpose }}</span> <span class="col-md-5 mr-auto justify-content-start"><hr></span>
                                  </div>

                                  <div class="row mb-4">
                                      <div class="col-md-12">
                                          <i class="fas fa-bed" title="Bed Room"> {{$row->bedroom}}</i>&nbsp;|&nbsp;
                                          <i class="fas fa-bath" title="Bath Room"> {{$row->bathroom}}</i>&nbsp; | &nbsp;
                                          <i class="fas fa-car" title="Parking"> {{$row->parking}}</i>&nbsp;|
                                          <i class="fas fa-home" title="Area"> {{$row->area}}</i>
                                      </div>
                                  </div>
                                  <div class="more ml-2" style="margin: 0px 0px;">
  <a class="btn btn-transparent py-2 px-4 mr-3 text-white button-pipaluk button--inverted" style="font-size: 16px" roll="button" data-toggle="modal" data-target="#call{{$row->id}}"><i class="fas fa-phone pr-2"></i> Call </a>
  <a class="btn btn-transparent py-2 px-3 text-white button-pipaluk button--inverted" style="font-size: 16px" roll="button" data-toggle="modal" data-target="#email{{$row->id}}"><i class="far fa-envelope pr-2"></i> Email </a>
                                  </div>
                              </div>

      <!--------'wishlist' using ajax (niche JS ache)-------->
                              <button class="addwishlist invisible" data-id="{{ $row->id }}" title="Add to wishlist">
                                  <div class="trends_fav">
                                      <i class="fa fa-heart text-danger"></i>
                                  </div>
                              </button>

      <!---------(Discount equation)-------->
                              <ul class="trends_marks">
                                  @if($row->discount_price == NULL)
                                      <li class="trends_mark trends_new" style="background: #6868cc;">New</li>
                                  @else
                                  @php
                                  $price= implode(explode(',',$row->price));
                                  $discount_price= implode(explode(',',$row->discount_price));
                                  $amount= $price - $discount_price;
                                  $discount= $amount/$price * 100;
                                  @endphp
                                  <li class="trends_mark trends_new bg-danger" title="Discount Percentage">
                                      {{ intval($discount) }}%
                                  </li>
                                  @endif
                              </ul>

                          </div>
                    </div>
                  @endforeach

              </div>
          </div>
      </div>    <!--col-->

  </div>    <!--row-->
</div>  <!--container-->
</div>

    </div>
</div>    <!---End Nearby Property--->

<!--------//------------//----------//---------End Nearby Property----------//------------//-------------//------------>

    </div> <!--full div-->

</section>

</div> <!--bg-color--->


@endsection
