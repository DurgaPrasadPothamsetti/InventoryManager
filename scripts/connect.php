<?php
    $connection = mysqli_connect("localhost","root","");
    if(!$connection){
         die("Failed to connect to server".mysqli_error($connection));
    }

    $select_db = mysqli_select_db($connection,"bussiness");
    if(!$select_db){

        die("Failed to connect to db".mysqli_error($select_db));
    }
?>
