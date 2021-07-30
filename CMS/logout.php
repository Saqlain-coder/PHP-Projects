<?php
session_start();
session_destroy();

include 'includes/db_config.php';



$query = mysqli_query($con,"SELECT * FROM users where Name = '{$_SESSION['Name']}'  ");
if($query){
	header('location:index.php');
	}else{
header('index.php');

}
?>