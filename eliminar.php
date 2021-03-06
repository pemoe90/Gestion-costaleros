<?php
require 'views/eliminar.view.php';

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
        $statement = $conexion->prepare('DELETE FROM cuadrillas WHERE DNI = :dni');
        $statement->execute(array(
            ':dni'=>$dni
        ));
        echo "Costalero eliminado";
    }
}


?>