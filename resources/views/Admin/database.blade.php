<?php
    session_start();
	$db = mysqli_connect('localhost', 'root', '', 'vaccine');
   $sql="select * from addvaccine Where vname='$vname'";
    $abd=mysqli_query($db,$sql);
   $results=mysqli_fetch_all($abd,MYSQLI_ASSOC);
 ?>
