<?php
include 'db_config.php';




if (isset($_GET['delete_id'])) {

    $delete_id = $_GET['delete_id'];

    $delete = "DELETE FROM users WHERE Id = '$delete_id'";
    $query =   mysqli_query($con, $delete);

    if($query) {
        header("location: ../pending_requests.php");
    }
  
}


if (isset($_GET['approve_id'])) {

    $approve_id = $_GET['approve_id'];
    $status = 1;
    $update = "UPDATE users SET Status = '$status' WHERE Id = '$approve_id'";
    $update_query =   mysqli_query($con, $update);
    var_dump($update_query);
    if($update_query) {
        echo header("location: ../pending_requests.php");
    }
  
}



?>