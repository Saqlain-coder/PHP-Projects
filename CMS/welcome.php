<?php
include 'includes/db_config.php';
session_start();
if($_SESSION['Name']==true){

}
else{
   header('location:index.php');
}
   
   if(isset($_POST['login'])) {
      // username and password sent from form 
      
      $email = $_POST['email'];
      $password = $_POST['password']; 
      
      $sql = "SELECT * FROM admins WHERE Email = '$email' and Password = '$password'";
      $result = mysqli_query($con,$sql);
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        header("Location: pending_requests.php");
      }else {
         echo  "<script>alert('Your Login Name or Password is invalid')</script>";
      }
   }
?>
<!DOCTYPE html>
<html>
    
<head>
	<title>Complain Management System</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<!--Coded with love by Mutiullah Samim-->
<body>

	<div class="container h-100" style="margin-top:20px">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
					<img src="images/logo.png"alt="Logo" style="height:200px;">
					</div>
				</div>
				    <p style="font-size:25px;text-align:center;">Welcome, <b><?php echo ucwords($_SESSION['Name']); ?></b> in our <br><b>University Evolution Management Portal</b>.</p> 
                    <p style="font-size:25px;text-align:center;">Your Request for account has been sent Successfully!<br> Please Be Patience and wait for approval by Admin</p>  
                <div class="text-center">
                    <a href="logout.php"><button class="btn btn-danger btn">Logout</button></a>
                </div>
            </div>
		</div>
	</div>
</body>
</html>
