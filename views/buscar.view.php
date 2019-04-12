<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado costaleros</title>
</head>
<body>
    <div class="menu">
        <a href="crear.php">Introducir costalero</a>
        <a href="listado.php">Ver listado</a>
        <a href="eliminar.php">Eliminar costalero</a>
        <br>
    </div>
    <div class="principal">
        <h1>Introducir DNI del costalero</h1>

        <form class="formulario" action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" name="registrar">
            <div>
                <input type="text" name="DNI" id="formDNI" placeholder= "DNI" required>
            </div>

            <div>
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>
</body>
</html>