<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" type="images/png" href="images/logo.png"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Evolution Management System</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color:;
	background: ;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	height: 40px;
	box-shadow: none;
	color: #969fa4;
}
.form-control:focus {
	border-color: ;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 450px;
	margin: 0 auto;
	padding: 30px 0;
  	font-size: 15px;
}
.signup-form h2 {
	color: #636363;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.signup-form h2:before, .signup-form h2:after {
	content: "";
	height: 2px;
	width: 30%;
	background: ;
	position: absolute;
	top: 50%;
	z-index: 2;
}	
.signup-form h2:before {
	left: 0;
}
.signup-form h2:after {
	right: 0;
}
.signup-form .hint-text {
	color: #999;
	margin-bottom: 30px;
	text-align: center;
}

.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;		
	min-width: 140px;
	outline: none !important;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}    	
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #5cb85c;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}  
</style>
</head>
<body style="background-color:#800000">
	<?php include 'includes/user_header.php'?>
<div class="signup-form">
    <form method="post">
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
					<img src="images/logo.png"alt="Logo" style="height:200px;">
					</div>
				
				</div>
  <div class="form-group">
  <h1 style="text-align:center;font-family:Brush Script MT;color:white"> Change Password</h1>
    <label for="exampleFormControlInput1" style="color:white">Current Password</label>
    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Enter Current Password" name="currentPassword" required="">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlInput1" style="color:white">New Password</label>
    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Enter New Password" name="newPassword"  required="">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1" style="color:white">Confirm Passowrd</label>
    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Confirm Password" name="againPassword" required="">
  </div>
 
  	<div class="form-group">
            <input type="submit" class="btn btn-success btn-lg btn-block" name="chnagePassword" style="background-color:grey;border:none" value="Forgot Password">
        </div>
  
</form>
	
</div>
</body>
</html>

<?php
    

	if(isset($_POST['chnagePassword'])){
    

		

        $select = "SELECT Id, Password FROM users WHERE Id = '" . $_SESSION["Id"] . "' ";
        $query = mysqli_query($con, $select);
        if($row = mysqli_num_rows($query) > 0)
        {
            while($row = mysqli_fetch_array($query)) {
                $password =  $row['Password'];

                $currentPassword = $_POST['currentPassword'];
                $newPassword = $_POST['newPassword'];
                $againPassword = $_POST['againPassword'];

                if($newPassword != $againPassword) {
                    echo "<script>alert('Password is not Matched')</script>";
                }
                if($currentPassword != $password){
                    echo "<script>alert('Sorry, your given password is not correct!')</script>";   
                }
                
                else{
                    $update = "UPDATE users SET Password = '$newPassword' WHERE Id = '" . $_SESSION["Id"] . "'";
                    $update_query = mysqli_query($con, $update);    
                    echo "<script>alert('Your New Password Has Been Updated Successfully')</script>";
                }
            }
        }
    }
	
?>