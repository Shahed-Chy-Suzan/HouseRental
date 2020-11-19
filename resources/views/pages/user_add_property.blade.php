@extends('layouts.app')
@section('content')

@php
    $city=DB::table('cities')->get();
@endphp



<div style="background: #F5F5FA; padding:80px">
<div class="container">

    <div class=" text-light formHeader w-75 text-center p-4 rounded">
        <h3 style="font-size: 30px; word-spacing: 5px;">Want To Add Your Property Here...?</h3>
        <p class="text-light mb-0">
            Post a room,apartment or home to rent or sell on here and access free tools to manage your properties. Adding your property with us is simple and easy. Just fill in the form below and we will email your confirmation & details.Please don't forget you have to submit the all required field we have added here. For more <a href="#accordion">click here.</a>
        </p>
    </div>


<form action="{{ route('store.user.property') }}" method="post" enctype="multipart/form-data" class="border border-secondary bg-success text-light rounded p-5" style="font-size: 16px;" >
        @csrf
    <div class="form-row mt-5">
      <div class="col-md-4 mb-3 pr-4">
        <label for="v01">Name : </label>
        <input type="text" class="form-control" name="name" id="v01" placeholder="Enter your name" required>
      </div>
      <div class="col-md-4 mb-3 pr-4">
        <label for="v012">Email :</label>
        <input type="email" class="form-control" name="email" id="v012" placeholder="Enter your email" required>
      </div>
      <div class="col-md-4 mb-3 pr-4">
        <label for="v013">Phone No :</label>
        <input type="text" class="form-control" name="phone" id="v013" placeholder="Enter your phone no" required>
      </div>
    </div>


    <div class="form-row">
        <div class="col-md-4 mb-3 pr-4">
            <label for="v">Address :</label>
            <input type="text" class="form-control" name="address" id="v" placeholder="Enter your proper address" required>
        </div>
        <div class="col-md-4 mb-3 pr-4">
            <label for="v5">Thana/Sub-city :</label>
            <input type="text" class="form-control" name="subcity" id="v5" placeholder="Name of your thana" required>
        </div>
      <div class="col-md-4 mb-3 pr-4">
        <label for="va4">City :</label>
        <select class="custom-select form-control ml-0 text-muted d-block" name="city_id" id="va4" required>
            <option value="">Choose your city</option>
            @foreach ($city as $row)
                <option value="{{$row->id}}">{{ $row->city_name }}</option>
            @endforeach
        </select>
      </div>
    </div>

      <div class="form-row">
        <div class="col-md-4 mb-3 pr-4">
            <label for="bedromm">Bedroom :</label>
            <input type="number" min="0" class="form-control" name="bedroom" placeholder="Choose No of Bedroom" id="bedromm" required>
        </div>
        <div class="col-md-4 mb-3 pr-4">
            <label for="bathroom">Bathroom :</label>
            <input type="number" min="0" class="form-control" name="bathroom" placeholder="Choose No of Bathroom" id="bathroom" required>
        </div>
        <div class="col-md-4 mb-3 pr-4">
            <label for="parking">Parking Space :</label>
            <input type="number" min="0" class="form-control" name="parking" placeholder="Choose No of parking" id="parking" required>
        </div>
      </div>

      <div class="form-row">
        <div class="col-md-4 mb-3 pr-4">
            <label for="kitchen">Kithchen :</label>
            <input type="number" min="0" class="form-control" name="kitchen" placeholder="Choose No of Kitchen" id="kitchen" required>
        </div>
        <div class="col-md-4 mb-3 pr-4">
            <label for="area">Area :</label>
            <input type="text" class="form-control" name="area" placeholder="Enter Area (sqft.)" id="bedromm" required>
        </div>
        <div class="col-md-4 mb-3 pr-4">
            <label for="price">Price (৳) :</label>
            <input type="text" class="form-control" name="price" placeholder="Enter Price (৳)" id="price" required>
        </div>
      </div>

      <div class="form-row">
        <div class="col-md-4 mb-3 pr-4">
            <label for="category">Category :</label><div class="ml-4" style="font-size: 15px">
            <div class="radio">
                <label>
                  <input type="radio" name="category" id="Rs1" value="Family" required>&nbsp; Family
                </label>
            </div>
            <div class="radio">
                <label>
                  <input type="radio" name="category" id="Rs2" value="Bachelor">&nbsp; Bachelor
                </label>
            </div>
            <div class="radio">
                <label>
                  <input type="radio" name="category" id="Rs3" value="Sublet">&nbsp; Sublet
                </label>
            </div></div>
        </div>
        <div class="col-md-4 mb-3 pr-4">
            <label for="type">Property Type :</label><div class="ml-5" style="font-size: 15px">
            <div class="radio">
                <label>
                  <input type="radio" name="type" id="R1" value="Flat" required>&nbsp; Flat
                </label>
            </div>
            <div class="radio">
                <label>
                  <input type="radio" name="type" id="R2" value="Home">&nbsp; Home
                </label>
            </div></div>
        </div>
        <div class="col-md-4 mb-3 pr-4">
            <label for="purpose">Purpose :</label><div class="ml-4" style="font-size: 15px">
            <div class="radio">
                <label>
                  <input type="radio" name="purpose" id="Rads1" value="Sale" required>&nbsp; Sale
                </label>
            </div>
            <div class="radio">
                <label>
                  <input type="radio" name="purpose" id="Rads2" value="Rent">&nbsp; Rent
                </label>
            </div></div>
        </div>
      </div>


    <div class="form-row">
        <div class="col-lg-12">
            <div class="form-group">
            <label for="details" class="form-control-label">Property Details :</label>
                <textarea class="form-control text-muted" id="details" name="details" cols="5" rows="5" required>Your Property Description Will Go Here...
                </textarea>
            </div>
        </div>
    </div>


    <div class="form-row">
        <div class="col-lg-8 pr-4">
            <div class="form-group">
            <label for="video" class="form-control-label">Video Link :</label>
                <input class="form-control" placeholder="video link" name="video" id="video">
            </div>
        </div>
        <div class="col-md-4 mb-3 pr-4">
            <div class="form-group">
            <label for="floor">Floor Level :</label>
                <input type="text" class="form-control" name="floor" placeholder="Enter floor level" id="floor">
            </div>
        </div>
    </div>


    <div class="form-row">
        <div class="col-lg-4">
            <label>Image One (Main Thumbnail)<span class="tx-danger">*</span></label>
            <label class="custom-file">
            <input type="file" id="file" class="custom-file-input" name="image_one" onchange="readURL(this);" required="" accept="image">
            <span class="custom-file-control"></span>
            <img src="#" id="one" >
          </label>
        </div>
        <div class="col-lg-4">
            <label>Image Two <span class="tx-danger">*</span></label>
            <label class="custom-file">
            <input type="file" id="file" class="custom-file-input" name="image_two" onchange="readURL1(this);" required="" accept="image">
            <span class="custom-file-control"></span>
            <img src="#" id="two" >
          </label>
        </div>
        <div class="col-lg-4">
            <label>Image Three <span class="tx-danger">*</span></label>
            <label class="custom-file">
            <input type="file" id="file" class="custom-file-input" name="image_three" onchange="readURL2(this);" required="" accept="image">
            <span class="custom-file-control"></span>
            <img src="#" id="three" >
          </label>
        </div>

    </div>


    <div class="form-group mt-5">
      <div class="form-check ml-4">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
        <label class="form-check-label" for="invalidCheck2">Agree to terms and conditions
        </label>
      </div>
    </div>
    <button class="btn btn-warning" type="submit">Proceed to Payment</button>
  </form>

