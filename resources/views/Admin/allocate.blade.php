@extends('Admin.side')
<?php
    session_start();
	$db = mysqli_connect('localhost', 'root', '', 'vaccine');
    if (!$db) {
            echo "connection failed";
        }
        $query = mysqli_query($db, "SELECT parent1.id, parent1.cname,parent1.email,parent1.vname,parent1.date, addvaccine.time, addvaccine.period FROM parent1 INNER JOIN addvaccine  ON parent1.vname=addvaccine.vname") or die( mysqli_error($db));
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin| Allocate</title>
    <link rel='stylesheet'  href="{{ url('/css/style.css')}}">
     <style>
           #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 84.5%;
            top: 130px;
            left: 270px;
            position: fixed;
            }
            .h2{

                top: 50px;
               float: center;
            }

            #customers td, #customers th {

            text-align: center;
            padding: 12px;
            }

            #customers tr:nth-child(even){background-color: #f2f2f2;}

            #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #fff;
            color: grey;
            }
    </style>
</head>
<body>
    <div class="container">
                <div class="h2">
                 <center><h1 style="color: rgb(87, 85, 85); font-size: 25px;"> IMMUNISATION ALLOCATION</h1></center>
                 </div>
       <div class="table">
            <table id="customers">
                <tr>
                    <th>#</th>
                    <th>Child Name</th>
                    <th>Vaccine Name</th>
                    <th>Date Of Birth</th>
                    <th>email</th>
                    <th>Vaccine Remainder</th>
                    <th>Status</th>
                   {{-- <th>Remaining Time</th> --}}
                </tr>
            <?php
            foreach ($query as $row) {
            ?>
                <tr>
                    <td><?=$row['id']; ?></td>
                    <td><?=$row['cname']; ?></td>
                    <td><?=$row['vname']; ?></td>
                    <td><?=$row['date']; ?></td>
                    <td><?=$row['email']; ?></td>
                    <?php
                        $pe=$row['period'];
                        $ti=$row['date'];
                        if($pe=='months')
                        {
                            $p=$row['time'];
                            $m=$p*30;
                            $r=date('Y-m-d', strtotime($row['date']. ' + '.$m.' days'));
                        }
                        else
                        {
                            $p=$row['time'];
                            $m=$p*7;
                            $r=date('Y-m-d', strtotime($row['date']. ' + '.$m.' days'));//86400
                        }
                    ?>

                        <td><?php  echo $r; ?></td>
                        <td id="ans">Not Reached</td>
                        <td id="s" hidden='hidden' >
                        <form action="{{ route('send.email') }}" method="POST" id="form" class="form-container">
                            @csrf
                            <input type="hidden" name="name" value="NYERI REFFERAL HOSPITAL">
                            <input type="hidden" name="email"  value="<?php echo $row['email']; ?>">
                            <input type="hidden"  name="subject"  value="Child Immunisation Notice"><br>
                            <input type="hidden"  name="message"  value="We humbly request you to bring your child for immunisation on the third Day from today.">
                        </form>
                    </td>
                    </tr>

        </div>
        <?php } ?></table>

</body>
</html>
        <script type="text/javascript">
            window.onload = function() {
            // Onload event of Javascript
            // Initializing timer variable
            <?php
                $y=$m*86400;
            ?>
            var x = window.sessionStorage.getItem(<?=$y; ?>) ||2;
            var y = document.getElementById("s");
            // Display count down for 20s
            setInterval(function() {
            if (x <= <?=$y+1; ?> && x >= 1) {
            x--;
            y.innerHTML = '' + x + '';
            if (x == 1) {
            x = <?=$y+1 ?>;
            }
            }
            }, 1000);
            // Form Submitting after 20s
            var auto_refresh = setInterval(function() {
            submitform();
            }, <?=$y/1000?>);
            // Form submit function
            function submitform() {
            document.getElementById("form").submit();
            document.getElementById("ans").innerHTML="notified";
            }}

     </script>
