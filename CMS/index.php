<?php
include 'includes/db_config.php';
session_start();
   
   if(isset($_POST['login'])) { 
      
	$email = $_POST['email'];
	$password = $_POST['password']; 
	
	$select = "SELECT * FROM users WHERE Email = '$email' and Password = '$password'";
	$query = mysqli_query($con ,$select);
	$count = mysqli_num_rows($query);

	


	if(mysqli_num_rows($query) > 0) {
		while($row = mysqli_fetch_array($query)) {
			$_SESSION['Id'] = $row['Id'];
			$_SESSION['Name'] = $row['Name'];

			$db_email = $row['Email'];
			$db_password = $row['Password'];
			$status = $row['Status'];
			
				if($db_email == 'admin@bbsul.com' && $db_password == '123') {
					echo "<script>window.location.assign('pending_requests.php')</script>";
				}
				if($status == 0) {
					echo "<script>window.location.assign('welcome.php')</script>";
				}
				if($status == 1) {
					echo "<script>window.location.assign('complaint.php')</script>";
				}
			
		}
	}

	else {
		echo  "<script>alert('Your Login Name or Password is invalid')</script>";
	}   
}
   
?>


<!DOCTYPE html>
<html>
    
<head>
	<title>Evolution Management System</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link rel="shortcut icon" type="images/png" href="images/logo.png"/?
</head>
<!--Coded with love by Mutiullah Samim-->
<body style="background-color:#800000">

	<div class="container h-100" style="margin-top:20px">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
					<img src="images/logo.png"alt="Logo" style="height:200px;">
					</div>
				
				</div>
				<div style="height:50px;width:1000px;background-color:;text-align:center;font-family:Brush Script MT;">
		<h1 style="font-size:50px;color:white">Sign In</h1>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form method="post">
						<div class="input-group mb-3" style="margin-top:35px">
							<div class="input-group-append">
								<span class="input-group-text rounded-left"><i class="fas fa-user"></i></span>
							</div>
							<input type="email" name="email" class="form-control input_user" value="" required="true" placeholder="Email Address" >
						</div>

						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text rounded-left"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_pass" required="true" value="" placeholder="******">
						</div>
						
						
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<input type="submit" name="login" value="Login"  class="btn login_btn" style="background-color:grey;color:white">
				   </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links" style="color:black">
						Not a Member Yet? <a href="signup.php" class="ml-2" style="color:white">Sign Up</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
