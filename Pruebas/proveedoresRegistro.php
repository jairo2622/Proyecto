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
    $productos=$_POST['productos'];
    $correo = $_POST['correo'];
    $telefono1 = $_POST['telefono1'];
    $telefono2 = $_POST['telefono2'];

    $insertar = "INSERT INTO proveedores values('$nombre','$productos','$correo','$telefono1','$telefono2')";
    $resultado = mysqli_query($conexion, $insertar) or die("Error en la insercion");
    mysqli_close($conexion);
    
    echo "<script>alert('Producto Registrado!')</script>";
    echo "<script> setTimeout(\"location.href='proveedores.php'\",200)</script>";
    ?>

</body>

</html>