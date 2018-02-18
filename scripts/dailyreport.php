<?php
  require_once('connect.php');
  $today_sales=0;
  $date = date("Y-m-d");
  $sql = "SELECT `id`, `price` FROM `item`";
  $res = mysqli_query($connection,$sql);
  foreach ($_POST as $name => $val)
  {
       $row = mysqli_fetch_array($res);
       if($row[0]==$name){
         $today_sales= $today_sales+($row[1]*$val);
       }
  }

  $query = "INSERT INTO `salesdata`(`Date`,`sales`) VALUES ('$date',$today_sales)";
  $result = mysqli_query($connection,$query);
  echo $today_sales;
?>
