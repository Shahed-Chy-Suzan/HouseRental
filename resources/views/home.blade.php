@extends('layouts.app')
@section('content')

{{-- @php
  $order=DB::table('orders')->where('user_id',Auth::id())->orderBy('id','DESC')->limit(10)->get();
@endphp --}}

    <div class="contact_form py-5" style="background: #F5F5FA">
        <div class="container  py-3">
            <div class="row">
               <div class="col-9 card">
                 <table class="table table-response table-hover ">
                   <thead>
                     <tr>
                       <th scope="col">PaymentType</th>
                       <th scope="col">Payment ID</th>
                       <th scope="col">Amount</th>
                       <th scope="col">Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Status Code</th>
                        <th scope="col">Action</th>
                        <th></th>
                     </tr>
                   </thead>
                   <tbody>
                    {{-- @foreach($order as $row) --}}
                     <tr>
                       <td>Dump</td>
                       <td>Dump</td>
                       <td>Dump $</td>
                       <td>Dump</td>
                       <td>
                       	{{-- @if($row->status == 0)
                       	 <span class="badge badge-warning">Pending</span>
                       	@elseif($row->status == 1)
                       	<span class="badge badge-info">Payment Accept</span>
                       	@elseif($row->status == 2)
                       	 <span class="badge badge-info">Progress </span>
                       	 @elseif($row->status == 3)
                       	 <span class="badge badge-success">Delevered </span>
                       	 @else
                       	 <span class="badge badge-danger">Cancel </span>
                       	 @endif --}}<span class="badge badge-danger">Cancel </span>
                       </td>
                       <td>Dump</td>
                       <td>
                        <a href="" class="btn btn-sm btn-info">View</a>
                       </td>
                     </tr>
                    {{-- @endforeach --}}
                   </tbody>
                 </table>
               </div>


               <div class="col-3">
                 <div class="card" style="width: 18rem;">
                  <img src="{{ asset('public/avatar.jpg') }}" class="card-img-top mt-3" style="height: 90px; width: 90px; margin-left: 34%;" >
                  <div class="card-body">
                    <h5 class="card-title text-center">{{ Auth::user()->name }}</h5>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="{{ route('password.change') }}"> Password Change </a></li>
                    <li class="list-group-item"><a href="{{ route('password.change') }}"> Edit Profile </a></li>
                    <li class="list-group-item"><a href="{{--{{ route('success.orderlist') }}--}}"> Return Order </a></li>
                  </ul>
                  <div class="card-body">
                    <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">Logout</a>
                  </div>
                </div>
               </div>
            </div>
        </div>
    </div>

@endsection
