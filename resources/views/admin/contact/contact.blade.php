@extends('admin.admin_layouts')
@section('admin_content')

    <div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>User Contact Message Table</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">
                @foreach($contact as $row)
                    @if ($row->status==0)
                        User's New Message List
                        <a href="{{route('admin.all.contact')}}" class="btn btn-sm btn-info" style="float: right;" >All Responded Message</a> @break
                        </div>
                    @else
                        User's All Responded Message List
                        <a href="{{route('admin.new.contact')}}" class="btn btn-sm btn-info" style="float: right;" >New Messages</a> @break
                        </div>
                    @endif
                @endforeach
            </h6>

          <br>

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Name</th>
                  <th class="wd-15p">Phone</th>
                  <th class="wd-15p">Email</th>
                  <th class="wd-15p">Status</th>
                  <th class="wd-15p">Review</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($contact as $row)
                <tr>
                  <td>{{ $row->name }}</td>
                  <td>{{ $row->phone }}</td>
                  <td>{{ $row->email }}</td>
                  <td style="font-size: 15px">
                    @if($row->status == 0)
                     <span class="badge badge-warning p-1">New Message</span>
                    @else
                     <span class="badge badge-primary p-1">Already Responded</span>
                    @endif
                  </td>
                  <td style="font-size: 15px">
                    @if($row->review == 0)
                     <span class="badge badge-warning p-1">Not Showing</span>
                    @else
                     <span class="badge badge-primary p-1">Showing </span>
                    @endif
                  </td>
                  <td>
                    <a href="{{ URL::to('view/contact/'.$row->id) }}" class="btn btn-sm btn-info" title="View Details"><i class="fa fa-eye"></i></a>
                    <a href="{{ URL::to('delete/contact/'.$row->id) }}" class="btn btn-sm btn-danger" title="Delete" id="delete"><i class="fa fa-trash"></i></a>

                    @if($row->status == 0)
                        <a href="{{ URL::to('mark/read/contact/'.$row->id) }}" class="btn btn-sm btn-success" title="Mark as Read"><i class="fa fa-check"></i></a>
                    @else
                        <a href="{{ URL::to('mark/unread/contact/'.$row->id) }}" class="btn btn-sm btn-warning" title="Mark as Unread"><i class="fa fa-thumbs-down"></i></a>
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
