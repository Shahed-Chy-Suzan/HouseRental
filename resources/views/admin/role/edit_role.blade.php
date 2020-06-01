@extends('admin.admin_layouts')
@section('admin_content')

    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="#">Bariwala</a>
        <span class="breadcrumb-item active">Admin Section</span>
      </nav>
      <div class="sl-pagebody">
      	   <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Edit Admin  </h6>
          <p class="mg-b-20 mg-sm-b-30"> Admin Edit form</p>

          <form action="{{ route('update.admin') }}" method="post" >
          	@csrf
          <input type="hidden" name="id" value="{{ $user->id }}">

          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label"> Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="name"  required="" value="{{ $user->name }}">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="phone"  required="" value="{{ $user->phone }}">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Email <span class="tx-danger">*</span></label>
                  <input class="form-control" type="email" name="email"  required="" value="{{ $user->email }}">
                </div>
              </div><!-- col-4 -->

            </div><!-- row -->
            <br><hr>
            <div class="row">
            	<div class="col-lg-4">
            		<label class="ckbox">
					  <input type="checkbox" name="places" value="1"   <?php  if ($user->places == 1) {
					        	echo "checked";
					  }  ?>  >
					  <span>Places</span>
					</label>
            	</div>
            	<div class="col-lg-4">
            		<label class="ckbox">
					  <input type="checkbox" name="coupon" value="1"  <?php  if ($user->coupon == 1) {
					        	echo "checked";
					  }  ?>>
					  <span>Coupon</span>
					</label>
            	</div>
            	<div class="col-lg-4">
            		<label class="ckbox">
					  <input type="checkbox" name="blogs" value="1"  <?php  if ($user->blogs == 1) {
					        	echo "checked";
					  }  ?>>
					  <span>Blogs</span>
					</label>
            	</div>
            	<div class="col-lg-4">
            		<label class="ckbox">
					  <input type="checkbox" name="all_properties" value="1"  <?php  if ($user->all_properties == 1) {
					        	echo "checked";
					  }  ?>>
					  <span>All Properties</span>
					</label>
            	</div>
            	<div class="col-lg-4">
            		<label class="ckbox">
      					  <input type="checkbox" name="orders" value="1"  <?php  if ($user->orders == 1) {
					        	echo "checked";
					  }  ?>>
      					  <span>Orders</span>
      					</label>
            	</div>

              <div class="col-lg-4">
                <label class="ckbox">
                  <input type="checkbox" name="reports" value="1"  <?php  if ($user->reports == 1) {
					        	echo "checked";
					  }  ?>>
                  <span>Reports</span>
                </label>
              </div>

              <div class="col-lg-4">
                <label class="ckbox">
                  <input type="checkbox" name="user_role" value="1"  <?php  if ($user->user_role == 1) {
					        	echo "checked";
					  }  ?>>
                  <span>User Role</span>
                </label>
              </div>
              <div class="col-lg-4">
                <label class="ckbox">
                  <input type="checkbox" name="newsletter" value="1"  <?php  if ($user->newsletter == 1) {
					        	echo "checked";
					  }  ?>>
                  <span>Newsletter</span>
                </label>
              </div>
              <div class="col-lg-4">
                <label class="ckbox">
                  <input type="checkbox" name="contact_messages" value="1" <?php  if ($user->contact_messages == 1) {
					        	echo "checked";
					  }  ?>>
                  <span>Contact Messages</span>
                </label>
              </div>
              <div class="col-lg-4">
                <label class="ckbox">
                  <input type="checkbox" name="site_setting" value="1" <?php  if ($user->site_setting == 1) {
					        	echo "checked";
					  }  ?>>
                  <span>Site Setting</span>
                </label>
              </div>
              <div class="col-lg-4">
                <label class="ckbox">
                  <input type="checkbox" name="database_backup" value="1" <?php  if ($user->database_backup == 1) {
					        	echo "checked";
					  }  ?>>
                  <span>Database Backup</span>
                </label>
              </div>

            </div>

            <br><br><hr>
            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5" type="submit">Update </button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
          </form>
        </div><!-- card -->

      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->

@endsection
