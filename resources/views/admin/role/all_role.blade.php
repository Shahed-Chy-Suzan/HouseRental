@extends('admin.admin_layouts')
@section('admin_content')

    <div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Admin Table</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Admin List
          	<a href="{{ route('create.admin') }}" class="btn btn-sm btn-warning" style="float: right;" >Add New</a>
          </h6>
          <br>

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Name</th>
                  <th class="wd-15p">Phone</th>
                  <th class="wd-15p">Access</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($user as $row)
                <tr>
                  <td>{{ $row->name }}</td>
                  <td>{{ $row->phone }}</td>
                  <td>
                    @if($row->places == 1)
                        <span class="badge badge-danger p-1">Places</span>
                    @else
                    @endif

                    @if($row->coupon == 1)
                        <span class="badge badge-success p-1">Coupon</span>
                    @else
                    @endif

                    @if($row->blogs == 1)
                        <span class="badge badge-info p-1">Blogs</span>
                    @else
                    @endif

                    @if($row->all_properties == 1)
                        <span class="badge badge-warning p-1">All Properties</span>
                    @else
                    @endif

                    @if($row->orders == 1)
                        <span class="badge badge-danger p-1">Orders</span>
                    @else
                    @endif

                    @if($row->reports == 1)
                        <span class="badge badge-success p-1">Reports</span>
                    @else
                    @endif

                    @if($row->user_role == 1)
                        <span class="badge badge-danger p-1">User Role</span>
                    @else
                    @endif

                    @if($row->newsletter == 1)
                        <span class="badge badge-info p-1">Newsletter</span>
                    @else
                    @endif

                    @if($row->contact_messages == 1)
                        <span class="badge badge-warning p-1">Contact Messages</span>
                    @else
                    @endif

                    @if($row->site_setting == 1)
                        <span class="badge badge-primary p-1">Site Setting</span>
                    @else
                    @endif

                    @if($row->database_backup == 1)
                        <span class="badge badge-danger p-1">Database Backup</span>
                    @else
                    @endif

                  </td>

                  <td>
                  	<a href="{{ URL::to('edit/admin/'.$row->id) }}" class="btn btn-sm btn-info">Edit</a>
                  	<a href="{{ URL::to('delete/admin/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
                  </td>

                </tr>
                @endforeach
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
      </div><!-- sl-pagebody -->

@endsection
