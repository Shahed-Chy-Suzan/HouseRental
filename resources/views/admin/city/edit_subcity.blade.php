@extends('admin.admin_layouts')
@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
    <div class="sl-pagebody">
      <div class="sl-page-title">
    	  <h5>Subcity Update</h5>
    	</div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Subcity Update</h6>
        <br>
        <div class="table-wrapper">
{{-- validation error --}}
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
{{--End validation error --}}

        <form action="{{url('update/subcity/'.$subcity->id)}}" method="POST">
            @csrf
            <div class="modal-body pd-20">
                <div class="form-group">
                    <label for="catname">Subcity Name</label>
                    <input type="text" class="form-control" name="subcity_name" id="catname" value="{{$subcity->subcity_name}}">
                </div>
                <div class="form-group">
                    <label for="catid">City Name</label>
                    <select name="city_id" id="catid" class="form-control">
                    @foreach ($city as $row)
                        <option value="{{$row->id}}" <?php if ($row->id == $subcity->city_id) {
                            echo "selected";
                        } ?> >{{$row->city_name}}
                        </option>
                    @endforeach
                </select>
                </div>
            </div><!-- modal-body -->
            <div class="modal-footer">
              <button type="submit" class="btn btn-info pd-x-20">Update</button>
            </div>
            </form>
        </div><!-- table-wrapper -->
        </div><!-- card -->
    </div>
@endsection
