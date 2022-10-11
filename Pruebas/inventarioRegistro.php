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

    /*Registro de datos en la tabla inventario*/
    $insertar = "INSERT INTO inventario values('$nombre','$cantidad','$precioU','$proveedor','$perecedero','$vencimiento')";
    $resultado = mysqli_query($conexion, $insertar) or die("Error en la insercion");
    mysqli_close($conexion);
    /*Registrar de datos, tabla inventario*/
    
    echo "<script>alert('Producto Registrado!')</script>";
    echo "<script> setTimeout(\"location.href='inventario.php'\",200)</script>";
    ?>

</body>

</html>