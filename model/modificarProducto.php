<?php
    $codProducto = $_POST['codProducto'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $proveedor = $_POST['proveedor'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $color = $_POST['color'];



    require("conexion.php");
    $modificarProducto="UPDATE productos SET codProducto='$codProducto', nombre='$nombre', descripcion='$descripcion', proveedor='$proveedor', precio='$precio', cantidad='$cantidad', color='$color' WHERE codProducto='$codProducto'";
    $conexion->query($modificarProducto);

    echo '<script>alert("Producto Modificado Exitosamente")</script>';
    echo "<script>location.href='../views/verProductos.php'</script>"



?>