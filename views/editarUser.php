<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Mysqli</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
    <section id="cont-global">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 text-center cont-form-u">
                    <h2>REGISTRAR USUARIOS</h2>
                    <p>Por favor complete el formulario para registrar un nuevo ususario</p>

                    <?php
                        require("../model/conexion.php");
                        $id_user = $_GET['id_user'];

                        $consultarUser= "SELECT * FROM users WHERE identificacion='$id_user'";
                        $resultado = $conexion->query($consultarUser);

                        if ($f = mysqli_fetch_array($resultado) ) {
                            
                        }
                    ?>


                    <form action="../model/modificarUser.php" class="text-start" method="POST">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="identificacionInput" class="form-label">Identificacion:</label>
                                <input type="number" name="identificacion" readonly value="<?php echo $f['identificacion'] ?>"  class="form-control" id="identificacionInput" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="tipoDocInput" class="form-label">Documento:</label>
                                <select class="form-select" name="tipoDoc" id="tipoDocInput" aria-label="Default select example">
                                    <option selected value="<?php echo $f['tipoDoc'] ?>"><?php echo $f['tipoDoc'] ?></option>
                                    <option value="cc">CC</option>
                                    <option value="ce">CE</option>
                                    <option value="pasaporte">PASAPORTE</option>
                                </select>
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="nombresInput" class="form-label">Nombres:</label>
                                <input type="text" name="nombres" value="<?php echo $f['nombres'] ?>" class="form-control" id="nombresInput" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="apellidosInput" class="form-label">Apellidos:</label>
                                <input type="text" name="apellidos" value="<?php echo $f['apellidos'] ?>" class="form-control" id="apellidosInput" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="emailInput" class="form-label">Email:</label>
                                <input type="email" name="email" value="<?php echo $f['email'] ?>" class="form-control" id="emailInput" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="telefonoInput" class="form-label">Telefono:</label>
                                <input type="number" name="telefono" value="<?php echo $f['telefono'] ?>" class="form-control" id="telefonoInput" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="claveInput" class="form-label">Clave:</label>
                                <input type="text" name="clave" value="<?php echo $f['clave'] ?>" class="form-control" id="claveInput" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="rolInput" class="form-label">Rol:</label>
                                <select class="form-select" name="rol" id="rolInput" aria-label="Default select example">
                                    <option selected value="<?php echo $f['rol'] ?>"><?php echo $f['rol'] ?></option>
                                    <option value="administrador">ADMINISTRADOR</option>
                                    <option value="vendedor">VENDEDOR</option>
                                    <option value="cliente">CLIENTE</option>
                                </select>
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="estadoInput" class="form-label">Estado:</label>
                                <select class="form-select" name="estado" id="estadoInput" aria-label="Default select example">
                                    <option selected value="<?php echo $f['estado'] ?>"><?php echo $f['estado'] ?></option>
                                    <option value="activo">ACTIVO</option>
                                    <option value="inactivo">INACTIVO</option>
                                    <option value="bloqueado">BLOQUEADO</option>
                                </select>
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="fotoInput" class="form-label">Foto usuario:</label>
                                <input type="file" accept=".jpg, .png, .gif, .jpeg" name="foto" class="form-control" id="fotoInput" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Modificar Cuenta</button>
                    </form>
                    <a href="views/verUsers.php" class="btn btn-info">VER USUARIOS</a>
                </div>
            </div>  
        </div>

    </section>




<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="js/functions.js"></script>
</body>
</html>
