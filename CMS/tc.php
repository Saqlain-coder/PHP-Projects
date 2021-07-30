
<!doctype html>
<html lang="en">
  <head>
  <title>Comaplaint Management System</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">	

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

  <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
  </head>
  <body>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
		
    <?php include 'includes/admin_header.php'?>

	<div class="container pt-5">
	
    
        <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Department</th>
                <th>Complain Type</th>
                <th>Complain Title</th>
                <th>Complain Description</th>
                <th>Action</th>
               
                
    
        </thead>
        <tbody>
            
            <?php

$position = "Teacher";
$select = "SELECT b.Id, a.Name, b.Position, b.Department, b.Complaint_type, b.Complaint_title, b.Complaint_description FROM users a, complaints b WHERE b.Position = '$position' AND b.Register_id = a.Id";

// $query = mysqli_query($con,$select);

// if(mysqli_num_rows($query) > 0)
//   {
    $sno=1; while($row = mysqli_fetch_array($select)){
     $name = $row['Name'];
     $complainType = $row['Complaint_type'];
     $complainTitle = $row['Complaint_title'];
     $complaintDescription = $row['Complaint_description'];
     $position = $row['Position'];
     $department = $row['Department'];
    $id = $row['Id'];
?>


<div class="modal fade" id =  "bd-example-modal-lg<?php echo $sno; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Recipient:</label>
                                    <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Message:</label>
                                    <textarea class="form-control" id="message-text"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>






            <tr>
                <td><?php echo $name?></td>
                <td><?php echo $position?></td>
                <td><?php echo $department?></td>
                <td><?php echo $complainType?></td>
                <td><?php echo $complainTitle ?></td>
                <td><?php echo $complaintDescription ?></td>
                <td>
                <!-- <a href="pending_requests.php?delete_id=<?php echo['Id'];?>">
                    <input type="submit" class="btn btn-success" name="approve" value="Approve"> 
                </a> -->
               
                    <button type="button" class="btn btn-info" value="Details" data-toggle="modal" data-target="#bd-example-modal-lg<?php echo $sno; ?>"class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></button>
                    <a href="group_delete.php?id=<?php echo $id; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>

            </tr>       
            
    

        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Department</th>
                <th>Complain Type</th>
                <th>Complain Title</th>
                <th>Complain Description</th>
                <th>Action</th>
            </tr>
            
        </tfoot>
        
    </table>

    <?php 
    }
}
?>
	
	



<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>

    <script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
  </body>
</html>





