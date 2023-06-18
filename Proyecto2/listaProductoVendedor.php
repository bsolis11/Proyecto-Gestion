

<!DOCTYPE html>
<?php
    include 'conexion.php';

?>
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
    <nav class="navbar navbar-expand-lg navbar-dark navbar-transparent">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <img src="ImagenesIndex/eco.png" alt="" width="70" height="54" class="d-inline-block align-text-top">
                <h1>Vida</h1>
              </a>
      
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item me-5">
                    <a class="nav-link active" aria-current="page" href="Principal1.html">
                        <h5>Inicio</h5>
                    </a>
                  </li>
                  <li class="nav-item me-5">
                    <a class="nav-link active" href="../Proyecto2/recetas.html">
                      <h5>Recetas</h5>
                    </a>
                  </li>
                  <li class="nav-item me-5">
                    <a class="nav-link active" aria-current="page" href="../Proyecto2/listaProductos.php">
                        <h5>Tienda</h5> </a>
                  </li>
                  <li class="nav-item me-5">
                    <a class="nav-link active" aria-current="page" href="../Proyecto2/index.html">
                        <h5>Cerrar Sesión</h5> </a>
                  </li>
                  
      
              </div>
            </div>
          </nav>

         
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
            <div class="table-responsive" >
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
                            <th>Opciones</th>
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
                          
                          <th> <a name="" id="" class="btn btn-warning" href="../Proyecto2/modificarProducto.html" role="button">Editar</a>
                               <a name="" id="" class="btn btn-danger" href="../Proyecto2/eliminarProductoVista.php?nombreProducto=<?php echo urlencode($mostrar['nombreProducto']); ?>" role="button">Borrar</a> 
                          </th>
                          <th>
        </th>
                          
                      </tr>
             <?php   
                    
                       
             ?>
                </table>            
            </div>
        </div>
      </div>
  </main>
</body>
</html>