<?php include('db.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Login</title>
</head>
<body>
<h1>Register</h1>     
           
           <form action="register.php" method="POST">

                <input type="email" id="email" name="email" placeholder="Enter your Email" >
                <input type="password" id="password" name="password1" placeholder="Enter your password" >
                <input type="password" id="password" name="password2" placeholder="Enter your password Again" >
                <input type="submit" id="submit" value="Send" class="btn btn-primary">
           </form>  
           ¿you already have a acount?  <a href="login.php">login</a>

</body>
</html>