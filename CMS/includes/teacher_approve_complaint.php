<?php
include 'db_config.php';

$id = $_GET['id'];
$status = 1;
$update = "UPDATE complaints SET Status = '$status' WHERE Id = '$id'";
$update_query =   mysqli_query($con, $update);
echo var_dump($update_query);
if($update_query) {
    echo "<script>window.location.assign('../teachers_complaints.php')</script>";
}



?>