@extends('admin.admin_layouts')

@section('admin_content')

@php
  $city=DB::table('cities')->get();
  $subcity=DB::table('subcities')->get();
@endphp


<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="#">BariWala</a>
    <span class="breadcrumb-item active">Edit Property Section</span>
    </nav>
    <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40">

        <h6 class="card-body-title">Update Property
            <a href="{{ URL::to('view/property/'.$property->id) }}" class="btn btn-sm btn-info" style="float: right;" >View Property</a>
        </h6>


        <form action="{{ url('update/property/withoutphoto/'.$property->id) }}" method="post">
            @csrf
        <div class="form-layout">

        {{-- <div class="row mg-b-25"> --}}

            <div class="form-row mt-4">
                <div class="col-lg-4 mb-3 pr-4">
                  <label for="va">Name : </label>
                  <input type="text" class="form-control" name="name" id="va" value="{{ $property->name }}" required>
                </div>
                <div class="col-lg-4 mb-3 pr-4">
                  <label for="vali">Email :</label>
                  <input type="email" class="form-control" name="email" id="vali" value="{{ $property->email }}" required>
                </div>
                <div class="col-lg-4 mb-3 pr-4">
                  <label for="va2">Phone No :</label>
                  <input type="text" class="form-control" name="phone" id="va2" value="{{ $property->phone }}" required>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3 pr-4">
                    <label for="vali3">Address :</label>
                    <input type="text" class="form-control" name="address" id="vali3" value="{{ $property->address }}" required >
                </div>
                <div class="col-md-4 mb-3 pr-4">
                    <label for="v4">City :</label>
                    <select class="form-control" name="city_id" id="v4" required>
                        @foreach ($city as $row)
                            <option value="{{ $row->id }}" <?php if ($row->id == $property->city_id) {
                                echo "selected";
                            } ?> >{{ $row->city_name }}</option>
                        @endforeach
                    </select>
                  </div>
                {{-- <div class="col-md-3 mb-3 pr-4">
                    <label for="va5">Thana/Sub-city :</label>
                    <input type="text" class="form-control" name="subcity" id="va5" value="{{ $property->subcity }}" required>
                </div> --}}

                <div class="col-md-4 mb-3 pr-4">
                    <label for="vali3">Thana/Sub-city : ({{ $property->subcity }})</label>
                    <select class="form-control select2" name="subcity_id">
                        <option label="Please at first add '{{ $property->subcity }}' as a Subcity ***"></option>
                        @foreach($subcity as $row)
                    <option value="{{ $row->id }}|{{ $row->subcity_name }}" <?php if ($row->subcity_name == $property->subcity) {
                        echo "selected";
                    } ?> >{{ $row->subcity_name }}</option>
                    @endforeach
                    </select>
                </div>

            </div>


            <div class="form-row">
                <div class="col-md-4 mb-3 pr-4">
                    <label for="bedromm">Bedroom :</label>
                    <input type="number" min="0" class="form-control" name="bedroom" value="{{ $property->bedroom }}" id="bedromm" required>
                </div>
                <div class="col-md-4 mb-3 pr-4">
                    <label for="bathroom">Bathroom :</label>
                    <input type="number" min="0" class="form-control" name="bathroom" value="{{ $property->bathroom }}" id="bathroom" required>
                </div>
                <div class="col-md-4 mb-3 pr-4">
                    <label for="kitchen">Kithchen :</label>
                    <input type="number" min="0" class="form-control" name="kitchen" value="{{ $property->kitchen }}" id="kitchen" required>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3 pr-4">
                    <label for="area">Area :</label>
                    <input type="text" class="form-control" name="area" value="{{ $property->area }}" id="bedromm" required>
                </div>
                <div class="col-md-4 mb-3 pr-4">
                    <label for="price">Price (৳) :</label>
                    <input type="text" class="form-control" name="price" value="{{ $property->price }}" id="price" required>
                </div>
                <div class="col-md-4 mb-3 pr-4">
                    <label for="price1">Discount Price (৳) :</label>
                    <input type="text" class="form-control" name="discount_price" value="{{ $property->discount_price }}" id="price1">
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3 pr-4">
                    <label for="parking">Parking Space :</label>
                    <input type="number" min="0" class="form-control" name="parking" value="{{ $property->parking }}" id="parking" required>
                </div>
                <div class="col-md-4 mb-3 pr-4">
                    <label for="floor">Floor Level :</label>
                    <input type="text" min="0" class="form-control" name="floor" value="{{ $property->floor }}" id="floor">
                </div>
                <div class="col-md-4 mb-3 pr-4">
                    <label for="charge">Service Charge :</label>
                    <input type="text" min="0" class="form-control" name="service_charge" value="{{ $property->service_charge }}" id="charge">
                </div>
            </div>


            <div class="form-row my-3">
                <div class="col-md-4 mb-3 px-3">
                    <label for="category">Category :</label><div class="ml-4" style="font-size: 15px">
                    <div class="radio">
                        <label>
                          <input type="radio" name="category" id="Rs1" value="Family" required <?php if ("Family" == $property->category) {
                            echo "checked";
                        } ?> >&nbsp; Family
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                          <input type="radio" name="category" id="Rs2" value="Bachelor" <?php if ("Bachelor" == $property->category) {
                            echo "checked";
                        } ?> >&nbsp; Bachelor
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                          <input type="radio" name="category" id="Rs3" value="Sublet" <?php if ("Sublet" == $property->category) {
                            echo "checked";
                        } ?> >&nbsp; Sublet
                        </label>
                    </div></div>
                </div>
                <div class="col-md-4 mb-3 pr-3">
                    <label for="type">Property Type :</label><div class="ml-5" style="font-size: 15px">
                    <div class="radio">
                        <label>
                          <input type="radio" name="type" id="R1" value="Flat" required <?php if ("Flat" == $property->type) {
                            echo "checked";
                        } ?> >&nbsp; Flat
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                          <input type="radio" name="type" id="R2" value="Home" <?php if ("Home" == $property->type) {
                            echo "checked";
                        } ?> >&nbsp; Home
                        </label>
                    </div></div>
                </div>
                <div class="col-md-4 mb-3 pr-3">
                    <label for="purpose">Purpose :</label><div class="ml-4" style="font-size: 15px">
                    <div class="radio">
                        <label>
                          <input type="radio" name="purpose" id="Rads1" value="Sale" required <?php if ("Sale" == $property->purpose) {
                            echo "checked";
                        } ?> >&nbsp; Sale
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                          <input type="radio" name="purpose" id="Rads2" value="Rent" <?php if ("Rent" == $property->purpose) {
                            echo "checked";
                        } ?> >&nbsp; Rent
                        </label>
                    </div></div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-lg-12">
                    <div class="form-group">
                    <label class="form-control-label">Property Details :</label>
                        <textarea class="form-control" id="summernote" name="details" required>
                            {{ $property->details}}
                        </textarea>
                    </div>
                </div>
            </div>


            <div class="form-row">
                <div class="col-lg-12">
                    <div class="form-group">
                    <label for="video" class="form-control-label">Video Link :</label>
                        <input class="form-control" placeholder="Enter video link" name="video" id="video" value="{{ $property->video }}">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-lg-12">
                    <div class="form-group">
                    <label for="map_link" class="form-control-label">Map Link :</label>
                        <input class="form-control" placeholder="Enter map_link" name="map_link" id="map_link" value="{{ $property->map_link }}">
                    </div>
                </div>
            </div>

        {{-- </div><!-- row --> --}}



        <hr>



        <div class="row">

            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="trend" value="1" <?php if ($property->trend == 1) {
                    echo "checked";
                    }?> >
                    <span>Trend</span>
                </label>
            </div>
            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="best_rated" value="1" <?php if ($property->best_rated == 1) {
                    echo "checked";
                    }?>>
                    <span>Best Rated</span>
                </label>
            </div>
            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="hot_new" value="1" <?php if ($property->hot_new == 1) {
                    echo "checked";
                    }?>>
                    <span>Hot New</span>
                </label>
            </div>

        </div>

        <br><hr>
        <div class="form-layout-footer">
            <button class="btn btn-info mg-r-5" type="submit">Update</button>
        </div><!-- form-layout-footer -->


        </div><!-- form-layout -->
        </form>
    </div><!-- card -->
