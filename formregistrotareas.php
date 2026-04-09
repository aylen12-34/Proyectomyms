<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de tareas</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f3f4f6;
            height: 100vh;
            display: grid;
            place-items: center;
        }

        form{
            display: flex;
            flex-direction: column;
            width: 200px;
            border: 3px solid;
        }

    </style>
</head>

<body>

    <form action="registrotareas.php" method="post">
        <h2>Registrar tarea</h2>

        <div class="m">
            <label>Usuario</label>
            <input type="text" name="nombre" required>
        </div>

        <div class="m">
            <label>Descripción</label>
            <input type="text" name="descript" required>
        </div>

        <div class="m">
            <label>Estado</label>
            <input type="text" name="estado" required>
        </div>

        <input type="submit" value="Enviar">
    </form>

</body>
</html>
