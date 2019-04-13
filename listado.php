<?php
require 'views/listado.view.php';

echo '<br> <br>';
try {
    $conexion = new PDO('mysql:host=localhost;dbname=cuadrillas', 'root', '');
} catch (PDOException $e) {
    echo "Error:" . $e->getMessage();
    die();
}

$statement = $conexion->prepare('SELECT * FROM cuadrillas');
$resultado = $statement->execute();
/*
$resultado = $statement->fetch();
if($resultado == false){
    echo "La tabla está vacía";
}
else{
    foreach($resultado as $valor){
        echo $valor .'<br>';
    }
}*/

echo '<table class="table">';
echo '<tr>';
echo '<td>DNI</td> <td>Nombre</td> <td>Altura</td> <td>Trabajadera</td> </tr>';
while($resultado = $statement->fetch()){
    echo '<tr> <td>' . $resultado[1] .'</td> <td>' . $resultado[2] .'</td> <td>' . $resultado[3] .'</td> <td>' . $resultado[4] .'</td> </tr>';
}

echo '</table>';



?>