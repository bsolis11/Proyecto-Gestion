<?php
    include 'conexion.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lista de Productos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>

<body class="bg-form-add-prod">
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <div class="formulario-container">
        <div class="formulario-image">
          <div class="bg-form-add-prod-img">
            <img src="./assets/images/Alimenta_tu_cuerpo_con_amor_y_nutrición-removebg.png" alt="Imagen">
          </div>
        </div>
        <div class="formulario-content">
          <div class="bg-form-add-prod-img">
            <h1>Lista Productos</h1>
          </div>
            <div class="table-responsive">
                <table class="table table-striped table-hover table-borderless table-primary align-middle">
                        <caption> LIsta Productos</caption>
                        <tr>
                            <th>Nombre Producto</th>
                            <th>Nombre Vendedor</th>
                            <th>Precio</th>
                            <th>Contacto</th>
                            <th>Descripción</th>
                            <th>Cantidad</th>
                            <th>ID Vendedor</th>
                        </tr>
             <?php
                    
                    $query = "SELECT * FROM producto";
                    $resultado = mysqli_query($con, $query);
   
                    while ($mostrar = mysqli_fetch_array($resultado)) {
             ?>  
                    <tr>
                          <th> <?php echo $mostrar['nombreProducto']?> </th>
                          <th> <?php echo $mostrar['nombreVendedor']?> </th>
                          <th> <?php echo $mostrar['precio']?> </th>
                          <th> <?php echo $mostrar['contacto']?> </th>
                          <th> <?php echo $mostrar['descripcion']?> </th>
                          <th> <?php echo $mostrar['cantidad']?> </th>
                          <th> <?php echo $mostrar['idVendedor']?> </th>
                      </tr>
             <?php   
                    }  
                       
             ?>
                </table>            
            </div>
        </div>
      </div>
  </main>
</body>
</html>