</div><!-- sl-pagebody -->




<!---------- Update Property With Photo ---------------->


       <div class="sl-pagebody">
      	   <div class="card pd-20 pd-sm-40">
               <h6 class="card-body-title">Update Property With Photo</h6>
               <form action="{{ url('update/property/photo/'.$property->id) }}" method="post" enctype="multipart/form-data">
               	    @csrf
               <div class="row">
               	 <div class="col-lg-6 col-sm-6">
               	 	<label>Image One (Main Thumbnail)<span class="tx-danger">*</span></label><br>
              	     <label class="custom-file">
      				  <input type="file" id="file" class="custom-file-input" name="image_one" onchange="readURL(this);"  accept="image">
      				  <span class="custom-file-control"></span>
      				   <input type="hidden" name="old_one" value="{{ $property->image_one }}">
      				  <img src="#" id="one" >
      				</label>
               	 </div>
               	 <div class="col-lg-6 col-sm-6">
               	 	<img src="{{ URL::to($property->image_one) }}" style="height: 80px; width: 80px;">
               	 </div>
               </div>
        	   <div class="row">
               	 <div class="col-lg-6 col-sm-6">
               	 	<label>Image Two <span class="tx-danger">*</span></label><br>
              	     <label class="custom-file">
      				  <input type="file" id="file" class="custom-file-input" name="image_two" onchange="readURL1(this);"  accept="image">
      				  <input type="hidden" name="old_two" value="{{ $property->image_two }}">
      				  <span class="custom-file-control"></span>
      				  <img src="#" id="two" >
      				</label>
               	 </div>
               	 <div class="col-lg-6 col-sm-6">
               	 	<img src="{{ URL::to($property->image_two) }}" style="height: 80px; width: 80px;">
               	 </div>
               </div>
                <div class="row">
               	 <div class="col-lg-6 col-sm-6">
               	 	<label>Image Three <span class="tx-danger">*</span></label><br>
              	     <label class="custom-file">
      				  <input type="file" id="file" class="custom-file-input" name="image_three" onchange="readURL2(this);"  accept="image">
      				  <span class="custom-file-control"></span>
      				  <img src="#" id="three" >
      				   <input type="hidden" name="old_three" value="{{ $property->image_three }}">
      				</label>
               	 </div>
               	<div class="col-lg-6 col-sm-6">
               	 	<img src="{{ URL::to($property->image_three) }}" style="height: 80px; width: 80px;">
                </div>

                <br><hr>
               	 <button type="submit" class="btn btn-warning mt-4 ml-3">Update Photo</button>
               </form>

           </div>
       </div>
    </div><!-- sl-mainpanel -->



<!---------------------------------------------------------------------------------------------------------------------------->


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
