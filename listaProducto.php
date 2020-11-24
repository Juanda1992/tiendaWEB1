<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admiProductos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Listado</title>
</head>
<body >


    <?php

    include("Basedatos.php");

    //1. Crear un objeto de la clase Basedatos
    $transaccion = new Basedatos();
    //2.Crear la consulta SQL para buscar datos
    $consultaSQL="SELECT * FROM productos WHERE 1";
    //3.Utilizar el metodo para consultarDatos()
    $productos=$transaccion->consultarDatos($consultaSQL);
    // print_r($productos);

    ?>

<header>

    <div class="text align-center">
        <nav class="navbar navbar-dark bg-dark" style="text-align:center !important; display:block; " >
            <a class="navbar-brand" href=""><h1>Productos registrados</h1></a>
        </nav>
    </div>

</header>
    <br>
    <br>
    <div class="container" >
    
        <div class="row row-cols-1 row-cols-md-3">

            <?php foreach ($productos as $producto):?>
                
                <div class="col mb-4">
                    <div class="card h-100">
                         <img src="<?php echo($producto["foto"])?>" class="card-img-top" alt="foto">
                         <div class="card-body">
                            <h2 class="card-title"><?php echo($producto["producto"])?></h2>
                            <p class="card-text"><?php echo($producto["descripcion"])?> </p>
                            <a href="eliminarProductos.php?id=<?php echo($producto["idProducto"])?>" class="btn btn-danger">Eliminar</a>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo($producto["idProducto"])?>">
                                Editar
                            </button>
                        </div>
                    </div>
                    
                    <div class="modal fade" id="editar<?php echo($producto["idProducto"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edición de producto</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                 <div class="modal-body">
                                    <form action="editarProductos.php?id=<?php echo($producto["idProducto"])?>" method="POST">
                                         <div class="form-group">
                                            <label >Producto:</label>
                                            <input type="text" class="form-control" name="productoEditar" value="<?php echo($producto["producto"])?>">
                                         </div>
                                         <div class="form-group">
                                            <label >Descripcion:</label>
                                            <textarea class="form-control" rows="3" name="descripcionEditar"><?php echo($producto["descripcion"])?></textarea>
                                         </div>
                                         <button type="submit" class="btn btn-info" name="botonEditar">Editar</button>
                                    </form>
                                 </div>
                            
                            </div>
                        </div>
                    </div>

                </div>  
            <?php endforeach ?>

        </div>

    </div>

 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>   
</body>
</html>