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
	<title>View Category</title>
	<link rel="stylesheet" href="dashboard.css">
	<link rel="stylesheet" href="dashboards.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	<style>
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
		.head{
			background-color:#322d35;

		}
       .page-header{
		    top:0 !important;
			margin: 0 0 20px !important;
	   }
		.row{
			margin-bottom:30px !important;
			margin-left:10px !important;
		}
		a{
			text-decoration:none !important;
		}
	</style>
</head>
<body>
   <div class="side-menu" style="margin-left:0 !important">
        <div class="logo">
            <h1 style="color:rgb(245, 127, 17);   height: 10vh; display: flex;  margin: 10px auto 0px 10px;" >LINE BEZA</h1>
        </div>
        <ul>
		    <li style="background-color:white"><a href="#"><img src="payment.png" alt="">&nbsp;<span>Category</span></a> </li>
            <li> <a href="view.php"><img src="reading-book (1).png" alt="">&nbsp;<span>View Item</span></a> </li>
            <li><a href="add.php"><img src="teacher2.png" alt="">&nbsp;<span>Add Item</span> </a></li>
			<li> <a href="request.php"><img src="reading-book (1).png" alt="">&nbsp;<span>View Request</span></a> </li>
			<li> <a href="total.php"><img src="reading-book (1).png" alt="">&nbsp;<span>Total Review</span></a> </li>
            <li><a href="logout.php"><img src="settings.png" alt="">&nbsp;<span>Logout</span> </a></li>
        </ul>
    </div> 


