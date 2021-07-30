
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

    <div class="container">
    <h1 class="pt-5">Specific User Description</h1>
        <table id="example" class="display mt-5" style="width:100%" border="1">
        <tbody>
            <?php

$user_id = $_GET['id'];
$select = "SELECT b.Id, a.Name, b.Position, b.Department, b.Complaint_type, b.Complaint_title, b.Complaint_description FROM users a, complaints b WHERE b.Id = '$user_id' AND b.Register_id = a.Id";
$query = mysqli_query($con,$select);

if(mysqli_num_rows($query) > 0)
  {
    while($row = mysqli_fetch_array($query)){
    $id = $row['Id']; 
    $name = $row['Name'];
    $complainType = $row['Complaint_type'];
    $complainTitle = $row['Complaint_title'];
    $complaintDescription = $row['Complaint_description'];
    $position = $row['Position'];
    $department = $row['Department'];
    
?>
            <tr>   
                <th>Name</th>
                <td><?php echo $name ?></td>
            </tr>    
            <tr>   
                <th>Position</th>
                <td><?php echo $position ?></td>
            </tr>    
            <tr>   
                <th>Department</th>
                <td><?php echo $department ?></td>
            </tr>    
            <tr>   
                <th>Complaint Type</th>
                <td><?php echo $complainType ?></td>
            </tr>    
            <tr>   
                <th>Complaint Title</th>
                <td><?php echo $complainTitle ?></td>
            </tr>    
            <tr>   
                <th>Complaint Description</th>
                <td><?php echo $complaintDescription ?></td>
            </tr>    
            </tr>
            
            

            <?php 
        

    } } ?>
    

        </tbody>
        
        
    </table>
    </div>
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
    $('#editModal').modal('show');
} );
    </script>
  </body>
</html>





