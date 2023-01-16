
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Admin | Dashboard</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet'  href="{{ url('/css/style.css')}}">
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
              <a href="{{ route('adminview.create') }}" class="btn">HOME</a>
            </div>
        </div>
    <div class="side-menu"><br>
        <center>
            <img src="{{url('/image/user.png')}}" alt="" width="60rem" height="60rem">
            <div class="user">
                <p style="font-size: 20px; color:white;">Welcome  Back</p>
                ADMIN
             </div>
         </center><br>
        <ul>
            <a href="{{route('Admin.create')}}"><li><img src="{{url('/image/dashboard.png')}}" alt="" width="25rem" height="25rem">&nbsp; Dashboard</li></a>
            {{-- <li><img src="{{url('/image/childd.png')}}" alt="" width="25rem" height="25rem">&nbsp; Add Child Details</li></a><br><br> --}}
            <a href="{{route('edit.index')}}"> <li><img src="{{url('/image/childd.png')}}" alt="" width="25rem" height="25rem">&nbsp;Add Child</li></a>
             <a href="{{route('adminview.index')}}"><li><img src="{{url('/image/child.png')}}" alt="" width="25rem" height="25rem">&nbsp; Child Details</li></a>
             {{-- <a href="{{route('adminvaccine.index')}}"><li><img src="{{url('/image/add.png')}}"alt="" width="25rem" height="25rem">&nbsp; Add Vaccine</li> </a> --}}
             <a href="{{route('allocate.index')}}"><li><img src="{{url('/image/allocate.png')}}" alt="" width="25rem" height="25rem">&nbsp; Allocate Vaccine</li></a>
            <a href="{{route('report.index')}}"><li><img src="{{url('/image/report.jpg')}}" alt="" width="25rem" height="25rem">&nbsp; View Reports</li></a><br><br>
            <div class="logout">
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            {{-- <img src="{{url('/image/logout.png')}}" alt="" width="20rem" height="20rem">&nbsp; --}}
            <a class="btn45" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </ul></div>
    </div>
</body>
</html>
