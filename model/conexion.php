<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "tienda";

    $conexion = new Mysqli($host, $user, $pass, $dbname);

    if ($conexion-> connect_errno){
        echo '<script>alert("Error de conexión")</script>';
    }
    // else{
    //     echo '<script>alert("Conexión Exitosa")</script>';
    // }



?>