<?php
		
	include("connection.php");
	error_reporting(0);

	$did=$_GET['eid'];
	$query="DELETE FROM `employee` WHERE `eid`='$did'";
	$data=mysqli_query($conn,$query);
	if($data)
	{
		echo "<script>alert('Record Deleted')</script>";
		?>

			<META HTTP-EQUIV="Refresh" CONTENT="0 ;URL= http://localhost/CRUD/Employeelist.php">

		<?php
	}
	else
	{
		echo "sorry,Delete process failed";
	}


?>