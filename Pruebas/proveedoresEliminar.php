<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/proyect.css">

    <title>Proveedores</title>
</head>

<body>

    <?php
    include("conectar1.php");
    $conexion=conectar();

    $nombre = $_POST['nombre'];

    mysqli_query($conexion, "DELETE from proveedores where nombre='$nombre'") or die("Error al eliminar");
    mysqli_close($conexion);

    echo "<script>alert('Producto Eliminado!')</script>";
    echo "<script> setTimeout(\"location.href='proveedores.php'\",500)</script>";
    ?>
</body>

</html>