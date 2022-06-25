<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <!-- title -->
    <title>Admin Panel - Bariwala.com</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('public/frontend/logo/logo3.jpg')}}" type="image/x-icon">

    <!-- vendor css -->
    <link href="{{asset('public/backend/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('public/backend/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{asset('public/backend/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{asset('public/backend/lib/rickshaw/rickshaw.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/backend/lib/highlightjs/github.css') }}" rel="stylesheet">
    <link href="{{asset('public/backend/lib/datatables/jquery.dataTables.css')}}" rel="stylesheet">
    <link href="{{asset('public/backend/lib/select2/css/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/backend/lib/summernote/summernote-bs4.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('public/backend/css/toastr.min.css')}}">
    {{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css"> --}}

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{asset('public/backend/css/starlight.css')}}">

  </head>


  <body>

    @guest

    @else
            <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href="{{url('admin/home')}}"><i class="icon ion-android-star-outline"></i> Bariwala.com</a></div>
    <div class="sl-sideleft">
      <div class="sl-sideleft-menu">
        <a href="{{url('admin/home')}}" class="sl-menu-link active">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->


        @if(Auth::user()->places == 1)
            <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
                <span class="menu-item-label">Places</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item"><a href="{{ route('city') }}" class="nav-link">City</a></li>
                <li class="nav-item"><a href="{{ route('subcity') }}" class="nav-link">Sub-City</a></li>
            </ul>
        @else
        @endif


        {{-- @if(Auth::user()->coupon == 1)
        <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
              <i class="menu-item-icon ion-ios-paper-outline tx-20"></i>
              <span class="menu-item-label">Coupon</span>
              <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
          <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{route('coupons')}}" class="nav-link">Coupon</a></li>
          </ul>
        @else
        @endif --}}

        {{-- <a href="mailbox.html" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-24"></i>
            <span class="menu-item-label"><a href="{{ }}">Coupon</a></span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link --> --}}


        @if(Auth::user()->blogs == 1)
        <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
              <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
              <span class="menu-item-label">Blogs</span>
              <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->
          <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('postCategory.name') }}" class="nav-link">Category</a></li>
            <li class="nav-item"><a href="{{ route('add.blogpost') }}" class="nav-link">Add Post</a></li>
            <li class="nav-item"><a href="{{ route('all.blogpost') }}" class="nav-link">All Post</a></li>
          </ul>
        @else
        @endif


@if(Auth::user()->all_properties == 1)
<a href="#" class="sl-menu-link">
    <div class="sl-menu-item">
    <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
    <span class="menu-item-label">All Properties</span>
    <i class="menu-item-arrow fa fa-angle-down"></i>
    </div><!-- menu-item -->
</a><!-- sl-menu-link -->
<ul class="sl-menu-sub nav flex-column">
    {{-- <li class="nav-item"><a href="{{ route('admin.add.property') }}" class="nav-link">Add New Property</a></li> --}}
    <li class="nav-item"><a href="{{ route('pending.user_property') }}" class="nav-link">Pending for Approval</a></li>
    <li class="nav-item"><a href="{{ route('admin.uploaded.property') }}" class="nav-link">Uploaded Properties</a></li>
    <li class="nav-item"><a href="{{ route('admin.delivery.progress') }}" class="nav-link">Delivery On Progress</a></li>
    <li class="nav-item"><a href="{{ route('admin.delivered.property') }}" class="nav-link">Successfully Delivered</a></li>
    <li class="nav-item"><a href="{{ route('admin.cancelled.property') }}" class="nav-link">Cancelled Properties</a></li>
