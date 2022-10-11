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
    $proveedor=$_POST['proveedor'];
    $cantidad = $_POST['cantidad'];
    $precioU = $_POST['precioU'];
    $perecedero = $_POST['perecedero'];
    $vencimiento = $_POST['vencimiento'];
    /*Declaracion de variable metodo POST*/

    /*Actualizacion de datos, tabla inventario*/
    mysqli_query($conexion, "UPDATE inventario set proveedor='$proveedor' where nombre='$nombre'") or die("Error al actualizar");
    mysqli_query($conexion, "UPDATE inventario set cantidad='$cantidad' where nombre='$nombre'") or die("Error al actualizar");
    mysqli_query($conexion, "UPDATE inventario set precioU='$precioU' where nombre='$nombre'") or die("Error al actualizar");
    mysqli_query($conexion, "UPDATE inventario set perecedero='$perecedero' where nombre='$nombre'") or die("Error al actualizar");
    mysqli_query($conexion, "UPDATE inventario set vencimiento='$vencimiento' where nombre='$nombre'") or die("Error al actualizar");
    /*Actualizacion de datos, tabla inventario*/


    echo "<script>alert('Producto Actualizado!')</script>";
    echo "<script> setTimeout(\"location.href='inventario.php'\",200)</script>";
    ?>
</body>

</html>