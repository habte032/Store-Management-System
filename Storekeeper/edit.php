<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$itemname = $_POST['itemname'];
		$idno = $_POST['idno'];
		$category = $_POST['category'];
		$date = $_POST['date'];
		$price = $_POST['price'];
		$number = $_POST['number'];
		$kind=$_POST['kind'];
		$sql = "UPDATE asset SET Name = '$itemname', Code = '$idno', Category = '$category', Date='$date', Unit_Price='$price', Quantity='$number',Type='$kind' WHERE id = '$id'";

		if($con->query($sql)){
			$_SESSION['success'] = 'updated successfully';
		}
	
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	}

	header('location: view.php');

?>