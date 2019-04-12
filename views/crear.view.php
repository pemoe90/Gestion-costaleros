<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel ="stylesheet" href="css/estilos.css">
    <title>Document</title>
</head>
<body>
    <div class="menu">
        <a href="listado.php">Ver listado</a>
        <a href="eliminar.php">Eliminar costalero</a>
        <a href="buscar.php">Buscar costalero</a>
    </div>
    <div class="principal">
        <h1>Introducir costalero</h1>
        
        <form class="formulario" action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" name="registrar">
            <div class="form-group">
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