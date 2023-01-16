<?php
    session_start();
	$db = mysqli_connect('localhost', 'root', '', 'vaccine');
    if(isset($_GET['del']))
	{
		mysqli_query($db,"delete from addvaccine where id = '".$_GET['id']."'");
        $_SESSION['delmsg']="Category deleted !!";
	}
    if(isset($_POST['submitc'])){
        $qu = $_POST['search2'];
        $query = mysqli_query($db, "select * from addvaccine where vname = '$qu'");
       $row = mysqli_fetch_array($query);
       echo "<pre>";
        print_r($row);
        echo "</pre>";
    }


 ?>
@extends('Admin.side')
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> Admin| add Vaccine</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet'  href="{{ url('/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
            <style>
            body {font-family: Arial, Helvetica, sans-serif;}

            /* Full-width input fields */
            input[type=text]{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: none;
            }
            form.example input[type=text] {
            padding: 10px;
            font-size: 17px;
            border: 1px solid grey;
            float: left;
            width: 80%;
            background: #f1f1f1;
            }

            form.example button {
            float: left;
            width: 20%;
            padding: 10px;
            background: #2196F3;
            color: white;
            font-size: 17px;
            border: 1px solid grey;
            border-left: none;
            cursor: pointer;
            }

                form.example button:hover {
                background: #0b7dda;
                }

                form.example::after {
                content: "";
                clear: both;
                display: table;
                }

            /* Set a style for all buttons */
            button {
            background-color: #5894d8 ;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border-radius: 10px;
            cursor: pointer;
            width: auto;
            left: 20px;
            }

            button:hover {
            opacity: 0.8;

            }

            /* Extra styles for the cancel button */
            .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
            }
            .search12{
                width: 200px;
                float: right;
                padding: 14px;
                border-radius: 5px;


            }
      /* Center the image and position the close button */
            .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
            }

            img.avatar {
            width: 10%;
            border-radius: 20%;
            }

            .container12 {
            padding: 16px;
            }

            span.psw {
            float: right;
            padding-top: 16px;
            }

            /* The Modal (background) */
            .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            padding-top: 60px;
            }

            /* Modal Content/Box */
            .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 40%; /* Could be more or less, depending on screen size */
            }

            /* The Close Button (x) */
            .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
            }
            .button66{
                left:15px;
                top: 10px;
                position: absolute;
            }
            /* Add Zoom Animation */
            .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
            }

            @-webkit-keyframes animatezoom {
            from {-webkit-transform: scale(0)}
            to {-webkit-transform: scale(1)}
            }

            @keyframes animatezoom {
            from {transform: scale(0)}
            to {transform: scale(1)}
            }

            /* Change styles for span and cancel button on extra small screens */
            @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
            }
            }

                .containerr{
                width: 70%;
                position: relative;
                left:-10px;
                top: 60px;
                }

            </style>
</head>
    <body>
            <div class="container">
                    <div class="se">
                        <button onclick="document.getElementById('id01').style.display='block'" class="button66">Add Vaccine</button>
                            <div id="id01" class="modal">
                                <form action="{{route('adminvaccine.store')}}" method="POST"class="modal-content animate">
                                @csrf
                                    <div class="imgcontainer">
                                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Form">&times;</span>
                                        <img src="{{url('/image/ad.jpg')}}" alt="Avatar" class="avatar">
                                    </div>
                                        <div class="container12">
                                        <label for="vname"><b>Vaccine Name</b></label>
                                        <input type="text" placeholder="Enter Vaccine Name" name="vname" required>
                                        <label for="date"><b>Time To Be Taken </b></label>
                                        <div class="s" style="display: flex;">
                                            <input type="number" placeholder="Enter Time To Be Taken " name="time" required>
                                            <select name="period" required>
                                                <option value='weeks'>weeks</option>
                                                <option value='months'>months</option>
                                            </select>
                                        </div>
                                        <center><button type="submit">ADD</button> </center>
                                    </div>
                                </form>
                            </div>
                    </div>
                    <form class="example" action="{{route('allocate.create')}}" method="POST" style="margin:auto;max-width:300px">
                        @csrf
                        @method('PUT')
                        <input type="text" placeholder="Search.." name="search2">
                        <button type="submitc"><i class="fa fa-search"></i></button>
                      </form>
                    <div class="containerr">
                        <div>
                            <table id="editable"class="customers">
                                   <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Vaccine Name</th>
                                            <th>Time To Be Taken </th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <?php
                                        $query = mysqli_query($db, "select * from addvaccine");
                                        $cnt = 1;
                                        while ($row = mysqli_fetch_array($query)) {
                                    ?>@csrf
                                       <tbody>
                                            <tr>
                                                <td><?php echo htmlentities($cnt); ?></td>
                                                <td><?php echo htmlentities($row['vname']); ?></td>
                                                <td><?php echo htmlentities($row['time']); ?><?php echo htmlentities($row['period']); ?></td>
                                                <td>
                                                    <form method="GET" action="{{ route('allocate.edit', $row['id']) }}">
                                                        {{-- <button><img src="{{url('/image/edit.png')}}" width='20' height='20'/></button>&nbsp;&nbsp;&nbsp;&nbsp; --}}
                                                        <a href="?id=<?php echo $row['id'] ?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"><img src="{{url('/image/del.png')}}" width='30' height='30'/></a>

                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    <?php
                                        $cnt = $cnt + 1;
		                             } ?>
                            </table>
                        </div>
                    </div>
                </div>
                <script>// Get the modal
                    var modal = document.getElementById('id01'); // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function(event)
                        if (event.target == modal)
                        {
                            modal.style.display = "none";
                        }
                </script>
</body>
</html>

