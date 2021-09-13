<?php



$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'php_mysql_crud'
);

if(mysqli_connect_errno()){
    echo 'error in DB connection'. mysqli_connect_errno();
}

?>