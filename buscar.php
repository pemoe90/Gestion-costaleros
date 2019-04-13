<?php
require 'views/buscar.view.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    try {
        $conexion = new PDO('mysql:host=localhost;dbname=cuadrillas', 'root', '');
    } catch (PDOException $e) {
        echo "Error:" . $e->getMessage();
        die();
    }

    $dni = $_POST['DNI'];

    $statement = $conexion->prepare('SELECT * FROM cuadrillas WHERE DNI = :dni LIMIT 1');
    $statement->execute(array(':dni' => $dni));

    $resultado = $statement->fetch();
    if($resultado == false){
        echo "No existe el costalero";
    }
    else{
        echo '<table class="table">';
        echo '<tr>';
        echo '<td>DNI</td> <td>Nombre</td> <td>Altura</td> <td>Trabajadera</td> </tr>';
        echo '<tr> <td>' . $resultado[1] .'</td> <td>' . $resultado[2] .'</td> <td>' . $resultado[3] .'</td> <td>' . $resultado[4] .'</td> </tr>';
        echo '</table>';
    }
}
?>