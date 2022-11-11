<?php

$identificacion = $_POST['identificacion'];
$tipoDoc = $_POST['tipoDoc'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$clave = $_POST['clave'];
$rol = $_POST['rol'];
$estado = $_POST['estado'];


require("conexion.php");
    $modificarUser="UPDATE users SET identificacion='$identificacion', tipoDoc='$tipoDoc', nombres='$nombres', apellidos='$apellidos', email='$email', telefono='$telefono', clave='$clave', rol='$rol', estado='$estado' WHERE identificacion='$identificacion'";
    $conexion->query($modificarUser);

    echo '<script>alert("Usuario Modificado Exitosamente")</script>';
    echo "<script>location.href='../views/verUsers.php'</script>"


?>