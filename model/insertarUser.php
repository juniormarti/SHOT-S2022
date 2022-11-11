<?php
    //capturamos los valores enviamos desde el formulario 
    //a través de los name y el metodo de envio POST
    
$identificacion = $_POST['identificacion'];
$tipoDoc = $_POST['tipoDoc'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$clave = $_POST['clave'];
$rol = $_POST['rol'];
$estado = $_POST['estado'];

$imgFile = $_FILES['foto']['name'];
$tmp_dir = $_FILES['foto']['tmp_name'];
$imgSize = $_FILES['foto']['size'];

$upload_dir = 'img/';
$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION));
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif');

$imgUsers = "img/".$imgFile;

if (in_array($imgExt, $valid_extensions)) {
    if ($imgSize < 5000000) {
        move_uploaded_file($tmp_dir, $upload_dir.$_FILES['foto']['name']);
    }
    else {
        $errMSG = "SORRY MUY GRANDE EL ARCHIVO";
    }
}

// validamos que ninguna variable esté vacia

if ($identificacion=="" OR $tipoDoc=="" OR $nombres=="" OR $apellidos=="" OR $email=="" OR $telefono=="" OR $clave=="" OR $rol=="" OR $estado=="" OR $imgUsers=="") {
    echo '<script>alert("POR FAVOR COMPLETE LOS CAMPOS")</script>';
    echo "<script>location.href='../index.php'</script>";
}else{
    // antes de hacer la consulta, debemos conectarnos a la base de datos
    require("conexion.php");
    //validamos que el usuario no se haya registrado anteriormente
    $consultarUser = "SELECT * FROM users WHERE identificacion= '$identificacion'";
    $resultado = $conexion->query($consultarUser);

    if ($resultado->num_rows==1) {
        echo '<script>alert("USUARIO EXISTENTE, VERIFIQUE DATOS")</script>';
        echo "<script>location.href='../index.php'</script>";
    }else{
        // si el ususario no estaba registrado, podrá insertar sus datos
        $insertarUser = "INSERT INTO users VALUES ('$identificacion','$tipoDoc','$nombres','$apellidos','$email','$telefono','$clave','$rol','$estado', '$imgUsers')";
        $conexion->query($insertarUser);
        echo '<script>alert("USUARIO REGISTRADO EXITOSAMENTE")</script>';
        echo "<script>location.href='../index.php'</script>";
    }

}

?>