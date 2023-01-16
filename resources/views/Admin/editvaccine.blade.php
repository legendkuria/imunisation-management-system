<?php
    session_start();
	$db = mysqli_connect('localhost', 'root', '', 'vaccine');
    if (isset($_POST['submit'])) {
        $vname = $_POST['vname'];
        $time = $_POST['time'];
        $id = intval($_GET['id']);
        $sql = mysqli_query($db, "update addvaccine set vname='$vname', time='$time' where id='$id'");
        $_SESSION['msg'] = "Category Updated !!";
    }
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
    <?php if (isset($_POST['submit'])) { ?>
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong>Well done!</strong>
                                            <?php echo htmlentities($_SESSION['msg']); ?><?php echo htmlentities($_SESSION['msg'] = ""); ?>
                                        </div>
                                    <?php } ?>
    <form name="addvaccine" method="get">
    @csrf
			@method('PUT')
        <?php

            $query = mysqli_query($db, "select * from addvaccine");
            while ($row = mysqli_fetch_array($query)) {
        ?>
        <label for="basicinput">Vccine Name</label>
        <input type="text"  name="vname" value="<?php echo  htmlentities($row['vname']); ?>" required>
        <label for="basicinput">Time</label>
        <input type="text"  name="time" value="<?php echo  htmlentities($row['time']); ?>" required>
   <button type="submit" name="submit" class="btn">Update</button>
    <?php } ?>
</form>


 </body>
 </html>
