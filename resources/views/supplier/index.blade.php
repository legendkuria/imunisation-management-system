@extends('bar')
@extends('supplier.side')
<?php
    session_start();
	$db = mysqli_connect('localhost', 'root', '', 'vaccine');
   $sql="select * from parent1";
    $abd=mysqli_query($db,$sql);
   $results=mysqli_fetch_all($abd,MYSQLI_ASSOC);
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Supplier | Dashboard</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet'  href="{{ url('/css/supplier.css')}}">
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                     <center>  <h3 style="color: rgb(167, 154, 154);;">Total Vaccine</h3>
                       <h1 style="color: rgb(39, 216, 16);"><?php
                            $rt = mysqli_query($db, "SELECT * FROM addvaccine");
							$num1 = mysqli_num_rows($rt); { ?>
								<b class="label orange pull-right"><?php echo htmlentities($num1); ?></b>
							<?php } ?></h1></center>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

