<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="C:/xampp/htdocs/tiendaWEB1/css/admiProductos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Administracion de Productos</title>
</head>
  <body >
    <header>

      <div class="text align-center">
        <nav class="navbar navbar-dark bg-dark" style="text-align:center !important; display:block; " >
          <a class="navbar-brand" href=""><h1>La Fruteria</h1></a>
        </nav>
      </div>

    </header>
      <br>
      <br>

  <main>
  <div class="container">
    <form action="registrarProducto.php" method="POST">

      <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Nombre del producto" name ="producto">
        </div>

        <div class="col">
          <input type="text" class="form-control" placeholder="Marca del producto" name ="marca" >
        </div>
  
        <div class="col">
          <input type="text" class="form-control" placeholder="Precio" name="precio">
        </div>
      </div>
      <div class= "row mt-3">
       <div class="col">
            <textarea class="form-control" rows="4" placeholder="Descripcion" name="descripcion"></textarea>
        </div>
    </div>
    <div class= "row mt-3">
       <div class="col">
            <input class="form-control" type="text" placeholder="URL Fotografia" name="foto">
        </div>
    </div>
    <br>
    <br>
    <button type="submit" class= "btn btn-info btn-block" name="botonEnvio">Registrar</button>
    <br>
    <button type="button" class="btn btn-info btn-block"><a class="" style="color:white" href="listaProducto.php">Ver productos registrados</a></button>
</form>
</div>
</main>
<br>
    <footer>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>