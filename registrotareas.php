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
            padding: 30px;
            border: 4px solid black;
        };
        p{
            color: darkblue;
            border: 5px solid black;
            
        };
    </style>
</head>
<body>
    <p>coso sin importancia</p>

    <?php
    require "bd.php";
    $nombre=$_POST['nombre'];
    $descripcion=$_POST['descript'];
    $estado=$_POST['estado'];

    $sql ="INSERT INTO tareas (nombre,descript,estado) VALUES ('$nombre',' $descripcion','$estado')";
    if($conexion->query($sql)=== TRUE){
        echo"Se guardo y envio la informacion";
    }
?>
</body>
</html>