<?php


$codProducto = $_POST['codProducto'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$proveedor = $_POST['proveedor'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$color = $_POST['color'];


$imgFile = $_FILES['imagen']['name'];
$tmp_dir = $_FILES['imagen']['tmp_name'];
$imgSize = $_FILES['imagen']['size'];

$upload_dir = 'img/';
$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION));
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif');

$imgProd = "img/".$imgFile;

if (in_array($imgExt, $valid_extensions)) {
    if ($imgSize < 5000000) {
        move_uploaded_file($tmp_dir, $upload_dir.$_FILES['imagen']['name']);
    }
    else {
        $errMSG = "SORRY MUY GRANDE EL ARCHIVO";
    }
}



if ($codProducto=="" OR $nombre=="" OR $descripcion=="" OR $proveedor=="" OR $precio=="" OR $cantidad=="" OR $color=="" OR $imgProd=="") {
    echo '<script>alert("POR FAVOR COMPLETE LOS CAMPOS")</script>';
    echo "<script>location.href='../index.php'</script>";
}else{
    // antes de hacer la consulta, debemos conectarnos a la base de datos
    require("conexion.php");
    //validamos que el usuario no se haya registrado anteriormente
    $consultarProductos = "SELECT * FROM productos WHERE codProducto= '$codProducto'";
    $resultado = $conexion->query($consultarProductos);

    if ($resultado->num_rows==1) {
        echo '<script>alert("PRODUCTO EXISTENTE, VERIFIQUE DATOS")</script>';
        echo "<script>location.href='../index.php'</script>";
    }else{
        // si el ususario no estaba registrado, podrá insertar sus datos
        $insertarProductos = "INSERT INTO productos VALUES ('$codProducto','$nombre','$descripcion','$proveedor','$precio','$cantidad','$color', '$imgProd')";
        $conexion->query($insertarProductos);
        echo '<script>alert("PRODUCTO REGISTRADO EXITOSAMENTE")</script>';
        echo "<script>location.href='../index.php'</script>";
    }

}







?>