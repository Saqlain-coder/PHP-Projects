<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" type="images/png" href="images/logo.png"/
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
  <h1 style="text-align:center;font-family:Brush Script MT;color:white"> Give your Suggestion</h1>
    <label for="exampleFormControlInput1" style="color:white">Name</label>
    <input type="text" class="form-control" readonly="true" placeholder="Enter Your Name" value="<?php echo $_SESSION['Name']; ?>" name="name" required="">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlInput1" style="color:white">Suggestion</label>
    <textarea class="form-control" rows="3" name="suggest" required=""></textarea>
  </div>
 
  	<div class="form-group">
            <input type="submit" class="btn btn-success btn-lg btn-block" name="suggestion" style="background-color:grey;border:none" value="Submit">
        </div>
  
</form>
	
</div>
</body>
</html>

<?php

if(isset($_POST['suggestion'])) {
    $name = $_POST['name'];
    $suggest = $_POST['suggest'];

    $insert = "INSERT INTO suggestion (Name, Suggestion) VALUES ('$name', '$suggest')";
    $query = mysqli_query($con, $insert);

    if($query) {
        echo "<script>alert('Your suggestion has been submitted Successfully!')</script>";
    }
    else 
    echo "<script>Sorry Something went Wrong!</script>";
}

?>