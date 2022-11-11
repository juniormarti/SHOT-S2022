<?php

    require("conexion.php");

    $id_user= $_GET['id_user'];


    $eliminar ="DELETE FROM users WHERE identificacion='$id_user'";
    $conexion->query($eliminar);

    echo '<script>alert("Usuario Eliminado Exitosamente")</script>';
    echo "<script>location.href='../views/verUsers.php'</script>"

?>