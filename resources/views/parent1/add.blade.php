<?php
    session_start();
	$db = mysqli_connect('localhost', 'root', '', 'vaccine');
   $sql="select * from addvaccine";
    $abd=mysqli_query($db,$sql);
   $results=mysqli_fetch_all($abd,MYSQLI_ASSOC);
    $r=mysqli_query($db, "SELECT * FROM parent1");
    if (mysqli_num_rows($r) > 0)
     {
                if($fetch = mysqli_fetch_array($r))
             {
                mysqli_query($db, "INSERT INTO vaccine_dates VALUES('', '$fetch[cname]', '$fetch[vname]', '$fetch[email]','$fetch[date]','$fetch[created_at]', '$fetch[updated_at]')") or die(mysqli_error($db));
              }
    }

?>
@extends('parent1.side')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parent | Add Details</title>
    <link rel='stylesheet'  href="{{ url('/css/parent.css')}}">
    <style>
        h1{
        width: 100%;
        }
        .btnn{
          background-color: yellow;
          width:40%;
        }
        .text{
          background-color:white;
          border:1px solid #ccc;
          width: 30%;
          margin: 8px 0;
          display: inline-block;
          padding:8px 16px;
          box-sizing: none;
        }

        .container1 {
            position:fixed;
            width: 80%;
            left:250px;
            align-content: center;
            top: 80px;
            font-size: 17px;
            padding: 20px;
            height: 830px;
            background-color: white;
            font-family:sans-serif;
        }
       .container1 .header4{
            top: 6px;
            align-items: center;
            width: 100%;
            height: 10%;
            font-size: 17px;
            background-color: #f1f1f1;
        }
        select{
          width: 30%;
          height: 40px;
        }

        input[type='submit']{
          width:100px;
          height:35px;
          border-radius:50px 50px 50px 50px;
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
</head>
<body>
    <div class="container">
        <div class="form holder">
            <form action="{{route('parent1.store')}}" method="POST" class="container1">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                    </div>
                @endif
                 <h1 class="form-header"> Add Details</h1>
                <div style="padding:25px;font-size:17px; font-family: sans-serif;">
                    <label name="email"> <b>Your email:</b></label>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                    <input type="text" name="email" class="text" placeholder="Enter Your Email Address" size="40px" required/>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                    <label name="cname"> <b>Child Name:</b></label>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                    <input type="text" name="cname" class="text" placeholder="Enter Child Full Name" size="40px" required/>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<br><br>
                    <label style="font-display: b;"><b>Child Gender:</b></label>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gender" value="Male" required>Male
                    <input type="radio" name="gender" value="Female" required/>Female &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                    <label ><b>Child Birth Date: </b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="date" name="date" style="width:30%; height: 40px;" />&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<br><br><br>
                    <label ><b>Child Location:</b></label>&nbsp; &nbsp;
                    <select name="location" required>
                        <option value="none" selected disabled hidden> Select Location</option>
                        <option value="NyeriTown">Nyeri Town</option>
                        <option value="kieni">Kieni</option>
                        <option value="mukurweini">Mukurweini</option>
                        <option value="othaya">Othaya</option>
                        <option value="tetu">Tetu</option>
                        <option value="mathira">Mathira</option>
                    </select>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;

                    <label><b>Child Weight(kg): </b></label>&nbsp;&nbsp;
                    <input type="number" name="weight" class="text" placeholder="Weight" required/>  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<br><br>
                    <label ><b>Select type of Vaccine</b></label>
                    <?php
                        $results = mysqli_query($db, "SELECT * FROM addvaccine");
                        while ($row = mysqli_fetch_array($results))
                            {
                                echo
                                "<table>
                                    <tr>
                                        <td>
                                            <input type='radio' name='vname[]' value='".$row['vname']."' />".$row['vname']."
                                        </td>
                                    </tr>
                                 </table>";
                            }
                    ?><br><br><br>
                    <center><input type="submit" name="submit" value="Submit Details" style=" width: 40%; align-text:center; background: #5894d8; height: 40px;"></center>

                </div>
            </form>
        </div>
    </div>
</body>
</html>
