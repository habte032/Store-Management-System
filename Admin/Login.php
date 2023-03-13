
  <?php 
  session_start();
  session_unset();
  require_once ("connection.php");
  $error_code=$error_msg="";

 if( isset($_POST["submit"])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    if(empty($username)){
        $error_code=1;
        $error_msg="*please enter username";
    }
    elseif(empty($password)){
        $error_code=2;
        $error_msg="*please enter password";
    }
 
   if( !empty($username) && !empty($password) ){
 
	 
	 
 
	 $sql_query = "SELECT * FROM admin";
	 $result = mysqli_query($con , $sql_query);
 
 
	  while( $rows = mysqli_fetch_assoc($result) ){
	  if($rows["username"]==$username && $rows["password"]==$password){
	  
	   $_SESSION["username"] = $username;
	   header("Location: category.php");
	  }}
	 }else{
	   $login_Err = "<div class='alert alert-warning alert-dismissible fade show'>
	   <strong>Invalid username/Password</strong>
	   <button type='button' class='close' data-dismiss='alert' >
		 <span aria-hidden='true'>&times;</span>
	   </button>
	 </div>";
	 
 
   }
 
 }
 
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="dashboards.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
    <title>Login As Admin</title>
    <style>
        *{
            box-sizing: border-box;
        }
        body{
   
            background-position: center;
            background-size: cover;
            font-family: 'Times New Roman', Times, serif;
            background-attachment: fixed;
        }
        .container{
            margin-top:10px;
        }
        .header{
            display: grid;
            grid-template-columns:75% 1fr 1fr;
            color: #e7a33c;
            padding: 20px 10px 10px 0;
            box-shadow: 2px 5px 30px rgba(0,0,0,0.3);
            
          
        }
        .header a{
            color: #e7a33c;
            padding: 20px 10px 10px 0;
            font-size:200%
        }
        form{
            box-shadow: 2px 5px 30px rgba(0,0,0,0.3);
            width: 600px;
            max-width: 100%;
            min-width: 50%;
            margin-left:33%;
            overflow: hidden;
            padding:20px 20px 20px 100px;
            margin-top:20px;
           
        }
        .name{

            display: grid;
            grid-template-columns: 100px 3fr 1fr;
            column-gap: 20px;
            margin-bottom: 30px;
            position: relative;
            padding-top: 20px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
            text-transform: uppercase;
            color: #000;
            vertical-align: bottom;
            
        }
        .kinds{
            position: relative;
            display: grid;
            grid-template-columns: 100px 50px  50px 50px 50px 50px;
            padding-top: 20px;
            padding-bottom:30px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
            text-transform: uppercase;
            color: #000;
        }
        .msg{
            color:red;
            padding-left:150px;
        }
        .h1{
            margin: 0;
             
        }
          .form{
 
            padding: 20px 20px;
        }

          input, #category{
            border: none;
            padding: 5px 10px;
            box-shadow: 2px 5px 30px rgba(0,0,0,0.3);
            background: transparent;
            outline: none;
            color: rgb(35, 135, 236);
            font-size: 20px;
            font-family: Arial, Helvetica, sans-serif;


        }
        #category{
            width: 105%;
        }
        input:focus{
        border: 2px solid #3a7eec ;
      }
        ::placeholder{
          color: rgb(172, 158, 158);
     
      }
       .button{
            background-color:#e7a33c; 
            background-attachment: fixed;
            border: 2px solid #e7a33c;
            color: #fff;
            display: block;
            font-family: inherit;
            font-size: 16px;
            padding: 10px;
            width: 78%;
            margin-bottom:10px;
        }
        .button:hover{
            background-color: #3a7eec;
            border: 2px solid #3a7eec;
        }
        .side-menu{
            top:0
        }
        a{
			text-decoration:none !important;
		}
    </style>
</head>
<body>

	<div class="header">
		<h1></h1>
        <a style="font-size:150%;"  href="../Storekeeper/Login.php">Login As Clerk</a>
        <a style="font-size:150%;" href="../Employee/Login.php">Login As Employee</a>
	</div>
    <form  method="POST" action="" >
        <div class="name">
        Username:   
        <input type="text" placeholder="Enter username" id="username" name="username" >
        </div>
        <div class="msg">
            <?php if($error_code==1) echo $error_msg; ?>
        </div>
        <div class="name">
        Password:
        <input type="password" placeholder="Enter password" id="password" name="password" >
        </div>
        <div class="msg">
            <?php if($error_code==2) echo $error_msg; ?>
        </div>
        <input class="button" type="submit" name="submit" value="Login As Admin">

   
    </form>
</div>
</body>
</html>