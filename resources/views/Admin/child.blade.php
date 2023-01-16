@extends('Admin.side')
<?php
    session_start();
	$db = mysqli_connect('localhost', 'root', '', 'vaccine');
    if(isset($_GET['del']))
	{
		mysqli_query($db,"delete from parent1 where id = '".$_GET['id']."'");
        $_SESSION['delmsg']="Category deleted !!";
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | View Child Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet'  href="{{ url('/css/style.css')}}">

    <style>
            #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 84.5%;
            top: 170px;
            left: 270px;
            position: fixed;
            }
            .delete{
                background-color: rgb(350, 28, 19);
                width: 80px;
                color: #ffffff;
                font-size: 20px;
                border-radius: 3px;
                height: 40px;

            }
            .delete:hover {
            color: #ffffff;
            background: red;
             border: 100%;
            }
            .view{
                background-color: rgb(34, 200, 87);
                width: 120px;
                font-size: 20px;
                height: 40px;
                border-radius: 3px;
                color: #ffffff;
            }


            #customers td, #customers th {

            text-align: center;
            padding: 12px;
            }
             #customers tr:nth-child(even) {
            background-color: #D6EEEE;
            }
            #customers tr{
            border-bottom: 1px solid #ddd;}
            #customers th {
            padding-top: 20px;

            padding-bottom: 12px;
            text-align: center;
            background-color: #fff;
            color: grey;

            }
            tr:hover {background-color: #D6EEEE;}
            .example{
            display: flex;
            top:40px;
            float: right;
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
    </style>
</head>
<body>

    <div class="container"><br><br>
        <center><h1 style="color: rgb(66, 65, 65); font-size: 20px; top: 5px">View Child Details</h1></center>

       <div class="table">
            <table id="customers">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Child Name</th>
                        <th>Child Gender</th>
                        <th>Child Location</th>
                        <th>Child Birth Date</th>
                        <th>Child Weight</th>
                        <th>Vaccine Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @csrf
                <tbody>
                <?php
                $query = mysqli_query($db, "select * from parent1");
                $cnt = 1;
                $d=mysqli_num_rows($query);
                if ($d===0) {
                                        # code...
                ?>
                <tr>
                    <td colspan="9">No records!</td>
                </tr>
                <?php }
                else {
                    while ($detail =mysqli_fetch_array($query) ) {
                ?>
                        <tr>
                            <td><?php echo htmlentities($cnt) ; ?></td>
                            <td><?php echo htmlentities($detail['cname']); ?> </td>
                            <td><?php echo htmlentities($detail['gender']); ?> </td>
                            <td><?php echo htmlentities($detail['location']); ?> </td>
                            <td><?php echo htmlentities($detail['date']); ?>  </td>
                            <td><?php echo htmlentities($detail['weight']); ?> </td>
                            <td><?php echo htmlentities($detail['vname']); ?> </td>
                            <td>
                            <form method="GET" >
                                    <button class="view"><a href="{{route('parent1.edit', $detail['id'])}}" class="view"> View Details</a> </button>
                                    <button class="delete" ><a href="?id=<?php echo $detail['id'] ?>&del=delete" onClick="return confirm('Are you sure you want to delete?')" class="delete">Delete</a></button>
                                    <!-- <img src="{{url('/image/dashboard.png')}}" alt="" width="20rem" height="20rem"> -->
                            </form>  </td>
                        </tr>
                        <?php
                        $cnt = $cnt + 1;
                        } }

                        ?>
            </table>
     </div>
    </div>
</body>
	</script>
</html>