</ul>
@else
@endif


        @if(Auth::user()->orders == 1)
        <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
              <i class="menu-item-icon icon ion-ios-cart-outline tx-24"></i>
              <span class="menu-item-label">Orders</span>
              <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{route('admin.add.order')}}" class="nav-link">Add New Order</a></li>
            <li class="nav-item"><a href="{{route('admin.new.order')}}" class="nav-link">New Pending Orders</a></li>
            <li class="nav-item"><a href="{{route('admin.all.order')}}" class="nav-link">All Orders</a></li>
        </ul>
        @else
        @endif


        @if(Auth::user()->reports == 1)
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
            <span class="menu-item-label">Reports</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('today.order') }}" class="nav-link">Today's Order</a></li>
          <li class="nav-item"><a href="{{ route('today.delevered') }}" class="nav-link">Today Delevered</a></li>
          <li class="nav-item"><a href="{{ route('this.month') }}" class="nav-link">This Month</a></li>
          <li class="nav-item"><a href="{{ route('search.report') }}" class="nav-link">Search Report</a></li>
        </ul>
        @else
        @endif


        @if(Auth::user()->user_role == 1)
        <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
            <span class="menu-item-label">User Role</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('create.admin') }}" class="nav-link">Create User</a></li>
            <li class="nav-item"><a href="{{ route('create.user.role') }}" class="nav-link">All User</a></li>
        </ul>
        @else
        @endif


        @if(Auth::user()->newsletter == 1)
        <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
            <i class="menu-item-icon ion-ios-paper-outline tx-20"></i>
            <span class="menu-item-label">Newsletter</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{route('admin.newsletter')}}" class="nav-link">Newsletter</a></li>
        </ul>
        @else
        @endif


        @if(Auth::user()->contact_messages == 1)
        <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
            <i class="menu-item-icon ion-ios-filing-outline tx-20"></i>
            <span class="menu-item-label">Review-Messages</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{route('admin.new.contact')}}" class="nav-link">New Messages</a></li>
            <li class="nav-item"><a href="{{route('admin.all.contact')}}" class="nav-link">All Messages</a></li>
        </ul>
        @else
        @endif


        @if(Auth::user()->site_setting == 1)
        <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
            <i class="menu-item-icon ion-ios-gear-outline tx-20"></i>
            <span class="menu-item-label">Site Settings</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('admin.site.setting') }}" class="nav-link">Site Setting</a></li>
        </ul>
        @else
        @endif


        @if(Auth::user()->database_backup == 1)
        <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
            <i class="menu-item-icon ion-ios-gear-outline tx-20"></i>
            <span class="menu-item-label">Database Backup</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('admin.database.backup') }}" class="nav-link">Database Backup </a></li>
        </ul>
        @else
        @endif


    </div><!-- sl-sideleft-menu -->


      <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->





    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div><!-- sl-header-left -->
      <div class="sl-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                <span class="logged-name">{{ Auth::user()->name }}</span>
                <img src="{{asset('public/backend/img/img6.jpg')}}" class="wd-32 rounded-circle" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
                <ul class="list-unstyled user-profile-nav">
                    <li><a href="#"><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                    <li><a href="{{route('admin.password.change')}}"><i class="icon ion-ios-gear-outline"></i> Password Change</a></li>
                    <li><a href="{{ route('admin.logout') }}"><i class="icon ion-power"></i> Sign Out</a></li>
                </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
        <div class="navicon-right">
          {{-- <a id="btnRightMenu" href="" class="pos-relative"> --}}
            <i class="icon ion-ios-bell-outline"></i>
            <!-- start: if statement -->
            {{-- <span class="square-8 bg-danger"></span> --}}
            <!-- end: if statement -->
          {{-- </a> --}}
        </div><!-- navicon-right -->
      </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->





    <!-- ########## START: RIGHT PANEL ########## -->
    {{-- <div class="sl-sideright">
      <ul class="nav nav-tabs nav-fill sidebar-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" role="tab" href="#messages">Messages (2)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" role="tab" href="#notifications">Notifications (8)</a>
        </li>
      </ul><!-- sidebar-tabs -->

      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane pos-absolute a-0 mg-t-60 active" id="messages" role="tabpanel">
          <div class="media-list">
            <!-- loop starts here -->
            <a href="" class="media-list-link">
              <div class="media">
                <img src="../img/img3.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p>
                  <span class="d-block tx-11 tx-gray-500">2 minutes ago</span>
                  <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                </div>
              </div><!-- media -->
            </a>
            <!-- loop ends here -->
            <a href="" class="media-list-link">
              <div class="media">
                <img src="../img/img4.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Samantha Francis</p>
                  <span class="d-block tx-11 tx-gray-500">3 hours ago</span>
                  <p class="tx-13 mg-t-10 mg-b-0">My entire soul, like these sweet mornings of spring.</p>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link">
              <div class="media">
                <img src="../img/img7.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Robert Walker</p>
                  <span class="d-block tx-11 tx-gray-500">5 hours ago</span>
                  <p class="tx-13 mg-t-10 mg-b-0">I should be incapable of drawing a single stroke at the present moment...</p>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link">
              <div class="media">
                <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Larry Smith</p>
                  <span class="d-block tx-11 tx-gray-500">Yesterday, 8:34pm</span>

                  <p class="tx-13 mg-t-10 mg-b-0">When, while the lovely valley teems with vapour around me, and the meridian sun strikes...</p>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link">
              <div class="media">
                <img src="../img/img3.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p>
                  <span class="d-block tx-11 tx-gray-500">Jan 23, 2:32am</span>
                  <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                </div>
              </div><!-- media -->
            </a>
          </div><!-- media-list -->
          <div class="pd-15">
            <a href="" class="btn btn-secondary btn-block bd-0 rounded-0 tx-10 tx-uppercase tx-mont tx-medium tx-spacing-2">View More Messages</a>
          </div>
        </div><!-- #messages -->

        <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="notifications" role="tabpanel">
          <div class="media-list">
            <!-- loop starts here -->
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="../img/img8.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                  <span class="tx-12">October 03, 2017 8:45am</span>
                </div>
              </div><!-- media -->
            </a>
            <!-- loop ends here -->
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="../img/img9.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Social Network</strong></p>
                  <span class="tx-12">October 02, 2017 12:44am</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="../img/img10.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700">20+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
                  <span class="tx-12">October 01, 2017 10:20pm</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                  <span class="tx-12">October 01, 2017 6:08pm</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="../img/img8.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 12 others in a post.</p>
                  <span class="tx-12">September 27, 2017 6:45am</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="../img/img10.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700">10+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
                  <span class="tx-12">September 28, 2017 11:30pm</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="../img/img9.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Great Pyramid</strong></p>
                  <span class="tx-12">September 26, 2017 11:01am</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                  <span class="tx-12">September 23, 2017 9:19pm</span>
                </div>
              </div><!-- media -->
            </a>
          </div><!-- media-list -->
        </div><!-- #notifications -->

      </div><!-- tab-content -->
    </div><!-- sl-sideright --> --}}
    <!--------------------- ########## END: RIGHT PANEL ########## --------------------->


    @endguest


    @yield('admin_content')


    <!-----Js_Files------->
    <script src="{{ asset('public/backend/lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('public/backend/lib/popper.js/popper.js') }}"></script>
    <script src="{{ asset('public/backend/lib/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('public/backend/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
    <script src="{{ asset('public/backend/lib/highlightjs/highlight.pack.js') }}"></script>
    <script src="{{ asset('public/backend/lib/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('public/backend/lib/datatables-responsive/dataTables.responsive.js') }}"></script>
    <script src="{{ asset('public/backend/lib/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('public/backend/lib/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('public/backend/lib/medium-editor/medium-editor.js') }}"></script>
    <script src="{{ asset('public/backend/js/starlight.js') }}"></script>

