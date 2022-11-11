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
            <h2>USUARIOS REGISTRADOS EN EL SISTEMA</h2>
            <P>SELECCIONE EL USUARIO QUE DESEE EDITAR O ELIMINAR</P>
            <table class="table table-bordered border-primary table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Identificacion</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Rol</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Email</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>

                <tbody>

                    <?php
                        require("../model/conexion.php");
                        $mostrarUsers = "SELECT * FROM users";
                        $resultado = $conexion->query($mostrarUsers);
                        while ($f = mysqli_fetch_array($resultado)) {
                    ?>


                    
                    <tr>
                        <td><?php echo $f['identificacion'] ?></td>
                        <td><?php echo $f['nombres'] ?></td>
                        <td><?php echo $f['apellidos'] ?></td>
                        <td><?php echo $f['rol'] ?></td>
                        <td><?php echo $f['telefono'] ?></td>
                        <td><?php echo $f['email'] ?></td>
                        <td><?php echo $f['estado'] ?></td>
                        <td><img width="50px" src="../model/<?php echo $f['imagen'] ?>"></td>
                        <td><a class="btn btn-success" href="editarUser.php?id_user=<?php echo $f['identificacion'] ?>">EDITAR</a></td>
                        <td><a class="btn btn-danger" href="../model/eliminarUser.php?id_user=<?php echo $f['identificacion'] ?>">ELIMINAR</a></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </section>




<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="../js/functions.js"></script>
</body>
</html>
