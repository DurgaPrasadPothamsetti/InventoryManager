<?php
  require_once('connect.php');
  foreach ($_POST as $name => $val)
  {
       $query= "update item SET quantity = quantity - $val WHERE id = $name";
       $result=mysqli_query($connection,$query);
  }
?>
