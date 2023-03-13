<?php
	session_start();
	include_once('connection.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM asset WHERE id = '".$_GET['id']."'";

		//use for MySQLi OOP
		if($con->query($sql)){
			$_SESSION['success'] = 'Item deleted successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting Item';
		}

        $sql2="SET @num :=0";
		if($con->query($sql2)==TRUE){

		}
		$sql3="UPDATE asset SET id=@num :=(@num+1)";
		if($con->query($sql3)==TRUE){

		}
		$sql4="ALTER TABLE asset AUTO_INCREMENT=1";
		if($con->query($sql4)==TRUE){

		}
	}
	else{
		$_SESSION['error'] = 'Select Item to delete first';
	}

	header('location: view.php?Deleted');
?>