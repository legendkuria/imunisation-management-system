
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Admin | Dashboard</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet'  href="{{ url('/css/parent.css')}}">


    <style>
        .user{
            color: rgb(68, 64, 64);
            font-size: 25px;
        }
    </style>
</head>
<body>
 <div class="header">
            <div class="nav">

                <p style="font-size:24px ;">IMMUNISATION SCHEDULE MANAGEMENT SYSTEM</p>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="btn10" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </button><br><br>

            </div>
        </div>
    <div class="side-menu"><br>
       <center>
           <img src="{{url('/image/user.png')}}" alt="" width="60rem" height="60rem">
           <div class="user">
               <p style="font-size: 20px; color:white;">Welcome  Back</p>
                {{Auth::user()->name}}
            </div>
        </center><br>
        <ul>

            <a href="{{route('parent1.index')}}"><li> <img src="{{url('/image/dashboard.png')}}" alt="" width="25rem" height="25rem">&nbsp; Dashboard</li></a>
            <a href="{{route('parent1.create')}}"><li><img src="{{url('/image/childd.png')}}" alt="" width="25rem" height="25rem">&nbsp; Add New Child</li></a>
           {{-- <li> <img src="{{url('/image/not.png')}}" alt="" width="25rem" height="25rem">&nbsp;Vaccine Remainder</li> --}}
        </ul>
    </div>
</body>
</html>
