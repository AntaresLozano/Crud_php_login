<?php 
require('db.php');

if(isset($_POST['email']) && isset($_POST['password'])){

    if(!empty(trim($_POST['email'])) && !empty(trim($_POST['password']))){

        $email = mysqli_real_escape_string($conn, htmlspecialchars(trim($_POST['email'])));

        $query = mysqli_query($conn, "SELECT * FROM 'usuarios' WHERE email = '$email'");

            if(mysqli_num_rows($query)>0){

                    $row = mysqli_fetch_assoc($query);
                    $usuario_pass = $row['password'];
                    $verificacion_password = password_verify($_POST['password'], $usuario_pass);

                    if($verificacion_password===TRUE){
                        session_regenerate_id(true);

                        $_SESSION['email'] = $email;

                        header('location: index.html');
                        exit;
                    }else{
                        $error_message = "Clave o email incorrectos";
                    }

            }
    }else{
            $error_message = "Por favor complete los campos vacíos";
            }

    
}

?>