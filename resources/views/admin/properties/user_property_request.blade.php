@extends('admin.admin_layouts')
@section('admin_content')

  <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>User-Property-Added Table</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          {{-- <h6 class="card-body-title">User-Property-Added List </h6> --}}
            <h6 class="card-body-title text-primary">
                @foreach($property as $row)
                    @if($row->status==0)
                        Pending properties for approval - Table : @break
                    @elseif($row->status==1)
                        Uploaded Properties - Table @break
                    @elseif($row->status==2)
                        Properties on progress for delivery - Table : @break
                    @elseif($row->status==3)
                        Successfully Delivered Properties - Table : @break
                    @else
                        Cancelled Properties - Table : @break
                    @endif
                @endforeach
            </h6>
          <br>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-5p">Property Code</th>
                  <th class="wd-5p">User Name</th>
                  <th class="wd-5p">Phone</th>
                  <th class="wd-5p">City Name</th>
                  <th class="wd-5p">Sub-City</th>
                  <th class="wd-5p">Image</th>
                  <th class="wd-5p">Price (৳)</th>
                  <th class="wd-10p">Action</th>
                  <th class="wd-5p"></th>
                </tr>
              </thead>
              <tbody>
                @foreach($property as $row)
                <tr>
                  <td>{{ $row->property_code }}</td>
                  <td>{{ $row->name }}</td>
                  <td>{{ $row->phone }}</td>
                  <td>{{ $row->city_name }}</td>
                  <td>{{ $row->subcity }}</td>
                  <td><img src="{{ URL::to($row->image_one) }}" height="40px;" width="45px;"></td>
                  {{-- <td>{{ $row->price }}</td> --}}
                    @if (isset($row->discount_price))
                        <td>৳ {{ $row->discount_price }} (D)</td>
                    @else
                        <td>৳ {{ $row->price }}</td>
                    @endif
                  <td>
                    @if($row->status==0 || $row->status==1 || $row->status==2)
                        <a href="{{ URL::to('edit/property/'.$row->id) }}" class="btn btn-sm btn-info" title="Edit"><i class="fa fa-edit"></i></a>
                        <a href="{{ URL::to('delete/property/'.$row->id) }}" class="btn btn-sm btn-danger" title="Delete" id="delete"><i class="fa fa-trash"></i></a>
                        <a href="{{ URL::to('view/property/'.$row->id) }}" class="btn btn-sm btn-warning" title="View_Details"><i class="fa fa-eye"></i></a>
                        <a href="{{ url('admin/property/cancel/'.$row->id) }}" class="btn btn-sm btn-danger" title="Cancel_Property" id="cancel"><i class="fa fa-times"></i></a>
                    @elseif($row->status==3)
                        <a href="{{ URL::to('delete/property/'.$row->id) }}" class="btn btn-sm btn-danger" title="Delete" id="delete"><i class="fa fa-trash"></i></a>
                        <a href="{{ URL::to('view/property/'.$row->id) }}" class="btn btn-sm btn-warning" title="View_Details"><i class="fa fa-eye"></i></a>
                    @else
                        <a href="{{ URL::to('edit/property/'.$row->id) }}" class="btn btn-sm btn-info" title="Edit"><i class="fa fa-edit"></i></a>
                        <a href="{{ URL::to('delete/property/'.$row->id) }}" class="btn btn-sm btn-danger" title="Delete" id="delete"><i class="fa fa-trash"></i></a>
                        <a href="{{ URL::to('view/property/'.$row->id) }}" class="btn btn-sm btn-warning" title="View_Details"><i class="fa fa-eye"></i></a>
                    @endif
                  </td>
                  <td></td>

                </tr>
                @endforeach
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
      </div><!-- sl-pagebody -->
  </div>

@endsection
