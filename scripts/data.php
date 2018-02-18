<?php
	require_once('connect.php');
	$sql = "SELECT * from item ";
  $res = mysqli_query($connection,$sql);
  if($res){
		$outp = array();
		$outp = $res->fetch_all(MYSQLI_ASSOC);
		echo json_encode(array("result"=>$outp));
    }

?>
