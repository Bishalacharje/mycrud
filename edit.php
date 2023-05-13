<?php
    
	include("connection.php");
	error_reporting(0);
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Update Record</title>

    <script src="https://kit.fontawesome.com/4ebe883bff.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

</head>
<body>
    <div class="d-flex mb-3">
        <div class="p-2">
            <h1>Update Employee</h1>
        </div>
        
        <div class="p-3">
            <a class="btn btn-primary" href="dashboard.php" role="button">All Employee</a>
        </div>
        
    </div>
    <br>
   

    <form action="" id="jform" method="POST">
        
      <input value="<?php echo $_GET['eid']; ?>" name="emid" id="jid" class="form-control form-control-sm" type="text" placeholder="Enter Id" aria-label=".form-control-sm example" readonly>
      <br>
      <input value="<?php echo $_GET['ename']; ?>" name="emname" id="jname" class="form-control form-control-sm" type="text" placeholder="Enter name" aria-label=".form-control-sm example" required>
      <br>
      <input value="<?php echo $_GET['eemail']; ?>" name="ememail" id="jemail" class="form-control form-control-sm" type="email" placeholder="Enter email" aria-label=".form-control-sm example" required>
      <br>
      <input value="<?php echo $_GET['epass']; ?>" name="empass" id="jpass" class="form-control form-control-sm" type="password" placeholder="Enter password" aria-label=".form-control-sm example" required>
      <br>
      <select value="<?php echo $_GET['estate']; ?>" name="emstate" id="jstate" class="form-select form-select-sm" aria-label=".form-select-sm example">
        <option value="-">State</option>
        <option value="Tripura">Tripura</option>
        <option value="Assam">Assam</option>
        <option value="West Bengal">West Bengal</option>
      </select>
      <br>
      <input name="submit" class="btn btn-primary" type="submit" value="Submit" aria-label=".form-control-sm example">
    </form>
    <?php

if($_POST['submit'])
{
    
    $uid=$_POST['emid'];
    $uname=$_POST['emname'];
    $uemail=$_POST['ememail'];
    $upass=$_POST['empass'];
    $ustate=$_POST['emstate'];


   
         
        $query="UPDATE `employee` SET `ename`='$uname',`eemail`='$uemail',`epassword`='$upass',`estate`='$ustate' WHERE `eid`='$uid' ";
        $data=mysqli_query($conn,$query);
        if($data)
        {
            echo "<script>alert('Record Updated')</script>";
            ?>
                <META HTTP-EQUIV="Refresh" CONTENT="0 ;URL= http://localhost/CRUD/Employeelist.php">

            <?php
        }
}


?>


    <script src="jquery-3.6.1.min.js"></script>
    <script src="jquery.js"></script>
   

</body>
</html>