@extends('admin.admin_layouts')
@section('admin_content')

    <div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Report List</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Today's Order Report List </h6>
          <br>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Property Code</th>
                  <th class="wd-15p">Name</th>
                  <th class="wd-15p">Phone</th>
                  <th class="wd-10p">Email</th>
                   <th class="wd-10p">Date</th>
                   <th class="wd-10p">Status</th>
                   <th class="wd-10p">Action</th>
                   {{-- <th class="wd-20p"></th> --}}
                </tr>
              </thead>
              <tbody>
                @foreach($order as $row)
                <tr>
                  <td>{{ $row->property_code }}</td>
                  <td>{{ $row->name }}</td>
                  <td>{{ $row->phone }}</td>
                  <td>{{ $row->email }}</td>
                  <td>{{ $row->date }}</td>
                  <td>
                    @if($row->status == 0)
                     <span class="badge badge-warning p-1">Pending</span>
                    @elseif($row->status == 1)
                    <span class="badge badge-info p-1">Responded</span>
                    @endif
                  <td>
                  	<a href="{{ URL::to('view/property/order/'.$row->property_code) }}" class="btn btn-sm btn-info">View</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
      </div><!-- sl-pagebody -->



@endsection
