@extends('layouts.app')
@extends('home')
@extends('bar')
@section('content')
<style>
body{
    background:#f1f1f1;
}
.container{
position:fixed;
width: 30%;
left: 600px;
top: 100px;
font-size:15px;
padding: 20px;
height: 550px;
background-color: #ffffff;
font-family:'Open Sans', Arial, sans-serif;
}
.btn34{
 color: #5894d8;
float: right;

}
.card{
    padding: 20px;
}
.col-md-6{
    width:100%;
}
.btn1234{
    background:#5894d8;
    font-size:15px;
    padding: 7px;
    width: 100%;
    border-radius: 5px;
}
.link{
    color:#5894d8;
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
  <h1 class="form-header"> Login </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                 <div class="card">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> --}}

                            <div class="col-md-6">
                                <input id="email" type="Type Email" placeholder="Email" style="width:100%; height:35px;  font-size:15px; font-family:'Open Sans', Arial, sans-serif; " class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus><br><br>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            {{-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> --}}

                            <div class="col-md-6">
                                <input id="password" placeholder="Type Password" type="password" style="width:100%; height:35px;  font-size:15px " class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"><br><br>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" style="width:20px; height:15px; background-color:white;" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember" style="width:95%; height:38px;  font-size:20px ">
                                        {{ __('Remember Me') }}
                                    </label><br><br>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">

                            <button type="submit" style="color:#ffffff; font-size:21px " class="btn1234 btn-primary">
                                    {{ __('Login') }}
                                </button><br><br>

                                @if (Route::has('password.request'))
                                    <a class="btn31 btn-link" href="{{ route('password.request') }}">
                                         <div class="btn34"> {{ __('Forgot Your Password?') }}</div>
                                    </a><br><br><hr><br>
                                @endif
                                <center>
                                    <p>Don't have account yet?</p><br>
                                        <a class="link" href="{{ route('auth.index') }}">Create account here</a>
                                </center>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
