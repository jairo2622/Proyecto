<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/proyecto.css">
    <link rel="icon" href="img/icono.png">
    <title>Ventas</title>
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
        <div class="ventas">
            <form action="" method="get">
                <div class="input-group buscador_ventas">
                    <button type="input" class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-report-search" width="28" height="28" viewBox="0 0 24 24" stroke-width="2.5" stroke="#2769A0" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M8 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h5.697" />
                            <path d="M18 12v-5a2 2 0 0 0 -2 -2h-2" />
                            <rect x="8" y="3" width="6" height="4" rx="2" />
                            <path d="M8 11h4" />
                            <path d="M8 15h3" />
                            <circle cx="16.5" cy="17.5" r="2.5" />
                            <path d="M18.5 19.5l2.5 2.5" />
                        </svg></button>
                    <input type="text" aria-label="First name" class="form-control" placeholder="Producto">
                    <input type="number" aria-label="Last name" class="form-control" placeholder="Cantidad">
                </div>
            </form>


            <div class="precios_container">
                <?php
                include("conectar1.php");
                $conexion = conectar();

                $consulta = mysqli_query($conexion, "SELECT*FROM proveedores") or die("Error en la consulta");

                echo "<table border=0>";
                echo "<tr class='tabla_ventas'>";
                echo "<th class='th2'>Producto</th>";
                echo "<th class='th2'>Cantidad</th>";
                echo "<th class='th2'>Precio</th>";
                echo "</tr>";

                echo "</table>";
                mysqli_close($conexion);
                ?>
            </div>
        </div>
    </section>
</body>

</html>