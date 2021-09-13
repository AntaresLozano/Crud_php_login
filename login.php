<?php include('db.php');
        include('verification_login.php');
        session_start();
?>

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
<h1>Login</h1>     
           
           <form action="login.php" method="POST">
               <input type="email" id="text" name="email" placeholder="Enter your Email" >
               <input type="password" id="password" name="password" placeholder="Enter your password" >
               <input type="submit" id="submit" value="Send" class="btn btn-primary">

                <?php
                if(isset($succes_message)){
                    echo '<div class ="succes_message">'.$succes_message. '</div>';
                }
                if(isset($error_message)){
                    echo '<div class ="error_message">'.$error_message. '</div>';
                }
                ?>

           </form>            
        or <a href="register.php">Register</a>
        
    
</body>
</html>