<?php

    include("Basedatos.php");

   if(isset($_POST["botonEnvio"])){
   
       //1.Recibir datos
        $producto=$_POST["producto"];
        $marca=$_POST["marca"];
        $precio=$_POST["precio"];
        $descripcion=$_POST["descripcion"];
        $foto=$_POST["foto"];

      //2.Crear una copia de la clase BaseDatos
      //Crear un objeto de la clase BaseDatos
      $transaccion=new Basedatos();
      $transaccion->conectarBD();

      //3.Crear una consulta SQL para agregar datos
      $consultaSQL="INSERT INTO productos(producto,marca,precio,descripcion,foto) VALUES ('$producto','$marca','$precio','$descripcion','$foto')";

      //4.Utilizar la funcion para insertar datos de la clase BaseDatos
      $transaccion->agregarDatos($consultaSQL);   

      //5.Redireccion a la vista que se necesite
      header("location:admiProductos.php");

    }
?>