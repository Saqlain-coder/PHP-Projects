
<!------ Include the above in your HEAD tag ---------->
<?php
session_start();
?>
<!DOCTYPE html>
<html>
    
<head>
	<title>Evolution Management System</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link rel="shortcut icon" type="images/png" href="images/logo.png"/>
</head>
<!--Coded with love by Mutiullah Samim-->
	<body style="background-color:#800000">
	<div class="container h-100" style="margin-top:20px">
		<div class="d-flex justify-content-0center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
					<img src="images/logo.png"alt="Logo" style="height:200px;">
					</div>
				
				</div>
				<div style="height:50px;width:1000px;background-color:;text-align:center;font-family:Brush Script MT;">
		<h1 style="font-size:50px;color:white">Registration Form</h1>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form method="post">
						<div class="input-group mb-3" style="margin-top:25px">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="username" class="form-control input_user" required="true" value="" placeholder="Username" >
						</div>
						
						<div class="input-group mb-3"	>
							<div class="input-group-append">
								<span class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></span>
							</div>
							<input type="text" name="email" class="form-control input_email" required="true" value="" placeholder="User Email" >
						</div>
						
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-book-reader"></i></span>
							</div>
							
							<div class="form-control input_user">
						<select style="border:none;" required="true" name="department">
							<option selected disabled>Select Department</option>
							  <option value="Information Technology">Information Technology</option>
							  <option value="Computer Science">Computer Science</option>
							  <option value="IT Equipment">BBA</option>
							  <option value="BBA">Finance</option>
							  <option value="Eucation">Education</option>
							  <option value="Pharmacy">Pharmacy</option>
							  <option value="MBA">MBA</option>
							  <option value="BA">BA</option>
							  <option value="Financ & Accounting">Financ & Accounting</option>
							  
							  <option value="Others">Others</option>
						</select>
						<span class="focus-input100"></span>
					</div>
						</div>
						
						
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-book-reader"></i></span>
							</div>
							
							<div class="form-control input_user">
						<select style="border:none;" required="true" name="position">
							<option selected disabled>Select Position</option>
							  <option value="Teacher">Teacher</option>
							  <option value="Student">Student</option>
							  
						</select>
						<span class="focus-input100"></span>
					</div>
						</div>
						
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" maxlength="15" minlength="6"  name="password" class="form-control input_pass" id="password" required="true" placeholder="Password">
						</div>
						<input type="checkbox" onclick="myFunction()"> <span style="color:#fff">Show Password</span>		
						
						
					
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<input type="submit" value="Register" name="register" class="btn login_btn" style="background-color:grey;color:white">
				   </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links" style="color:black">
						Already a Member?<a href="index.php" class="ml-2" style="color:white">Sign in</a>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<?php
	include 'includes/db_config.php';

	if(isset($_POST['register'])){
		$name = ucwords($_POST['username']);
		$email = $_POST['email'];
		$password = $_POST['password'];
		$department = $_POST['department'];
		$position = $_POST['position'];
		$status = 0;

		$_SESSION['username'] = $name;
		$_SESSION['department'] = $department;
		$_SESSION['position'] = $position;

		$select = "SELECT Email FROM users WHERE Email = '$email'";
		$result = mysqli_query($con, $select);

		if(mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_array($result);
			if($email == $row['Email']) {

				echo "<script>alert('Email Already Exist')</script>";

			}
		}
		else{
			$insert = "INSERT INTO users (Name, Email, Password, Department, Position, Status) VALUES 
			('$name', '$email', '$password', '$department', '$position', '$status')";

			$query = mysqli_query($con, $insert);
			if($query) {
				echo "<script>window.location.assign('complaint.php')</script>";
			}	
		}

		
		
	}

	 
?>