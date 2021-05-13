<?php
    $con=mysqli_connect("localhost", "root", "", "php_crud");
    if(mysqli_connect_errno()){
        echo "Echec de la connexion " .mysqli_connect_error();
    }else{
        // echo "connexion réussir";
    }
?>
