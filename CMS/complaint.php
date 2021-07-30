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

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<style>
.register{
    background:#800000;
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
</style>
</head>
<body style="background-color:#800000">

<!------ Include the above in your HEAD tag ---------->
<div class="container-fluid">
<?php include 'includes/user_header.php' ?>
</div>
<div class="container register">
                <form method="post">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="images/logo.png" alt="logo" style="height:120px;width:120px"/>
                        <h3>Welcome</h3>
						<h6>Enter Your Complaint</h6>
                        
                                      </div>
                    <div class="col-md-9 register-right">
						
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Complaint Form</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                              
                                        </div>
                                        
                                       
                                    <div class="col-md-6">
                                    <div class="form-group">
                                            <select class="form-control" name="department">
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
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="position">
                                            <option selected disabled>Select Position</option>
                                            <option value="Teacher">Teacher</option>
                                            <option value="Student">Student</option>
												
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="complaint_type">
                                                <option selected disabled>Complaint Type</option>
                                                <option>Transport Service</option>
                                                <option>Cafeteria</option>
                                                <option>IT Equipment</option>
                                                <option>Academic</option>
                                                <option>Non-Academic</option>
                                                <option>Administrator</option>
                                                <option>Financial</option>
                                                <option>Others</option>
												
                                            </select>
                                        </div>
										
										 <div class="form-group">
                                            <input type="text"class="form-control"
											placeholder="Complaint Title" value="" name="complaint_title" />
                                        </div>
										<div class="form-group">
                                            <textarea type="text" name="complaint_description" class="form-control"
											placeholder="Complaint Description" value="" ></textarea>
                                        </div>
                                        <div class="form-group">
                                           
                                        </div>
                                        <input type="submit" class="btnRegister" name="btnRegister"  value="Register" style="background-color:#800000">
                                    </div>
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
</body>
</html>

<?php
  
  if(isset($_POST['btnRegister'])) {
    $complaint_type = $_POST['complaint_type'];
    $complaint_title = $_POST['complaint_title'];
    $complaint_desc = $_POST['complaint_description'];
    $department = $_POST['department']; 
	$position = $_POST['position'];
    $id = $_SESSION['Id'];
    $status = 0;
    $insert = "INSERT INTO complaints ( Complaint_type, Complaint_title, Complaint_description, Register_id, Position, Department, Status ) VALUES 
    ('$complaint_type' ,'$complaint_type', '$complaint_desc', '$id', '$position', '$department', '$status')";
    $query = mysqli_query($con, $insert);
    
    if($query){
      echo "<script>alert('Your Complaint has been submitted Successfully')</script>";
    }
    else{
      echo "<script>alert('sorry')</script>";
    }
   
  }  

?>