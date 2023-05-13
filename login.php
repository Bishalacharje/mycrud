<?php
	session_start();
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

    <title>Employee login</title>

    
    <script src="https://kit.fontawesome.com/4ebe883bff.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
  <style>
    
    .flex{
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .login-btn-sec{
        width: 100%;
        height: 70vh;
        display: flex;
        justify-content: center;
    }
    .login-btn-box{
        width: 360px;
        
        border-radius: 8px;
        margin: auto;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        border-top: 4px solid #0B5ED7;
        padding: 16px;
    }
  </style>

</head>
<body>
    

    <div class="flex">
      <div>
        <h1>Login</h1>
      </div>
      <div class="btn-group">
      
        <a href="index.php" class="btn btn-primary">Home</a>
      
      </div>
    </div>
    
    <section class="login-btn-sec">
        <div class="login-btn-box">
            <br>
            <h4>Login as employee :</h4><br><br>
            <form action="" method="POST">

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                    <input name="emid" type="text" class="form-control" placeholder="Enter Id" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                    <input name="empass" type="password" class="form-control" placeholder="Enter Password" aria-label="Password" aria-describedby="basic-addon1">
                </div>
                <br>
                <input name="submit" class="btn btn-primary" type="submit" value="Login" aria-label=".form-control-sm example">
            </form>

        </div>
    </section>

   
    <br><br>
    <?php
				
			if(isset($_POST['submit']))	
			{
				$lid=$_POST['emid'];
				$lps=$_POST['empass'];
				$query="SELECT * FROM `employee` WHERE eid='$lid' && epassword='$lps' ";
				$data=mysqli_query($conn,$query);
				$total=mysqli_num_rows($data);
				if($total==1)
				{
					$_SESSION['eid']=$lid;
					header('location:home.php');
									
				}
				else
				{
                    
					echo "<script>alert('Login Failed')</script>";
				}
			}	

	?>
</body>
</html>