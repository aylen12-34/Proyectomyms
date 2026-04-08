<?php
    $usuario="root";
    $contraseña="";
    $direccion="localhost";
    $baseDatos="tastflow";

    $conexion= new mysqli($direccion,$usuario,$contraseña,$baseDatos);
    if($conexion->conect_error){
        echo "No se pudo conectar";
    }
?>