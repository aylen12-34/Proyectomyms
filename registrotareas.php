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
