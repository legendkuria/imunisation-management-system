@extends('parent1.side')
<?php
    session_start();
	$db = mysqli_connect('localhost', 'root', '', 'vaccine');
   $sql="select * from parent1";
    $abd=mysqli_query($db,$sql);
   $results=mysqli_fetch_all($abd,MYSQLI_ASSOC);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parent | Dashboard</title>
    <link rel='stylesheet'  href="{{ url('/css/parent.css')}}">

    <style>
    .container {
        position: fixed;
        left: 270px;
        top: -10px;
        width: 84%;
        margin-top: 10vh;
        min-height: 10vh;
        height: 85%;
        background-color: #ffffff;
    }
    .remainder{
        top: 20px;
    }
    </style>


</head>
<body>
    <div class="container">
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <center><h3 style="color: rgb(42, 40, 44);">Added Vaccine</h3>
                            <h1 style="color: rgb(236, 13, 117);"><?php
                                $rt = mysqli_query($db, "SELECT * FROM addvaccine");
                                $num1 = mysqli_num_rows($rt); { ?>
                                <b class="label orange pull-right"><?php echo htmlentities($num1); ?></b>
                                <?php } ?></h1></center></h1>
                        </div></center>
                    </div>
                    <div class="card">
                        <div class="box">
                           <center> <h3 style="color: rgb(7, 7, 7);">Allocated Vaccine</h3>
                            <h1 style="color: rgb(85, 77, 201);"><?php
                                $rt = mysqli_query($db, "SELECT * FROM addvaccine");
                                $num1 = mysqli_num_rows($rt); { ?>
                                    <b class="label orange pull-right"><?php echo htmlentities($num1); ?></b>
                                <?php } ?></h1></center>
                        </div>
                    </div>
                </div>
            </div>
         <hr>
                <div class="table">
                    <b><h3>Vaccination Schedule</h3></b>
                        <table class="customers">
                               <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Vaccine Name</th>
                                        <th>Child will take vaccine at age of;</th>

                                    </tr>
                                </thead>
                                @csrf
                                <tbody>
                                <?php
                                    $query = mysqli_query($db, "select * from addvaccine");
                                    $cnt = 1;
                                    $d=mysqli_num_rows($query);
                                    if ($d===0) {
                                        # code...
                                ?>
                                <tr>
                                    <td colspan="3">No Vaccine Added</td>
                                </tr>
                                <?php }
                                else {
                                while ($row =mysqli_fetch_array($query) ) {
                                ?>
                                        <tr>
                                            <td><?php echo htmlentities($cnt); ?></td>
                                            <td><?php echo htmlentities($row['vname']); ?></td>
                                            <td><?php echo htmlentities($row['time']); ?></td>
                                        </tr>
                                    </tbody>
                                <?php
                                    $cnt = $cnt + 1;
                                        } }

                                        ?>


                        </table>
                </div>
        </div>
    </div>
</body>
</html>
