<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <a href="listado.php" class="navbar-brand">Ver listado</a>
        <a href="eliminar.php" class="navbar-brand">Eliminar costalero</a>
        <a href="buscar.php" class="navbar-brand">Buscar costalero</a>
        <a href="https://github.com/pemoe90/Gestion-costaleros" class="navbar-brand">Github</a>
    </nav>
    <div class="container ml-0">
        <h1>Introducir costalero</h1>
        <form class="form-group" action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" name="registrar">
            <div>
                <input type="text" name="nombre" id="formNombre" placeholder = "Nombre" required>
            </div>

            <div>
                <input type="text" name="DNI" id="formDNI" placeholder= "DNI" required>
            </div>

            <div>
                <input type="number" name="trabajadera" id="formDNI" placeholder= "Trabajadera">
            </div>

            <div>
                <input type="number" name="altura" id="formDNI" placeholder= "Altura">
            </div>

            <div>
                <input type="submit" value="Enviar">
            </div>

            
        </form>
    </div>
</body>
</html>