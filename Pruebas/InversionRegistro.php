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
    $descripcion = $_POST['descripcion'];
    $precio=$_POST['precio'];
    $fecha=$_POST['fecha'];
    /*Declaracion de variable metodo POST*/

    /*Declaracion de variable para las ganancias de la tabla PyG*/
    $inversion=$precio;
    $ganancia=0;
    $total=0;
    /*Declaracion de variable para las ganancias de la tabla PyG*/

    /*Registro de datos en la tabla perdidas*/
    $insertar = "INSERT INTO perdidas values('$id','$descripcion','$precio','$fecha')";
    /*Registro de datos en la tabla PyG*/
    $insertar2="INSERT INTO PyG values('$fecha','$descripcion','$ganancia','$inversion','$total')";

    $resultado = mysqli_query($conexion, $insertar) or die("Error en la insercion");
    $resultado2 = mysqli_query($conexion, $insertar2) or die("Error en la insercion");
    mysqli_close($conexion);
    
    echo "<script>alert('Inversion Registrada!')</script>";
    echo "<script> setTimeout(\"location.href='PyG.php'\",200)</script>";
    ?>

</body>

</html>