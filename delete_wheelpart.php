<?php
	include 'config.php';
	$id = $_GET['id'];
	$sql = "Delete from wheel where md5(id) = '$id'";
	if($db_link->query($sql) === true){
		echo "Sucessfully deleted data";
		header('location:wheel.php');
	}else{
		echo "Oppps something error ";
	}
	$db_link->close();
?>