@extends('layouts.app')

@section('content')



<div style="background-image: linear-gradient(to top, rgba(254, 254, 254,.3) , #F5F5FA);">

                <!---------------User Log-in & Register Form --------------->

<!--------------- Log-in Form --------------->
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/contact_styles.css')}}">

    <div class="contact_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-1 logreg">
                    <div class="contact_form_container">
                        <div class="contact_form_title text-center text-primary">Sign In</div>

                        <form action="{{ route('login') }}" id="contact_form" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email Or Phone</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  aria-describedby="emailHelp" placeholder="Email Or Phone" required="">
                                @error('email')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required=""  aria-describedby="emailHelp" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="contact_form_button more more2">
                                <button type="submit" class="btn bg-transparent text-white button-pipaluk button--inverted px-4 py-2" style="font-size:16px;">Login</button>
                            </div>
                        </form><br>
                        <a href="{{ route('password.request') }}">I Forgot My Password.</a>
                        <br><br>
{{-------Socialite-----------}}
                        <span class="more"><button type="submit" class="btn btn-block text-white bg-transparent button-pipaluk button--inverted" style="font-size: 15px; padding:8px; margin-top:1px"><i class="fab fa-facebook-square"></i>  Login With Facebook</button></span>
                        <span class="more more2"><a href="{{ url('/auth/redirect/google') }}" class="btn btn-block text-white bg-transparent button-pipaluk button--inverted" style="font-size: 15px; padding:8px; margin-top:1px"><i class="fab fa-google-plus-square"></i>  Login With Google</a></span>

                    </div>
                </div>



<!------------//---------------//---------------//------------------//-----------------//--------------//---------------->



<!--------------- Register Form --------------->
                 <div class="col-lg-5 offset-lg-1 logreg">
                    <div class="contact_form_container">
                        <div class="contact_form_title text-center text-primary">Sign Up</div>

                        <form action="{{ route('register') }}" id="contact_form" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Full Name </label>
                                <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Full Name " name="name" required="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone </label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"  aria-describedby="emailHelp" placeholder="Phone "  required="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email </label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  aria-describedby="emailHelp" placeholder="Email " required="">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" aria-describedby="emailHelp" placeholder="Password" name="password" required="" autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Confirm Password</label>
                                <input type="password" class="form-control" aria-describedby="emailHelp" placeholder="Re-type Password" name="password_confirmation" required="" autocomplete="new-password">
                            </div>
                            <div class="contact_form_button more">
                                <button type="submit" class="btn bg-transparent text-white button-pipaluk button--inverted px-4 py-2" style="font-size:16px;">Sign Up</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="panel"></div>
    </div>


</div>

@endsection
