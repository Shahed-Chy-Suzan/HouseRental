@extends('layouts.app')
@section('content')

@php
  $profile=DB::table('users')->where('id',Auth::id())->first();
@endphp

    <div class="contact_form py-5" style="background: #F5F5FA">
        <div class="container py-3">
            <div class="row">

<!--------------- Register Form --------------->
    <div class="col-md-6 offset-md-1 logreg" data-aos="fade-right">
        <div class="contact_form_container">
            <h3 class="contact_form_title text-center text-primary">Update Profile</h3>

            <form action="{{ url('update/user/profile/'.$profile->id) }}" id="contact_form" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Full Name </label>
                    <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Full Name" name="name" value="{{ $profile->name }}" required="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone </label>
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" aria-describedby="emailHelp" placeholder="Enter Phone" value="{{ $profile->phone }}" required="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email </label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" aria-describedby="emailHelp" placeholder="Enter Email" value="{{ $profile->email }}" required="">
                </div>
                <div class="contact_form_button more more2">
                    <button type="submit" class="btn btn-block bg-transparent text-white button-pipaluk button--inverted px-4 py-1" style="font-size:16px;">Submit</button>
                </div>
            </form>

        </div>
    </div>



<!------User-Profile----------------------->
            <div class="col-4 offset-md-1" data-aos="fade-left">
                <div class="card" style="width: 18rem;">

                <a href="{{ route('home') }}">
                    <img src="{{ asset('public/avatar.jpg') }}" class="card-img-top rounded-circle mt-3" style="height: 90px; width: 90px; margin-left: 34%;">
                </a>
                <div class="card-body more moreApp" style="margin-left: 80px;">
                    <a href="{{ route('home') }}" class="button-pipaluk button--inverted text-primary px-4 pt-1"> <h4 class="text-center">{{ Auth::user()->name }}</h4></a>
                </div>

                <ul class="list-group list-group-flush ml-4">
                <li class="list-group-item more moreS py-1"><a href="{{ route('home') }}" class="button-pipaluk button--inverted px-5 py-2 text-primary ml-4">My Profile </a></li>
                <li class="list-group-item more moreS py-1"><a href="{{ route('password.change') }}" class="button-pipaluk button--inverted px-4 py-2 text-primary ml-4"> Change Password </a></li>
                <li class="list-group-item more moreS py-1"><a href="{{ route('add.property.user')}}" class="button-pipaluk button--inverted pl-4 py-2 text-primary ml-4" style="padding-right:35px;">Add My Property</a></li>
                </ul>
                <div class="card-body more more2 p-1">
                <a href="{{ route('user.logout') }}" class="btn bg-transparent text-white button-pipaluk button--inverted btn-block btn-sm py-1" style="font-size:15px;">Logout</a>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection
