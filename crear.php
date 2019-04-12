<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    try {
        $conexion = new PDO('mysql:host=localhost;dbname=cuadrillas', 'root', '');
    } catch (PDOException $e) {
        echo "Error:" . $e->getMessage();
        die();
    }

    $id = null;
    $nombre = $_POST['nombre'];
    $dni = $_POST['DNI'];
    $altura = $_POST['altura'];
    $trabajadera = $_POST['trabajadera'];
    

    $statement = $conexion->prepare('SELECT * FROM cuadrillas WHERE DNI = :dni LIMIT 1');
    $statement->execute(array(':dni' => $dni));

    $resultado = $statement->fetch();
    if($resultado != false){
        echo "Ya existe el usuario: ";
    }
    else{
        $statement = $conexion->prepare('INSERT INTO cuadrillas VALUES(:id, :dni, :nombre, :altura, :trabajadera)');
        $statement->execute(array(
            ':id'=>$id,
            ':nombre'=>$nombre,
            ':dni'=>$dni,
            ':altura'=>$altura,
            ':trabajadera'=>$trabajadera
        ));
        echo 'Costalero creado';
    }
}

require 'views/crear.view.php';
?>