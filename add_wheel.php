<?php
session_start();
require('config.php');

$id=$_POST['id'];
$a_id=$_POST['a_id'];
$NUMBER_ON_HAND=$_POST['NUMBER_ON_HAND'];
$PRICE_OF_PART=$_POST['PRICE_OF_PART'];

$DESCRIPTION=$_POST['DESCRIPTION'];

	$register="INSERT INTO wheel(id,a_id,NUMBER_ON_HAND,PRICE_OF_PART,DESCRIPTION) VALUES('$id','$a_id','$NUMBER_ON_HAND','$PRICE_OF_PART','$DESCRIPTION')" or die("error".mysqli_errno($db_link));
	$result=mysqli_query($db_link,$register);
		header('location:wheel.php');

mysqli_close($db_link);

?>
