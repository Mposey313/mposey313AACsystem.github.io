<?php
	include 'config.php';
	$a_id = $_GET['a_id'];
	$sql = "Delete from aircraft where md5(a_id) = '$a_id'";
	if($db_link->query($sql) === true){
		echo "Sucessfully deleted data";
		header('location:aircraft.php');
	}else{
		echo "Oppps something error ";
	}
	$db_link->close();
?>