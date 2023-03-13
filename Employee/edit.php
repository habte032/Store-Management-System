<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name=$_POST['name'];
		$itemname = $_POST['itemname'];
		$idno = $_POST['idno'];
		$category = $_POST['category'];
		$date = $_POST['date'];
		$number = $_POST['number'];
		
		$sql = "UPDATE request SET Name = '$name',Itemname = '$itemname', Code = '$idno', Category = '$category', Date='$date', Quantity='$number' WHERE id = '$id'";

		if($con->query($sql)){
			$_SESSION['success'] = 'Member updated successfully';
		}
	
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	}

	header('location: myrequest.php');

?>