<?php include 'db_config.php';
session_start();
if($_SESSION['Name']==true){

}
else{
   header('location:index.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
  <title>Comaplaint Management System</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="shortcut icon" type="images/png" href="images/logo.png"/>
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
    <a class="navbar-brand bg-light text-dark bg-light text-dark p-2" href="#">Welcome, <b><?php echo $_SESSION['Name'];?></b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                
            </ul>

        <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active mt-1">
                    <a class="nav-link btn btn-light text-dark mr-2" href="./admin_change_password.php">Change Password </a>
                </li>
                <li class="nav-item active mt-1">
                    <a class="nav-link btn btn-light text-dark mr-2" href="./teachers_complaints.php">Teachers Complaints </a>
                </li>
                <li class="nav-item active mt-1">
                    <a class="nav-link btn btn-light text-dark mr-2" href="./students_complaints.php">Student Complaints </a>
                </li>
                <li class="nav-item active mt-1">
                    <a class="nav-link btn btn-light text-dark mr-2" href="admin_suggession.php">Suggestions </a>
                </li>
                <li class="nav-item active mt-1">
                    <a class="nav-link btn btn-light text-dark mr-2" href="./pending_requests.php">Pending Requests </a>
                </li>
                <li class="nav-item active mt-1">
                    <a class="nav-link btn btn-light text-dark mr-2" href="./teachers_survey.php">Teachers Survey</a>
                </li>
                <li class="nav-item active mt-1">
                    <a class="nav-link btn btn-light text-dark mr-2" href="./students_survey.php">Students Survey</a>
                </li>
                <li class="nav-item active mt-1">
                    <a class="nav-link btn btn-light text-dark mr-2" href="./survey_details.php">Survey Details</a>
                </li>
                <li class="nav-item active mt-1">
                    <a class="nav-link btn btn-danger btn-sm" href="./logout.php" class="">Logout </a>
                </li>
                
            </ul>

        </form>
        </div>
        </nav>
    </div>
  </body>
  </html>