<div class="container" style="margin-left:20%">
	
   <h1 style="color: #e7a33c;" class="page-header text-center">View Category</h1>
   <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <a style="font-size:30px" href="#drill">Driller</a>
                    </div>

                </div>
                <div class="card">
                    <div class="box">
                        <a style="font-size:30px" href="#grinder">Grinder</a>
                    </div>
                   
                </div>

                <div class="card">
                    <div class="box">
                        <a style="font-size:30px" href="#Hammer">Hammer</a>
                    </div>
                  
                </div>
                <div class="card">
                    <div class="box">
                        <a style="font-size:30px" href="#pinsa">Pinsa</a>
                    </div>
                  
                </div>
				<div class="card">
                    <div class="box">
                        <a style="font-size:30px" href="#screwdriver">Screw <br> Driver</a>
                    </div>
                  
                </div>
                <div class="card">
                    <div class="box">
                        <a style="font-size:30px" href="#weldingmachine">Welding <br>Machine</a>
                    </div>
                  
                </div>
                <div class="card">
                    <div class="box">
                        <a style="font-size:30px" href="#morsa">Morsa</a>
                    </div>
                  
                </div>
                <div class="card">
                    <div class="box">
                        <a style="font-size:30px" href="#other">Other</a>
                    </div>
                  
                </div>
            </div>
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



   
        </div>

			<h1 class="head" align="center">Drill</h1>
			<div class="row" id="drill">
				<table id="" class="table table-bordered table-striped">
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
							<th>Update</th>
							<th>Delete</th>
					    </tr>
					</thead>
					<tbody>
						<?php
							include_once('connection.php');
							$sql = "SELECT * FROM asset where Category='Drill'";
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
									<td>
										<a style='background-color:#3a7eec' href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class=''></span> Update</a>
										</td><td>
										<a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class=''></span> Delete</a>
									</td>
								</tr>";
								include('edit_delete_form.php');
							}
						?>
					</tbody>
				</table>
			</div>

			<h1 class="head" align="center">Grinder</h1>
			<div class="row" id="grinder">
				<table id="" class="table table-bordered table-striped">
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
							<th>Update</th>
							<th>Delete</th>
					    </tr>
					</thead>
					<tbody>
						<?php
							include_once('connection.php');
							$sql = "SELECT * FROM asset where Category='Grinder'";
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
									<td>
										<a style='background-color:#3a7eec' href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class=''></span> Update</a>
										</td><td>
										<a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class=''></span> Delete</a>
									</td>
								</tr>";
								include('edit_delete_form.php');
							}
						?>
					</tbody>
				</table>
			</div>

			<h1 class="head" align="center">Screwdriver</h1>
			<div class="row" id="screwdriver">
				<table id="" class="table table-bordered table-striped">
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
							<th>Update</th>
							<th>Delete</th>
					    </tr>
					</thead>
					<tbody>
						<?php
							include_once('connection.php');
							$sql = "SELECT * FROM asset where Category='Screwdriver'";
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
									<td>
										<a style='background-color:#3a7eec' href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class=''></span> Update</a>
										</td><td>
										<a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class=''></span> Delete</a>
									</td>
								</tr>";
								include('edit_delete_form.php');
							}
						?>
					</tbody>
				</table>
			</div>

			<h1 class="head" align="center">Hammer</h1>
			<div class="row" id="Hammer">
				<table id="" class="table table-bordered table-striped">
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
							<th>Update</th>
							<th>Delete</th>
					    </tr>
					</thead>
					<tbody>
						<?php
							include_once('connection.php');
							$sql = "SELECT * FROM asset where Category='Hammer'";
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
									<td>
										<a style='background-color:#3a7eec' href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class=''></span> Update</a>
										</td><td>
										<a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class=''></span> Delete</a>
									</td>
								</tr>";
								include('edit_delete_form.php');
							}}
						?>
					</tbody>
				</table>
			</div>

			<h1 class="head" align="center">Pinsa</h1>
			<div class="row" id="pinsa">
				<table id="" class="table table-bordered table-striped">
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
							<th>Update</th>
							<th>Delete</th>
					    </tr>
					</thead>
					<tbody>
						<?php
							include_once('connection.php');
							$sql = "SELECT * FROM asset where Category='Pinsa'";
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
									<td>
										<a style='background-color:#3a7eec' href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class=''></span> Update</a>
										</td><td>
										<a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class=''></span> Delete</a>
									</td>
								</tr>";
								include('edit_delete_form.php');
							}
						?>
					</tbody>
				</table>
			</div>

			<h1 class="head" align="center">Welding Machine</h1>
			<div class="row" id="weldingmachine">
				<table id="" class="table table-bordered table-striped">
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
							<th>Update</th>
							<th>Delete</th>
					    </tr>
					</thead>
					<tbody>
						<?php
							include_once('connection.php');
							$sql = "SELECT * FROM asset where Category='WeldingMachine'";
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
									<td>
										<a style='background-color:#3a7eec' href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class=''></span> Update</a>
										</td><td>
										<a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class=''></span> Delete</a>
									</td>
								</tr>";
								include('edit_delete_form.php');
							}
						?>
					</tbody>
				</table>
			</div>

			<h1 class="head" align="center">Morsa</h1>
			<div class="row" id="morsa">
				<table id="" class="table table-bordered table-striped">
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
							<th>Update</th>
							<th>Delete</th>
					    </tr>
					</thead>
					<tbody>
						<?php
							include_once('connection.php');
							$sql = "SELECT * FROM asset where Category='Morsa'";
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
									<td>
										<a style='background-color:#3a7eec' href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class=''></span> Update</a>
										</td><td>
										<a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class=''></span> Delete</a>
									</td>
								</tr>";
								include('edit_delete_form.php');
							}
						?>
					</tbody>
				</table>
			</div>

			<h1 class="head" align="center">Other</h1>
			<div class="row" id="other">
				<table id="" class="table table-bordered table-striped">
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
							<th>Update</th>
							<th>Delete</th>
					    </tr>
					</thead>
					<tbody>
						<?php
							include_once('connection.php');
							$sql = "SELECT * FROM asset where Category='Other'";
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
									<td>
										<a style='background-color:#3a7eec' href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class=''></span> Update</a>
										</td><td>
										<a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class=''></span> Delete</a>
									</td>
								</tr>";
								include('edit_delete_form.php');
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