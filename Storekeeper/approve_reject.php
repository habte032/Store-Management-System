<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$Status=$_POST['status'];
		$sql = "UPDATE request SET Status = '$Status' WHERE id = '$id'";

		//use for MySQLi OOP
		if($con->query($sql)){
			$_SESSION['success'] = '';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
	}

	header('location: request.php');

?>