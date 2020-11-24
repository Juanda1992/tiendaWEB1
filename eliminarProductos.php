<?php

    //1.Incluir el archivo Basedatos
    include("Basedatos.php");

    //2.Recibir el id Eliminar
    $id=$_GET["id"];
    
    //3.Crear un objeto (sacar copia) de la clase Basedatos
    $transaccion = new Basedatos();

    //4.Crear una consultaSQL para eliminar datos 
    $consultaSQL="DELETE FROM productos WHERE idProducto='$id'";

    //5.Ejecutar el metodo Eliminar usuario 
    $transaccion->eliminarDatos($consultaSQL);



?>