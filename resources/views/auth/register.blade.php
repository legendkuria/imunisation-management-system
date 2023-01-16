@extends('layouts.app')
@extends('home')
@extends('bar')
@section('content')
<style>
body{
    background:#f1f1f1;
}
.link{
    color:#5894d8;
}
.container{
position:fixed;
width: 30%;
left: 600px;
top: 100px;
font-size:20px;
padding: 20px;
height: 600px;
background-color: #ffffff;
font-family:sans-serif;
}
.holder{
      border-radius: 8px;
}
.card{
    padding: 10px;
}
.col-md-6{
    width:100%;
}
.btn23{
    background:#5894d8;
    font-size:15px;
    padding: 7px;
    width: 100%;
    border-radius: 5px;
    color:white;
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
</style>
<div class="container">

        <h1 class="form-header"> Register </h1>

    <div class="row">
        <div class="col-md-8">
            <div style="width: 100%;">

            </div>
                <div class="card">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="holder">
                                        <input id="name" type="text" placeholder="Type Name" style="width:100%; border-radius: 4px;height:38px;  font-size:20px " name="name" value="{{ old('name') }}" required autocomplete="name" autofocus><br><br>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">

                                    <div class="col-md-6">
                                        <input id="email" type="email" placeholder="Type Email" style="width:100%; border-radius: 4px; height:38px; font-size:20px" name="email" value="{{ old('email') }}" required autocomplete="email"><br><br>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">


                                    <div class="col-md-6">
                                        <input id="password" type="password" placeholder="Type Password" style="width:100%; border-radius: 4px; height:38px; font-size:20px" name="password" required autocomplete="new-password"><br><br>

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">


                                    <div class="col-md-6">
                                        <input id="password-confirm" placeholder="Confirm Password" type="password" style="width:100%; border-radius: 4px; height:38px; font-size:20px" name="password_confirmation" required autocomplete="new-password"><br><br>
                                    </div>
                                </div>


                                        <button type="submit" style="width:100%; height:38px;  font-size:20px " class="btn23">
                                            {{ __('Register') }}
                                        </button> <br><br><br><hr><br><br>
                            </div>
                                <center>
                                    <p>Already Have Account?</p><br>
                                    <a class="link" href="{{ route('auth.create') }}">Login into your account</a>
                                </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
