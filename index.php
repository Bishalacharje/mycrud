

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Login as</title>

    
    <script src="https://kit.fontawesome.com/4ebe883bff.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
  <style>
    
    .login-btn-sec{
        width: 100%;
        height: 80vh;
        display: flex;
        justify-content: center;
    }
    .login-btn-box{
        width: 360px;
        
        border-radius: 8px;
        margin: auto;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        text-align: center;
        padding: 16px;
    }
    a{
        color: #ffffff;
        text-decoration: none;
    }
    a:hover{
        color: #ffffff;
    }
    
    
  </style>

</head>
<body>
    
    <section class="login-btn-sec">
        <div class="login-btn-box">
            <h3>Login as:</h3>
            <br><br>
            <div>
                <button type="button" class="btn btn-primary"><a href="alogin.php"> Admin </a></button>
            
                <button type="button" class="btn btn-primary"><a href="login.php"> Employee </a></button>
            </div>
           
        </div>
    </section>

</body>
</html>