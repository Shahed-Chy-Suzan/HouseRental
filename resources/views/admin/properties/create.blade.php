@extends('admin.admin_layouts')

@section('admin_content')

{{-- @php
  $city=DB::table('cities')->get();
  $subcity=DB::table('subcities')->get();
@endphp --}}


<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="#">BariWala</a>
    <span class="breadcrumb-item active">Property Add Section</span>
    </nav>
    <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Add New Property</h6>

        <form action="{{ route('store.user.property') }}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="form-layout">

        {{-- <div class="row mg-b-25"> --}}

            <div class="form-row mt-4">
                <div class="col-lg-4 mb-3 pr-4">
                  <label for="va">Name : </label>
                  <input type="text" class="form-control" name="name" id="va" placeholder="Enter Name" required>
                </div>
                <div class="col-lg-4 mb-3 pr-4">
                  <label for="vali">Email :</label>
                  <input type="email" class="form-control" name="email" id="vali" placeholder="Enter Email" required>
                </div>
                <div class="col-lg-4 mb-3 pr-4">
                  <label for="va2">Phone No :</label>
                  <input type="text" class="form-control" name="phone" id="va2" placeholder="Enter Phone No" required>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3 pr-4">
                    <label for="vali3">Address :</label>
                    <input type="text" class="form-control" name="address" id="vali3" placeholder="Enter Proper Address" required>
                </div>
                <div class="col-md-4 mb-3 pr-4">
                    <label for="v4">City :</label>
                    <select class="form-control" name="city_id" id="v4" required>
                        <option> Select City </option>
                        @foreach ($city as $row)
                            <option value="{{ $row->id }}">{{ $row->city_name }}</option>
                        @endforeach
                    </select>
                  </div>

                <div class="col-md-4 mb-3 pr-4">
                    <label for="va5">Thana/Sub-city :</label>
                    <input type="text" class="form-control" name="subcity" id="va5" placeholder="Enter Thana/Subcity Name" required>
                </div>

                {{-- <div class="col-md-4 mb-3 pr-4">
                    <label for="vali3">Thana/Sub-city : </label>
                    <select class="form-control select2" name="subcity_id">
                        <option> Choose Thana/Sub-city </option>
                        @foreach ($subcity as $row)
                            <option value="{{ $row->id }}">{{ $row->subcity_name }}</option>
                        @endforeach
                    </select>
                </div> --}}
            </div>

            <div class="form-row mt-1">
                <div class="col-md-3 mb-3 pr-4">
                    <label for="bedromm">Bedroom :</label>
                    <input type="number" min="0" class="form-control" name="bedroom" id="bedromm" placeholder="Choose No of Bedroom" required>
                </div>
                <div class="col-md-3 mb-3 pr-4">
                    <label for="bathroom">Bathroom :</label>
                    <input type="number" min="0" class="form-control" name="bathroom" id="bathroom" placeholder="Choose No of Bathroom" required>
                </div>
                <div class="col-md-3 mb-3 pr-4">
                    <label for="kitchen">Kithchen :</label>
                    <input type="number" min="0" class="form-control" name="kitchen" id="kitchen" placeholder="Choose No of Kitchen" required>
                </div>
                <div class="col-md-3 mb-3 pr-4">
                    <label for="parking">Parking Space :</label>
                    <input type="number" min="0" class="form-control" name="parking" id="parking" placeholder="Choose No of Parking" required>
                </div>
            </div>

            <div class="form-row mb-2">
                <div class="col-md-3 mb-3 pr-4">
                    <label for="area">Area :</label>
                    <input type="text" class="form-control" name="area" id="bedromm" placeholder="Enter Area (sqft.)" required>
                </div>
                <div class="col-md-3 mb-3 pr-4">
                    <label for="price">Price (৳) :</label>
                    <input type="text" class="form-control" name="price" id="price" placeholder="Enter Price (৳)" required>
                </div>
                <div class="col-md-3 mb-3 pr-4">
                    <label for="floor">Floor Level :</label>
		            <input type="text" class="form-control" name="floor" placeholder="Enter Floor Level" id="floor">
                </div>
                <div class="col-md-3 mb-3 pr-4">
                    <label for="service_charge">Service Charge :</label>
		            <input type="text" class="form-control" name="service_charge" placeholder="Enter Service Charge" id="floor">
                </div>
            </div>


            <div class="form-row my-3">
                <div class="col-md-4 mb-3 px-3">
                    <label for="category">Category :</label><div class="ml-4" style="font-size: 15px">
                    <div class="radio">
                        <label>
                          <input type="radio" name="category" id="Rs1" value="Family" required >&nbsp; Family
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
                <div class="col-md-4 mb-3 pr-3">
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
                <div class="col-md-4 mb-3 pr-3">
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
                    <label class="form-control-label">Property Details :</label>
                        <textarea class="form-control" id="summernote" name="details" required>

                        </textarea>
                    </div>
                </div>
            </div>


            <div class="form-row">
                <div class="col-lg-12">
                    <div class="form-group">
                    <label for="video" class="form-control-label">Video Link :</label>
                        <input class="form-control" placeholder="Enter video link" name="video" id="video">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-lg-12">
                    <div class="form-group">
                    <label for="map_link" class="form-control-label">Map Link :</label>
                        <input class="form-control" placeholder="Enter map_link" name="map_link" id="map_link">
                    </div>
                </div>
            </div>
            <br>

        {{-- </div><!-- row --> --}}

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
                <label> Image Two : <span class="tx-danger"> * &nbsp;</span></label>
                <label class="custom-file">
                <input type="file" id="file" class="custom-file-input" name="image_two" onchange="readURL1(this);" required="" accept="image">
                <span class="custom-file-control"></span>
                <img src="#" id="two" >
              </label>
            </div>
            <div class="col-lg-4">
                <label>Image Three : <span class="tx-danger">*</span></label>
                <label class="custom-file">
                <input type="file" id="file" class="custom-file-input" name="image_three" onchange="readURL2(this);" required="" accept="image">
                <span class="custom-file-control"></span>
                <img src="#" id="three" >
              </label>
            </div>

        </div>


        <br><br><hr>

        <div class="row">

            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="trend" value="1">
                    <span>Trend</span>
                </label>
            </div>
            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="best_rated" value="1">
                    <span>Best Rated</span>
                </label>
            </div>
            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="hot_new" value="1">
                    <span>Hot New</span>
                </label>
            </div>

        </div>

        <input type="hidden" name="added_by" value="admin">

        <br><hr>
        <div class="form-layout-footer">
            <button class="btn btn-info mg-r-5" type="submit">Submit</button>
        </div><!-- form-layout-footer -->


        </div><!-- form-layout -->
        </form>
    </div><!-- card -->
</div><!-- sl-pagebody -->
</div>


<!---------------------------------------------------------------------------------------------------------------------------->



<!-------------JQ for image---------------->
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
