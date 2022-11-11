<?php

    require("conexion.php");

    $id_producto= $_GET['id_producto'];


    $eliminar ="DELETE FROM productos WHERE codProducto='$id_producto'";
    $conexion->query($eliminar);

    echo '<script>alert("Producto Eliminado Exitosamente")</script>';
    echo "<script>location.href='../views/verProductos.php'</script>"

?>