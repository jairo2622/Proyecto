<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/proyecto.css">
    <link rel="icon" href="img/icono.png">
    <title>PyG</title>
</head>

<body>

    <header>
        <nav>
            <ul>
                <li><a href="inventario.php">Inventario</a></li>
                <li><a href="proveedores.php">Proveedores</a></li>
                <li><a href="ventas.php">Ventas</a></li>
                <li><a href="cronograma.html">Cronograma</a></li>
                <li><a href="#">PYG</a></li>
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
        <button type="button" class="btn btn-accion" data-bs-toggle="modal" data-bs-target="#Inversiones">
            Registra Inversiones
        </button>

        <button type="button" class="btn btn-accion" data-bs-toggle="modal" data-bs-target="#Ganancias">
            Registra Ganancias
        </button>
        <!--Boton del modal registro-->

        <!--Modal de registro inversiones-->
        <div class="modal fade" id="Inversiones" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Registrar Inversión</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <form id="Registro" action="InversionRegistro.php" method="post">
                                <div class="form-floating">
                                    <textarea class="cuadro form-control" id="descripcion" name="descripcion" type="text" placeholder="name@example.com" required></textarea>
                                    <label for="descripcion">Descripción</label>
                                </div>

                                <div class="form-floating">
                                    <input class="cuadro form-control" id="precio" name="precio" type="number" placeholder="name@example2.com" required>
                                    <label for="precio">Precio total</label>
                                </div>

                                <div class="form-floating">
                                    <input class="cuadro form-control" id="fecha" name="fecha" type="datetime-local" placeholder="name@example2.com" required>
                                    <label for="fecha">fecha</label>
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

        <!--Modal de registro ganancias-->
        <div class="modal fade" id="Ganancias" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Registrar Ganacias</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <form id="Registro" action="GananciasRegistro.php" method="post">
                                <div class="form-floating">
                                    <textarea class="cuadro form-control" id="descripcion" name="descripcion" type="text" placeholder="name@example.com" required></textarea>
                                    <label for="descripcion">Descripción</label>
                                </div>

                                <div class="form-floating">
                                    <input class="cuadro form-control" id="precio" name="precio" type="number" placeholder="name@example2.com" required>
                                    <label for="precio">Precio total</label>
                                </div>

                                <div class="form-floating">
                                    <input class="cuadro form-control" id="fecha" name="fecha" type="datetime-local" placeholder="name@example2.com" required>
                                    <label for="fecha">fecha</label>
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
        <!--Modal de registro ganancias-->
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
            <input type="text" class="form-control light-table-filter" data-table="tablas_PyG">
        </div>
        <!--Barra de busqueda-->
    </section>

    <section>
        <div class="row">
            <div class="col col-12 col-md-6">
                <h1 align=center>Ganancias</h1>
                <?php
                /*Conexion a la base de datos */
                include("conectar1.php");
                $conexion = conectar();
                /*Consulta de la informacion tabla ganancias*/
                $consulta1 = mysqli_query($conexion, "SELECT*FROM ganancias ORDER BY fecha") or die("Error en la consulta");

                /*Cabeza de la tabla ganancias*/
                echo "<table border=0 class='tablas_PyG'>";

                echo "<thead>";
                echo "<tr>";
                echo "<th class='thpyg'>Descripción</th>";
                echo "<th class='thpyg'>Precio total</th>";
                echo "<th class='thpyg'>Fecha</th>";
                echo "</tr>";
                echo "</thead>";

                /*Cuerpo de la tabla, con un ciclo While que trae los datos en la tabla inventario*/
                echo "<tbody>";
                $total_ganancias = 0;
                while ($traer1 = mysqli_fetch_array($consulta1)) {
                    echo "<tr>";
                    echo "<td>" . $traer1["descripcion"];
                    echo "<td>" . $traer1["precio"];
                    echo "<td>" . $traer1["fecha"];
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
                ?>

            </div>


            <div class="col col-12 col-md-6">
                <h1 align=center>Inversiones</h1>
                <?php
                /*Consulta de la informacion tabla perdidas*/
                $consulta2 = mysqli_query($conexion, "SELECT*FROM perdidas ORDER BY fecha") or die("Error en la consulta");

                /*Cabeza de la tabla perdidas*/
                echo "<table border=0 class='tablas_PyG'>";

                echo "<thead>";
                echo "<tr>";
                echo "<th class='thpyg'>Descripción</th>";
                echo "<th class='thpyg'>Precio total</th>";
                echo "<th class='thpyg'>Fecha</th>";
                echo "</tr>";
                echo "</thead>";

                /*Cuerpo de la tabla, con un ciclo While que trae los datos en la tabla inventario*/
                echo "<tbody>";
                while ($traer2 = mysqli_fetch_array($consulta2)) {
                    echo "<tr>";
                    echo "<td>" . $traer2["descripcion"];
                    echo "<td>" . $traer2["precio"];
                    echo "<td>" . $traer2["fecha"];
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
                ?>
            </div>
        </div>
    </section>

    <section>
        <?php
        /*Consulta de la informacion tabla PyG */
        $consulta3 = mysqli_query($conexion, "SELECT*FROM PyG ORDER BY fecha") or die("Error en la consulta");

        /*Cabeza de la tabla PyG*/
        echo "<table border=0 class='tablas_PyG'>";

        echo "<thead>";
        echo "<tr>";
        echo "<th class='thpyg'>Fecha</th>";
        echo "<th class='thpyg'>Descripcion</th>";
        echo "<th class='thpyg'>Ganancias</th>";
        echo "<th class='thpyg'>Perdidas</th>";
        echo "<th class='thpyg'>Total</th>";
        echo "</tr>";
        echo "</thead>";

        /*Cuerpo de la tabla, con un ciclo While que trae los datos en la tabla PyG*/
        echo "<tbody>";
        while ($traer3 = mysqli_fetch_array($consulta3)) {
            echo "<tr>";
            echo "<td>" . $traer3["fecha"];
            echo "<td>" . $traer3["descripcion"];
            echo "<td>" . $traer3["ganancia"];
            echo "<td>" . $traer3["inversion"];
            echo "<td>" . $traer3["total"];
            echo "</tr>";
        }

        echo "<tr>";
        echo "<td></td>";
        echo "<td>Total</td>";
        echo "<td>";
        echo "<td></td>";
        echo "<td></td>";
        echo "</tr>";
        mysqli_close($conexion);
        echo "</tbody>";
        echo "</table>";
        ?>
    </section>

</body>
<!--Script para las funcoines de bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<!--Script de la funcion barra de busqueda-->
<script src="js1/buscador.js"></script>

</html>