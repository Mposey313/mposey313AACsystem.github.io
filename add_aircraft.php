<?php
session_start();
require('config.php');

$a_id=$_POST['a_id'];
$AIRCRAFT_NAME=$_POST['AIRCRAFT_NAME'];
$CHIEF_DESIGNER=$_POST['CHIEF_DESIGNER'];
$DESCRIPTION=$_POST['DESCRIPTION'];

$PRIMARY_CUSTOMER=$_POST['PRIMARY_CUSTOMER'];
$LIST_OF_PARTTS=$_POST['LIST_OF_PARTTS'];

	$register="INSERT INTO aircraft(a_id,AIRCRAFT_NAME,CHIEF_DESIGNER,DESCRIPTION,PRIMARY_CUSTOMER,LIST_OF_PARTTS) VALUES('$a_id','$AIRCRAFT_NAME','$CHIEF_DESIGNER','$DESCRIPTION','$PRIMARY_CUSTOMER','$LIST_OF_PARTTS')" or die("error".mysqli_errno($db_link));
	$result=mysqli_query($db_link,$register);
		header('location:aircraft.php');

mysqli_close($db_link);

?>