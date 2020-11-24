<?php

include("Basedatos.php");


if (isset($_POST["botonEditar"])){

    //1.Recibir los datos a editar
    $producto=$_POST["productoEditar"];
    $descripcion=$_POST["descripcionEditar"];


    //2.Recibir el id del producto a editar
    $id=$_GET["id"];


    //3.Crear un objeto de la clase Basedatos
    $transaccion= new Basedatos();

    //4.Crear la consultaSQL para editar
    $consultaSQL="UPDATE productos SET producto ='$producto', descripcion ='$descripcion' WHERE idProducto='$id'";

    //5.Llamar al metodo editarDatos()
    $transaccion->editarDatos($consultaSQL);

    
}




?>