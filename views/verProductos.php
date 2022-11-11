<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Mysqli</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  
    <section id="cont-global" class="text-center cont-tabla">
        <div class="container-fluid">
            <h2>PRODUCTOS REGISTRADOS EN EL SISTEMA</h2>
            <P>SELECCIONE EL PRODUCTO QUE DESEE EDITAR O ELIMINAR</P>
            <table class="table table-bordered border-primary table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Codigo Producto</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Proveedor</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Color</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>

                <tbody>

                    <?php
                        require("../model/conexion.php");
                        $mostrarProductos = "SELECT * FROM productos";
                        $resultado = $conexion->query($mostrarProductos);
                        while ($f = mysqli_fetch_array($resultado)) {
                    ?>


                    
                    <tr>
                        <td><?php echo $f['codProducto'] ?></td>
                        <td><?php echo $f['nombre'] ?></td>
                        <td><?php echo $f['descripcion'] ?></td>
                        <td><?php echo $f['proveedor'] ?></td>
                        <td><?php echo $f['precio'] ?></td>
                        <td><?php echo $f['cantidad'] ?></td>
                        <td><?php echo $f['color'] ?></td>
                        <td> <img width="50px" src="../model/<?php echo $f['imagen'] ?>"></td>
                        <td><a class="btn btn-success" href="editarProducto.php?id_producto=<?php echo $f['codProducto'] ?>">EDITAR</a></td>
                        <td><a class="btn btn-danger" href="../model/eliminarProducto.php?id_producto=<?php echo $f['codProducto'] ?>">ELIMINAR</a></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="container">
            <h1 class="text-center" style="margin: 50px">PRODUCTOS</h1>
            <div class="row">
            <?php
                require("../model/conexion.php");
                $mostrarProductos2 = "SELECT * FROM productos WHERE cantidad > 0";
                $resultado2 = $conexion->query($mostrarProductos2);
                while ($f = mysqli_fetch_array($resultado2)) {
            ?>
                <div class="col-lg-3 col-md-6">
                    <div class="card-product">
                        <img src="../model/<?php echo $f['imagen'] ?>" alt="">
                        <h3><?php echo $f['nombre'] ?></h3>
                        <h4><?php echo $f['precio'] ?></h4>
                        <p><?php echo $f['descripcion'] ?></p>
                        <p><?php echo $f['cantidad'] ?></p>
                        <a href="#">Comprar</a>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>

    </section>




<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="../js/functions.js"></script>
</body>
</html>
