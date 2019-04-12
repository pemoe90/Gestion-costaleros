<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $conexion = new mysqli('localhost','root','','cuadrillas');

    if($conexion->connect_errno){
        die("Error al guardar el costalero");
    }else{
        $id = null;
        $nombre = $_POST['nombre'];
        $dni = $_POST['DNI'];
        $trabajadera = $_POST['trabajadera'];
        $altura = $_POST['altura'];

        $statement = $conexion->prepare("SELECT DNI FROM cuadrillas WHERE DNI = $dni");
        
        if($conexion->affected_rows >= 1){
            $statement = $conexion->prepare("INSERT INTO cuadrillas VALUES(?,?,?,?,?)");
            $statement->bind_param('issii', $id, $dni, $nombre, $altura, $trabajadera);
            $statement->execute();
        } else {
            echo 'DNI repetido' . '<br>';
        }

        //Agregar el costalero
        

        
    }
}

require 'views/contenido.view.php';
?>