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

    <title>Brand | Admin Dashboard </title>

    
    <script src="https://kit.fontawesome.com/4ebe883bff.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
  <style>
    .flex{
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    button{
      background: red;
      font-size: 12px;
      padding: 3px 6px;
      color: #ffffff;
      border-radius: 3px;
      border: none;
    }

  </style>

</head>
<body>
    
    
<div class="flex">
      <div>
        
      </div>
      <div class="btn-group">
      
        <a href="dashboard.php" class="btn btn-primary">Home</a>
      
      </div>
  </div>
   <br><br>
    
    <div class="d-flex mb-3" id="head-sec">
        <div class="p-2">
          <h2>All Brands</h2>
        </div> 
        <div class="p-3"> 
          <a class="btn btn-success" href="add-brand.php" role="button">Add new</a>
        </div>
        <div class="ms-auto p-3">
            <input id="myInput" class="form-control form-control-sm" type="text" placeholder="Search..." aria-label=".form-control-sm example">
            
        </div>
      </div>
    <table class="table">
    <?php
        
                    
                    
        $query="SELECT * FROM `brand`";
        $data=mysqli_query($conn,$query);
        $total=mysqli_num_rows($data);


        if($total!=0)
        {
    ?>
     <br>
    
      <thead>
        <tr>
          <th scope="col">Brand ID</th>
          <th scope="col">Brand Name</th>
          <th scope="col">Action</th>
          
          
        </tr>
      </thead>
      <tbody id="myTable">
      <?php

while ($result=mysqli_fetch_assoc($data)) 
{
    echo "<tr>
            <td>".$result['id']."</td>
            <td>".$result['brand_name']."</td>
          
            <td>
                <a href='delete-brand.php?bid=$result[id]'>
                    <button> Delete </button>
                </a>
            </td>
     
        </tr>";
}
}
else
{
echo "No record found";
}


?>
    </table>

    <br>
  

    <script src="jquery-3.6.1.min.js"></script>
    <script src="jquery.js"></script>
   

</body>
</html>