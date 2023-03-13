<?php
	session_start();
	if(strlen($_SESSION['username'])==0)
    {   
	header('location:login.php');
	}
	else{
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>View Recently Added Asset</title>
	<link rel="stylesheet" href="dashboard.css">
	<link rel="stylesheet" href="dashboards.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	<style>
		
		a{
			text-decoration:none !important;
		}
		.height10{
			height:10px;
		}
		.mtop10{
			margin-top:10px;
		}
		.modal-label{
			position:relative;
			top:7px
		}
		.logo{
			left:0px;
		}
		.container{
			padding-left:0px !important;
			width:80% !important;
		}
		.container h1{
            color: #e7a33c;
            padding: 20px 10px 10px 0;
            margin-left:5%;
            box-shadow: 2px 5px 30px rgba(0,0,0,0.3);
			margin-bottom:20px;
        }
       .page-header{
		    top:0 !important;
			margin: 0 0 20px !important;
	   }
		
	</style>
</head>
<body>
   <div class="side-menu" style="margin-left:0 !important">
        <div class="logo">
            <h1 style="color:rgb(245, 127, 17);   height: 10vh; display: flex;  margin: 10px auto 0px 10px;" >LINE BEZA</h1>
        </div>
		<ul>
		    <li ><a href="category.php"><img src="category.png" alt="">&nbsp;<span>Category</span></a> </li>
            <li> <a href="view.php"><img src="view.png" alt="">&nbsp;<span>View Item</span></a> </li>
            <li style="background-color:white"><a href="#"><img src="request.png" alt="">&nbsp;<span>Recent Add</span> </a></li>
			<li><a href="total.php"><img src="request.png" alt="">&nbsp;<span>Total Review</span> </a></li>
            <li><a href="logout.php"><img src="logout.png" alt="">&nbsp;<span>Logout</span> </a></li>
        </ul>
    </div> 


<div class="container">
   <h1 style="color: #e7a33c;" class="page-header text-center">Recently Added Item</h1>
	<div style="left:0 !important" class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="row">
			<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>
			</div>
			<div class="row">
				
			</div>
			<div class="height10">
			</div>
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Item Name</th>
							<th>Item Code</th>
							<th>Category</th>
							<th>Registered Date</th>
							<th>Average Price</th>
							<th>Quantity</th>
							<th>Total Price</th>
							<th>Type</th>
					    </tr>
					</thead>
					<tbody>
						<?php
							include_once('connection.php');
							$sql = "SELECT * FROM asset ORDER BY id DESC LIMIT 10";
							$query = mysqli_query($con,$sql);
							while($row = mysqli_fetch_assoc($query)){
								echo 
								"<tr>
									<td>".$row['id']."</td>
									<td>".$row['Name']."</td>
									<td>".$row['Code']."</td>
									<td>".$row['Category']."</td>
									<td>".$row['Date']."</td>
									<td>".$row['Unit_Price']."</td>
									<td>".$row['Quantity']."</td>
									<td>".($row['Unit_Price'] * $row['Quantity'])."</td>
									<td>".$row['Type']."</td>
								</tr>";
							}
						
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>

<script>
$(document).ready(function(){

    $('#myTable').DataTable();


    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script>
</body>

<<style>
.PP{
	text-align: center;
}
</style>
</html>