<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/proyecto.css">
    <link rel="icon" href="img/icono.png">
    <title>Proveedores</title>
</head>

<body>

    <header>
        <nav>
            <ul>
                <li><a href="inventario.php">Inventario</a></li>
                <li><a href="proveedores.php">Proveedores</a></li>
                <li><a href="ventas.php">Ventas</a></li>
                <li><a href="cronograma.html">Cronograma</a></li>
                <li><a href="PyG.php">PYG</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <div class="banner">
            <h1 class="texto_header">AUTOSERVICIO LA 43</h1>
        </div>
    </section>

    <section>
        <!--Boton del modal registro-->
        <button type="button" class="btn btn-accion" data-bs-toggle="modal" data-bs-target="#Registrar">
            Registrar
        </button>
        <!--Boton del modal registro-->

        <!--Boton del modal eliminar-->
        <button type="button" class="btn btn-accion" data-bs-toggle="modal" data-bs-target="#Eliminar">
            Eliminar
        </button>
        <!--Boton del modal eliminar-->

        <!--Boton del modal actualizar-->
        <button type="button" class="btn btn-accion" data-bs-toggle="modal" data-bs-target="#Actualizar">
            Actualizar
        </button>
        <!--Boton del modal actualizar-->

        <!--Modal de registro-->
        <div class="modal fade" id="Registrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Datos del Proveedor</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <form id="Registro" action="proveedoresRegistro.php" method="post">
                                <div class="form-floating">
                                    <input class="cuadro form-control" id="proveedor" name="nombre" type="text" placeholder="name@example5.com" required>
                                    <label for="proveedor">Nombre del proveedor</label>
                                </div>

                                <div class="form-floating">
                                    <input class="cuadro form-control" id="correo" name="correo" type="email" placeholder="name@example6.com" required>
                                    <label for="correo">Correo</label>
                                </div>

                                <div class="form-floating">
                                    <input class="cuadro form-control" id="telefono1" name="telefono1" type="text" placeholder="name@example7.com" required>
                                    <label for="telefono1">Telefono 1</label>
                                </div>

                                <div class="form-floating">
                                    <input class="cuadro form-control" id="telefono2" name="telefono2" type="text" placeholder="name@example8.com" required>
                                    <label for="telefono1">Telefono 2</label>
                                </div>

                                <div class="form-floating">
                                    <textarea class="cuadro form-control" id="productos" name="productos" type="text" placeholder="name@example9.com" required></textarea>
                                    <label for="productos">Productos</label>
                                </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <input class="btn btn-primary" name="Enviar" type="submit">
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!--Modal de registro-->

        <!--Modal de actualizar-->
        <div class="modal fade" id="Actualizar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Actuzalizar Datos del Proveedor</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <form id="Registro" action="proveedoresActualizar.php" method="post">
                                <div class="form-floating">
                                    <input class="cuadro form-control" id="proveedor" name="nombre" type="text" placeholder="name@example5.com" required>
                                    <label for="proveedor">Nombre del proveedor</label>
                                </div>

                                <div class="form-floating">
                                    <input class="cuadro form-control" id="correo" name="correo" type="email" placeholder="name@example6.com" required>
                                    <label for="correo">Correo</label>
                                </div>

                                <div class="form-floating">
                                    <input class="cuadro form-control" id="telefono1" name="telefono1" type="text" placeholder="name@example7.com" required>
                                    <label for="telefono1">Telefono 1</label>
                                </div>

                                <div class="form-floating">
                                    <input class="cuadro form-control" id="telefono2" name="telefono2" type="text" placeholder="name@example8.com" required>
                                    <label for="telefono1">Telefono 2</label>
                                </div>

                                <div class="form-floating">
                                    <textarea class="cuadro form-control" id="productos" name="productos" type="text" placeholder="name@example9.com" required></textarea>
                                    <label for="productos">Productos</label>
                                </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <input class="btn btn-primary" name="Actualizar" value="Actualizar" type="submit">
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!--Modal de actualizar-->

        <!--Confirmacion de eliminar productos-->
        <script>
            function ConfirmarEliminacion(){
                var respuesta=confirm("¿Seguro que deseas eliminar este proveedor?");

                if(respuesta == true){
                    return true;
                }else{
                    return false;
                }
            }
        </script>
        <!--Confirmacion de eliminar productos-->

        <!--Modal de eliminar-->
        <div class="modal fade" id="Eliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar Proveedor</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <form id="Registro" action="proveedoresEliminar.php" method="post">
                                <div class="form-floating">
                                    <input class="cuadro form-control" id="proveedor" name="nombre" type="text" placeholder="name@example.com" required>
                                    <label for="proveedor">Nombre del Proveedor</label>
                                </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <input class="btn btn-primary" value="Eliminar" type="submit" onclick="return ConfirmarEliminacion()">
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!--Modal de eliminar-->
    </section>

    <section>
        <!--Barra de busqueda-->
        <div class="input-group mb-2 buscador">
            <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-list-search" width="28" height="28" viewBox="0 0 24 24" stroke-width="2.5" stroke="#2769A0" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <circle cx="15" cy="15" r="4" />
                    <path d="M18.5 18.5l2.5 2.5" />
                    <path d="M4 6h16" />
                    <path d="M4 12h4" />
                    <path d="M4 18h4" />
                </svg></span>
            <input type="text" class="form-control light-table-filter" data-table="tabla_proveedores">
        </div>
        <!--Barra de busqueda-->
    </section>

    <?php
    /*Conexion a la base de datos */
    include("conectar1.php");
    $conexion = conectar();

    $consulta = mysqli_query($conexion, "SELECT*FROM proveedores") or die("Error en la consulta");

    /*Cabeza de la tabla*/
    echo "<table border=0 class='tabla_proveedores'>";

    echo "<thead>";
    echo "<tr>";
    echo "<th class='th2'>Proveedor</th>";
    echo "<th class='th2'>Correo</th>";
    echo "<th class='th2'>Telefono 1</th>";
    echo "<th class='th2'>Telefono 2</th>";
    echo "<th class='th2'>Productos</th>";
    echo "</tr>";
    echo "</thead>";
    /*Cabeza de la tabla*/

    /*Cuerpo de la tabla, con un ciclo While que trae los datos en la tabla proveedores*/
    echo "<tbody>";
    while ($traer = mysqli_fetch_array($consulta)) {
        echo "<tr>";
        echo "<td>" . $traer["nombre"];
        echo "<td>" . $traer["correo"];
        echo "<td>" . $traer["telefono1"];
        echo "<td>" . $traer["telefono2"];
        echo "<td>" . $traer["productos"];
        echo "</tr>";
    }
    echo "<tbody>";
    echo "</table>";
    mysqli_close($conexion);
    /*Cuerpo de la tabla, con un ciclo While que trae los datos en la tabla proveedores*/
    ?>
</body>
<!--Script de bootstrap5-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<!--Script de la funcion barra de busqueda-->
<script src="js1/buscador.js"></script>

</html>