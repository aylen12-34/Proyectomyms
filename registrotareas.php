<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: purple;
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
            color: blue;
        }
    </style>
</head>
<body>
    <?php
    require "bd.php"
    $nombre=$_POST['nombre'];
    $descripcion=$_POST['descript'];
    $estado=$_POST['estado'];

    $sql ="INSERT INTO tareas (nombre,descript,estado) VALUES ('$nombre',' $descripcion','$estado')";
    if($conexion->query($sql)=== TRUE){
        echo"Se registro la informacion";
    }
?>
</body>
</html>


