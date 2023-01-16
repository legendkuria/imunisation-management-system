@extends('layouts.app')
@extends('bar')
@section('content')
<style>
    body{
    background:#f1f1f1;
}
.container{
position:fixed;
width: 20%;
left: 700px;
top: 150px;
font-size:15px;
padding: 20px;
height: 350px;
background-color: #ffffff;
font-family:'Open Sans', Arial, sans-serif;
}
h1.form-header {
	margin: 0;
    left:0px;
   padding: 25px 20px;
   top:0px;
	width:cover;
	text-align: center;
	background: white;
	border-radius: 5px 5px 0 0;

	color: blue;
	font-size: 20px;
	text-transform: uppercase;
	font-weight: 350;
    }
.btn23{
    background:#5894d8;
    font-size:15px;
    padding: 7px;
    width: 100%;
    border-radius: 5px;
    color:white;
}
</style>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1 class="form-header"> Reset Password </h1>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row mb-3">


                            <div class="col-md-6">
                                <input id="email" placeholder="Enter Email Address" style="width:100%; height:35px;  font-size:15px; font-family:'Open Sans', Arial, sans-serif; " type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br>

                        <div class="row mb-3">


                            <div class="col-md-6">
                                <input id="password" placeholder="Enter Password" style="width:100%; height:35px;  font-size:15px; font-family:'Open Sans', Arial, sans-serif; "type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br>

                        <div class="row mb-3">


                            <div class="col-md-6">
                                <input id="password-confirm" placeholder="Confirm Password" style="width:100%; height:35px;  font-size:15px; font-family:'Open Sans', Arial, sans-serif; "type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div><br>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn23">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
