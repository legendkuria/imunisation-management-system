
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Supplier | Dashboard</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet'  href="{{ url('/css/parent.css')}}">
    <style>
.btn451{
    background:#5894d8 ;
    color: #ffffff;
    padding: 1.8%;
    position: absolute;
    left: 10px;
    text-align: center;
    border-radius: 3px;
    font-size: 20px;
    align-content: right;
    top: 350px;
    width: 90%;
    height: 6%;

    float: right;
}
.btn451:hover {
    color: black;
    background: #f1f1f1;

    border: 100%;}
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
                Supplier
             </div>
         </center><br>
        <ul>
            <a href="{{route('allocate.create')}}"><li><img src="{{url('/image/dashboard.png')}}" alt="" width="25rem" height="25rem">&nbsp; Dashboard</li></a>
             <a href="{{route('adminvaccine.index')}}"><li><img src="{{url('/image/add.png')}}"alt="" width="25rem" height="25rem">&nbsp; Add Vaccine</li> </a>
            <div class="logout">
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="btn451" href="{{ route('logout') }}"
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