</div>
</div>      <!---------------------End User_Property_Request_From------------------------>






@php
    $setting=DB::table('sitesetting')->first();
@endphp

            <!--------------------- FAQ ------------------------>
    <div id="accordion" role="tablist" class="bg-dark py-5 text-light">
        <div class="container py-4">
            <div class="row text-center">
            <div class="col">
                <h2 class="mb-0">Frequently Asked Questions</h2>
            </div>
            </div>
            <div class="row mt-5">
            <div class="col-md-6">
                <div class="card bg-light text-dark my-2">
                    <div class="card-header text-primary" role="tab">
                        <h4 class="mb-0">
                        <div data-toggle="collapse" href="#questionOne">How quickly will my rental listing be posted on the site? <i class="fa fa-arrow-circle-down float-right"></i></div>
                        </h4>
                    </div>
                    <div class="collapse" id="questionOne" data-parent="#accordion">
                        <div class="card-body">
                        <p class="mb-0" style="font-size: 15px">Listings typically reach the site within an hour of you clicking "Submit". We do run checks to prevent fraudulent rental listings though, so if anything looks not quite right, or if there's a technical delay on our side, it may take up to a day.</p>
                        </div>
                    </div>
                </div>

                <div class="card bg-light text-dark my-2">
                    <div class="card-header text-primary" role="tab">
                        <h4 class="mb-0">
                        <div data-toggle="collapse" href="#questionTwo">What will my rental listing look like? <i class="fa fa-arrow-circle-down float-right"></i></div>
                        </h4>
                    </div>
                    <div class="collapse" id="questionTwo" data-parent="#accordion">
                        <div class="card-body">
                        <p class="mb-0" style="font-size: 15px">If you're posting a Rent, you'll see a preview screen before publish your listing through our mail. This shows you a page similar to what renters will see, so you can make any edits you want before it goes live.</p>
                        </div>
                    </div>
                </div>

                <div class="card bg-light text-dark my-2">
                    <div class="card-header text-primary" role="tab">
                        <h4 class="mb-0">
                        <div data-toggle="collapse" href="#questionThree">Can I share my rental listing? <i class="fa fa-arrow-circle-down float-right"></i></div>
                        </h4>
                    </div>
                    <div class="collapse" id="questionThree" data-parent="#accordion">
                        <div class="card-body">
                        <p class="mb-0" style="font-size: 15px">Absolutely! We'll give your listing a unique URL that you can send to friends or share on social media. It will work for as long as you keep your listing active.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card bg-light text-dark my-2">
                    <div class="card-header text-primary" role="tab">
                        <h4 class="mb-0">
                        <div data-toggle="collapse" href="#questionFour">How will I know when a renter is interested in my listing? <i class="fa fa-arrow-circle-down float-right"></i></div>
                        </h4>
                    </div>
                    <div class="collapse" id="questionFour" data-parent="#accordion">
                        <div class="card-body">
                        <p class="mb-0" style="font-size: 15px">How renters contact you is up to you. You can choose to display your phone number so renters can call or text you directly. If you don’t want to share your number we’ll personally knock you and will forward renter’s written inquiries to your email address. We don’t display your email address, so you don’t have to worry about spam.</p>
                        </div>
                    </div>
                </div>

                <div class="card bg-light text-dark my-2">
                    <div class="card-header text-primary" role="tab">
                        <h4 class="mb-0">
                        <div data-toggle="collapse" href="#questionFive">Can I edit my rental listing after I post it? <i class="fa fa-arrow-circle-down float-right"></i></div>
                        </h4>
                    </div>
                    <div class="collapse" id="questionFive" data-parent="#accordion">
                        <div class="card-body">
                        <p class="mb-0" style="font-size: 15px">Yes. Any listing you create can be edited. If you post a Room for Rent, you’ll be able to edit that listing by contacting with us. If you want a long discussiion about posting an entire unit or home, you can visit in our offices.</p>
                        </div>
                    </div>
                </div>

                <div class="card bg-light text-dark my-2">
                    <div class="card-header text-primary" role="tab">
                        <h4 class="mb-0">
                        <div data-toggle="collapse" href="#questionSix">Who can I contact for further assistance? <i class="fa fa-arrow-circle-down float-right"></i></div>
                        </h4>
                    </div>
                    <div class="collapse" id="questionSix" data-parent="#accordion">
                        <div class="card-body">
                        <p class="mb-0" style="font-size: 15px">If you need help editing or managing your listings, please contact us at <a href="mailto:{{ $setting->email_one }}">{{$setting->email_one}}</a>. For questions specific to Rental Manager, please visit the Offices.<br><br> We’re always open to feedback that will help us give you the best experience possible. For feedback on other types of rentals  Send your feedback on other types of rentals,thoughts and suggestions to <a href="mailto:{{ $setting->email_two }}">{{$setting->email_two}}</a> </p>
                        </div>
                    </div>
                </div>

            </div>
            </div>
        </div>
        </div>



{{------------------------------------------------------------------------------------------------------- --}}

<!--------JQ for image--------->
<script type="text/javascript">
	function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#one')
                  .attr('src', e.target.result)
                  .width(80)
                  .height(80);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>
<script type="text/javascript">
	function readURL1(input) {                  //------------
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#two')                         //------------
                  .attr('src', e.target.result)
                  .width(80)
                  .height(80);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>
<script type="text/javascript">
	function readURL2(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#three')
                  .attr('src', e.target.result)
                  .width(80)
                  .height(80);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>


@endsection
