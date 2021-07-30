<?php include 'db_config.php';

session_start();
if($_SESSION['Name']==true){

}
else{
   header('location:index.php');
}

$id = $_SESSION['Id'];
$select = "SELECT Position FROM users WHERE Id = '$id'";
$query = mysqli_query($con, $select);

if(mysqli_num_rows($query) > 0) {
    while($row = mysqli_fetch_array($query)) {
    
    if($row['Position'] == 'Student') {
        $return = "student_evolution.php";
    }
    else
    {
        $return = "teacher_evolution.php";
    }
    
    }
}


?>


<!doctype html>
<html lang="en">
  <head>
  <title>Comaplaint Management System</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">	
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="./vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="./vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./css/util.css">
	<link rel="stylesheet" type="text/css" href="./css/main.css">

  </head>
  <body>
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand bg-light text-dark bg-light text-dark p-2" href="#">Welcome, <b><?php echo ucwords($_SESSION['Name']);?></b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                
            </ul>

        <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active mt-1">
                    <a class="nav-link btn btn-light text-dark mr-2" href="user_change_password.php">Change Password </a>
                </li>
                <li class="nav-item active mt-1">
                    <a class="nav-link btn btn-light text-dark mr-2" href="user_complain_history.php">Complaint History </a>
                </li>
                <li class="nav-item active mt-1">
                    <a class="nav-link btn btn-light text-dark mr-2" href="suggesstion.php">Suggestion </a>
                </li>
                <li class="nav-item active mt-1">
                    <a class="nav-link btn btn-light text-dark mr-2" href="complaint.php">Register Complaint </a>
                </li>
                <li class="nav-item active mt-1">
                    <a class="nav-link btn btn-light text-dark mr-2" href="<?php echo $return ?>">Evolution </a>
                </li>
                <li class="nav-item active mt-1">
                    <a class="nav-link btn btn-danger btn-sm" href="logout.php">Logout </a>
                </li>
                
            </ul>

        </form>
        </div>
        </nav>
    </div>
  </body>
  </html>


<?php


?>