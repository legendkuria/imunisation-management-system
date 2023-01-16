<?php
$db = mysqli_connect('localhost', 'root', '', 'vaccine');
    if(isset($_POST['submitc'])){
        $qu = $_POST['search2'];
        $query = mysqli_query($db, "select * from addvaccine where vname = '$qu'");
       $row = mysqli_fetch_array($query);
       echo "<pre>";
        print_r($row);
        echo "</pre>";
    }
?>
