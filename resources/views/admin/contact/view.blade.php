@extends('admin.admin_layouts')
@section('admin_content')

    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="#">BariWala</a>
        <span class="breadcrumb-item active">User Contact Message Section</span>
      </nav>
      <div class="sl-pagebody">
      	   <div class="card pd-20 pd-sm-40">

          <p class="mg-b-20 mg-sm-b-30">View User Contact Message</p>

         <div class="row">
         	<div class="col-md-6">
         	    <div class="card">
         	        <div class="card-header"><strong>User</strong> Details</div>

         	        <div class="card-body">
         	    	<table class="table">
         	    		 <tr>
         	    		 	<th>Name : </th>
         	    		 	<th>{{ $view->name }}</th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Phone : </th>
         	    		 	<th>{{ $view->phone }}</th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Email : </th>
         	    		 	<th>{{ $view->email }}</th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Subject : </th>
         	    		 	<th>{{ $view->subject }}</th>
         	    		 </tr>
         	    		  <tr>
         	    		 	<th>Date : </th>
         	    		 	<th>{{ $view->date }}</th>
                          </tr>
                        <tr>
                            <th>Status : </th>
                            <th style="font-size: 15px">
                                @if($view->status == 0)
                                 <span class="badge badge-warning p-1">New Message</span>
                                @else
                                <span class="badge badge-primary p-1">Already Responded</span>
                                @endif
                            </th>
                        </tr>
                        <tr>
                            <th>Review : </th>
                            <th style="font-size: 15px">
                                @if($view->review == 0)
                                    <span class="badge badge-primary p-1">Not showing as a review</span>
                                @else
                                    <span class="badge badge-success p-1">Showing as a review</span>
                                @endif
                            </th>
                        </tr>
         	    	</table>

         	        </div>
         	    </div>
             </div>

         </div>

         <div class="row">
         	<div class="card pd-20 pd-sm-40 col-lg-12">
         	  <h6 class="card-body-title p-3"style="background-color: #E9ECEF"><strong>User Message :</strong> </h6>
         	  <br>
               <div class="col-lg-12">
                <div class="form-group" style="border:1px solid grey;padding:10px; ">
                <p class="text-dark">{!! $view->message !!}</p>
              </div>
            </div>
         	</div><!-- card -->
         </div> <br>


        @if($view->status == 0)
            <a href="mailto:{{ $view->email }}" class="btn btn-block btn-info"><i class="fa fa-reply"></i>&nbsp; Want to sent replay ?</a>
            <a href="{{ URL::to('mark/read/contact/'.$view->id) }}" class="btn btn-block btn-sm btn-danger"><i class="fa fa-check-square"></i>&nbsp; Mark as Read</a>
        @else
            <a href="{{ URL::to('mark/unread/contact/'.$view->id) }}" class="btn btn-block btn-sm btn-danger py-2"><i class="fa fa-thumbs-down"></i>&nbsp; Mark as Unread</a>
        @endif
         <br>
        @if($view->review == 0)
            <a href="{{ URL::to('show/review/contact/'.$view->id) }}" class="btn btn-block btn-sm btn-danger"><i class="fa fa-check-square"></i>&nbsp; Show as a Review</a>
        @else
            <a href="{{ URL::to('dont/review/contact/'.$view->id) }}" class="btn btn-block btn-sm btn-danger py-2"><i class="fa fa-thumbs-down"></i>&nbsp; Don't Show as a Review</a>
        @endif


      </div>
    </div>


@endsection