<!-----for Description box------->
     <script>
      $(function(){
        'use strict';

        // Inline editor
        var editor = new MediumEditor('.editable');

        // Summernote editor
        $('#summernote').summernote({
          height: 150,
          tooltip: false
        })
      });
    </script>
    <script>
      $(function(){
        'use strict';

        // Inline editor
        var editor = new MediumEditor('.editable');

        // Summernote editor
        $('#summernote1').summernote({
          height: 150,
          tooltip: false
        })
      });
    </script>

{{-------- data Tables JS -------}}
    <script>
      $(function(){
        'use strict';

        $('#datatable1').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });

        $('#datatable2').DataTable({
          bLengthChange: false,
          searching: false,
          responsive: true
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>



    <script src="{{ asset('public/backend/lib/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{ asset('public/backend/lib/jquery.sparkline.bower/jquery.sparkline.min.js')}}"></script>
    <script src="{{ asset('public/backend/lib/d3/d3.js')}}"></script>
    <script src="{{ asset('public/backend/lib/rickshaw/rickshaw.min.js')}}"></script>
    <script src="{{ asset('public/backend/lib/chart.js/Chart.js')}}"></script>
    <script src="{{ asset('public/backend/lib/Flot/jquery.flot.js')}}"></script>
    <script src="{{ asset('public/backend/lib/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{ asset('public/backend/lib/Flot/jquery.flot.resize.js')}}"></script>
    <script src="{{ asset('public/backend/lib/flot-spline/jquery.flot.spline.js')}}"></script>
    <script src="{{ asset('public/backend/js/ResizeSensor.js')}}"></script>
    <script src="{{ asset('public/backend/js/dashboard.js')}}"></script>

    <script src="{{asset('public/backend/js/sweetalert2.min.js')}}"></script>
    <script src="{{asset('public/backend/js/toastr.min.js')}}"></script>

    {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>  --}}




<!---- Sweet Alert(for DELETE button)----->
    <script>
      $(document).on("click","#delete",function(e){
        e.preventDefault();
          var link = $(this).attr("href");
           swal({
              title: 'Are you want to delete?',
              text: "Once delete,This will be Permanently Delete!",
              icon: 'warning',
              buttons: true,
              dangerMode: true,

          })
          .then((willDelete) => {
              if (willDelete) {
                      window.location.href= link;
              }else{
                  swal("Safe Data!");
              }
              });
      });
  </script>


<!---- Sweet Alert(for CANCEL button)----->
<script>
    $(document).on("click", "#cancel", function(e){
        e.preventDefault();
        var link = $(this).attr("href");
           swal({
             title: "Are you Want to Cancel?",
             text: "Once Cancel,You will find it in 'Cancelled Order' option!",
             icon: "warning",
             buttons: true,
             dangerMode: true,
           })
           .then((willDelete) => {
             if (willDelete) {
                  window.location.href = link;
             } else {
               swal("Safe Order!");
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



  </body>
</html>
