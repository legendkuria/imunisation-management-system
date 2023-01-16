<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel='stylesheet'  href="{{ url('/css/parent.css')}}">
    <style>
        body {
            font-family: 'Open Sans', Arial, sans-serif;
        }

    </style>
</head>
<body>
        <div class="header1">
            <div class="nav">
                <p>IMMUNISATION SCHEDULE MANAGEMENT SYSTEM</p>
                <a href="{{ route('adminview.create') }}"  class="btn2">Home</a>
            </div>
        </div>
</body>
</html>
