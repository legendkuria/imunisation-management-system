<?php
    session_start();
    $db = mysqli_connect('localhost', 'root', '', 'vaccine');
    $sql="select * from parent1 ";

    $abd=mysqli_query($db,$sql);
   $results=mysqli_fetch_all($abd,MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parent | View Child Details</title>
    <link rel='stylesheet'  href="{{ url('/css/parent.css')}}">

    <style>
        #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        top: 230px;

        }
        .btnn{
            background:#5894d8 ;
            color: #ffffff;
            padding: 0.6%;
            position: absolute;
            right: 3px;
            top: 4px;
            border-radius: 3px;
            font-size: 13px;
            align-content: right;
            float: right;
        }
        .btnn:hover {
            color: black;

            background: #f1f1f1;

            border: 100%;
        }

        #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: center;
        background-color: #04AA6D;
        color: white;
        }
    </style>
</head>
<body>
    <div class="side-menu">
       <ul>
            <li> Dashboard</li>
            <li><a href="{{route('parent1.create')}}">Add New Child </a></li>
            <li> View Child Details</li>
            <li> My Vaccine Remainder</li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <p>Vaccination Schedule Management System</p>
                <a href="{{route('logout')}}" class="btn">Logout</a>
            </div>
        </div>
        <h1>View Child Details</h1>
        <button type="submit" class="btnn">Update Child Details</button>

            <table id="customers">
                <tr>
                    <th>Child Name</th>
                    <th>Child Gender</th>
                    <th>Child Location</th>
                    <th>Child Birth Date</th>
                    <th>Child Weight</th>
                    <th>Child Height</th>
                     <th>Vaccine</th>
                </tr>
                <?php foreach($results as $row){ ?>
                    <tr>
                        <td><?php echo ($row['cname']);?></td>

                        <td><?php echo ($row['gender']);?></td>
                        <td><?php echo ($row['location']);?></td>
                        <td><?php echo ($row['date']);?></td>
                        <td><?php echo ($row['weight']);?></td>
                        <td><?php echo ($row['height']);?></td>
                        <td><?php echo ($row['vname']);?></td>
                    </tr>
                <?php } ?>
             </table>
             {{Auth::user()->name}}
    </div>
</body>
</html>
