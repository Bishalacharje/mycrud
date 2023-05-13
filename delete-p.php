<?php
		
	include("connection.php");
	error_reporting(0);

	$did=$_GET['pid'];
	$query="DELETE FROM `product` WHERE `pid`='$did'";
	$data=mysqli_query($conn,$query);
	if($data)
	{
		echo "<script>alert('Record Deleted')</script>";
		?>

			<META HTTP-EQUIV="Refresh" CONTENT="0 ;URL= http://localhost/CRUD/productlist.php">

		<?php
	}
	else
	{
		echo "sorry,Delete process failed";
	}


?>