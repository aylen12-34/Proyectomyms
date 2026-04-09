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
            background:#2563EB;
            padding: 25px;
            border-radius: 12px;
            width: 320px;
            display: grid;
            grid-template-columns: 1fr;
            gap: 12px;
            box-shadow: 0 0 10px black;
        }

        h2{
            text-align: center;
            margin-bottom: 10px;
            color: #687280;
        }

        .m{
            display: grid;
            gap: 5px;
        }
        input{
            padding: 8px;
            border-radius: 6px;
            box-shadow: 0 0 5px #ccc;
        }
    </style>
</head>

<body>

    <form action="registrotareas.php" method="post">
        <h2>Registrar tarea</h2>

        <div class="m">
            <label>nombre</label>
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