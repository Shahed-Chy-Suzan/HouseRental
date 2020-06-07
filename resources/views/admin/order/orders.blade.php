@extends('admin.admin_layouts')
@section('admin_content')

    <div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>New Orders Table</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">
            @foreach($order as $row)
                @if ($row->status == 0)
                    New Orders List For Property
                    <a href="{{route('admin.all.order')}}" class="btn btn-sm btn-info" style="float: right;" >All Orders</a> @break
                @else
                    All Orders List For Property
                    <a href="{{route('admin.new.order')}}" class="btn btn-sm btn-info" style="float: right;" >New Orders</a> @break
                @endif
            @endforeach
          </h6>
          <br>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Property Code</th>
                  <th class="wd-15p">Name</th>
                  <th class="wd-15p">Phone</th>
                  <th class="wd-15p">Email</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($order as $row)
                <tr>
                  <td>{{ $row->property_code }}</td>
                  <td>{{ $row->name }}</td>
                  <td>{{ $row->phone }}</td>
                  <td>{{ $row->email }}</td>
                  <td>
                    <a href="{{ URL::to('view/property/order/'.$row->property_code) }}" class="btn btn-sm btn-primary" title="View_Property_Details"><i class="fa fa-eye"></i></a>

                    <a href="{{ URL::to('delete/order/'.$row->id) }}" class="btn btn-sm btn-danger" title="Delete" id="delete"><i class="fa fa-trash"></i></a>

                    @if($row->status == 0)
                        <a href="{{ URL::to('mark/read/order/'.$row->id) }}" class="btn btn-sm btn-success" title="Mark as Responded"><i class="fa fa-check"></i></a>
                    @else
                        <a href="{{ URL::to('mark/unread/order/'.$row->id) }}" class="btn btn-sm btn-warning" title="Mark as New Order"><i class="fa fa-thumbs-down"></i></a>
                    @endif

                </td>

                </tr>
                @endforeach
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
      </div><!-- sl-pagebody -->

@endsection
