<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/proyect.css">

    <title>Inventario</title>
</head>

<body>

    <?php
    include("conectar1.php");
    $conexion=conectar();

    /*Declaracion de variable metodo POST*/
    $nombre = $_POST['nombre'];
    /*Declaracion de variable metodo POST*/

    /*Eliminacion de datos, tabla inventario*/
    mysqli_query($conexion, "DELETE from inventario where nombre='$nombre'") or die("Error al eliminar");
    mysqli_close($conexion);
    /*Eliminacion de datos, tabla inventario*/

    echo "<script>alert('Producto Eliminado!')</script>";
    echo "<script> setTimeout(\"location.href='inventario.php'\",500)</script>";
    ?>
</body>

</html>