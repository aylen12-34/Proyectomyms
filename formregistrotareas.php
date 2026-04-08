<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            display: flex;
            flex-direction: column;
            width: 200px;
        }
    </style>
</head>
<body>
    <form action="registrotareas.php" method="post">
        <label for="">usuario</label>
        <input type="text" name="nombre" id="">
        <label for="">direccion</label>
        <input type="text" name="direc">
        <label for="">Estado</label>
        <input type="text" name="estado">
        <input type="submit" value="enviar">
    </form>
</body>
</html>