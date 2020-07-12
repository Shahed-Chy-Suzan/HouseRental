@extends('admin.admin_layouts')
@section('admin_content')

    <div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Report List</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h2 class="card-body-title text-white py-2 pl-4" style="background-color: #63a1e7; font-size:15px;">Total Amount = ( {{number_format($total)}} ) Taka</h2>
          {{-- <h6 class="card-body-title">Total</h6> --}}
          <br>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                    <th class="wd-10p">Property Code</th>
                    <th class="wd-15p">Name</th>
                    <th class="wd-10p">Phone</th>
                    <th class="wd-10p">Email</th>
                    <th class="wd-10p">Date</th>
                    <th class="wd-10p">Price (৳)</th>
                    <th class="wd-10p">Status</th>
                    <th class="wd-10p">Action</th>
                    <th></th>
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
                    {{-- <td>{{date("d-m-Y h:i A",strtotime($row->created_at))}}</td> --}}
                    {{-- <td>{{date("d-m-Y h:i A")}}</td> --}}
                    <td>
                        @if ($row->discount_price == NULL)
                            {{ $row->price }}
                        @else
                            {{ $row->discount_price }} (D)
                        @endif
                    </td>
                    <td>
                    @if($row->status == 0)
                        <span class="badge badge-warning p-1">Pending</span>
                    @elseif($row->status == 1)
                        <span class="badge badge-info p-1">Uploaded</span>
                    @elseif($row->status == 2)
                        <span class="badge badge-info p-1">On Progress </span>
                    @elseif($row->status == 3)
                        <span class="badge badge-success p-1">Delivered </span>
                    @else
                        <span class="badge badge-danger p-1">Canceled </span>
                    @endif
                    </td>
                    <td>
                        <a href="{{ URL::to('view/property/'.$row->id) }}" class="btn btn-sm btn-info">View</a>
                    </td> <td></td>
                </tr>

                @endforeach

              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
      </div><!-- sl-pagebody -->

@endsection
