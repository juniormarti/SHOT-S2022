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
                    <form action="model/insertarUser.php" class="text-start" method="POST">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="identificacionInput" class="form-label">Identificacion:</label>
                                <input type="number" name="identificacion" class="form-control" id="identificacionInput" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="tipoDocInput" class="form-label">Documento:</label>
                                <select class="form-select" name="tipoDoc" id="tipoDocInput" aria-label="Default select example">
                                    <option selected>Seleccione...</option>
                                    <option value="cc">CC</option>
                                    <option value="ce">CE</option>
                                    <option value="pasaporte">PASAPORTE</option>
                                </select>
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="nombresInput" class="form-label">Nombres:</label>
                                <input type="text" name="nombres" class="form-control" id="nombresInput" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="apellidosInput" class="form-label">Apellidos:</label>
                                <input type="text" name="apellidos" class="form-control" id="apellidosInput" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="emailInput" class="form-label">Email:</label>
                                <input type="email" name="email" class="form-control" id="emailInput" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="telefonoInput" class="form-label">Telefono:</label>
                                <input type="number" name="telefono" class="form-control" id="telefonoInput" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="claveInput" class="form-label">Clave:</label>
                                <input type="text" name="clave" class="form-control" id="claveInput" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="rolInput" class="form-label">Rol:</label>
                                <select class="form-select" name="rol" id="rolInput" aria-label="Default select example">
                                    <option selected>Seleccione...</option>
                                    <option value="administrador">ADMINISTRADOR</option>
                                    <option value="vendedor">VENDEDOR</option>
                                    <option value="cliente">CLIENTE</option>
                                </select>
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="estadoInput" class="form-label">Estado:</label>
                                <select class="form-select" name="estado" id="estadoInput" aria-label="Default select example">
                                    <option selected>Seleccione...</option>
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
                       
                        <button type="submit" class="btn btn-primary">Crear Cuenta</button>
                    </form>
                    <a href="views/verUsers.php" class="btn btn-info">VER USUARIOS</a>
                </div>


                <div class="col-lg-6 text-center cont-form-p">
                    <h2>REGISTRAR PRODUCTOS</h2>
                    <p>Por favor complete el formulario para registrar un nuevo producto</p>
                    <form action="model/insertarProductos.php" class="text-start" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="codProductoInput" class="form-label">Codigo Producto:</label>
                                <input type="number" name="codProducto" class="form-control" id="codProductoInput" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="nombreInput" class="form-label">Nombre Producto:</label>
                                <input type="text" name="nombre" class="form-control" id="nombreInput" aria-describedby="emailHelp">
                                
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="descripcionInput" class="form-label">Descripcion:</label>
                                <input type="text" name="descripcion" class="form-control" id="desripcionInput" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="proveedorInput" class="form-label">Proveedor:</label>
                                <select class="form-select" name="proveedor" id="proveedorInput" aria-label="Default select example">
                                    <option selected>Seleccione...</option>
                                    <option value="bavaria">BAVARIA SAS</option>
                                    <option value="repco">REPCO</option>
                                    <option value="gonzales">COMERCIALIZADORA GONZALES</option>
                                </select>
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="precioInput" class="form-label">Precio:</label>
                                <input type="number" name="precio" class="form-control" id="precioInput" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="cantidadInput" class="form-label">Cantidad:</label>
                                <input type="number" name="cantidad" class="form-control" id="cantidadInput" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="colorInput" class="form-label">Color:</label>
                                <select class="form-select" name="color" id="colorInput" aria-label="Default select example">
                                    <option selected>Seleccione...</option>
                                    <option value="negro">NEGRO</option>
                                    <option value="verde">VERDE</option>
                                    <option value="azul">AZUL</option>
                                </select>
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="imagenInput" class="form-label">Foto producto:</label>
                                <input type="file" accept=".jpg, .png, .gif, .jpeg" name="imagen" class="form-control" id="imagenInput" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Crear Producto</button>
                    </form>
                    <a href="views/verProductos.php" class="btn btn-dark">VER PRODUCTOS</a>   
                </div>
            </div>  
        </div>

    </section>




<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="js/functions.js"></script>
</body>
</html>
