

<?php
  $nombreProducto = isset($_GET['nombreProducto']) ? $_GET['nombreProducto'] : '';
?>


<!doctype html>
<html lang="en">

<head>
  <title>DeleteProducto</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
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
              <a class="nav-link active" aria-current="page" href="Principal2.html">
                  <h5>Inicio</h5>
              </a>
            </li>
            <li class="nav-item me-5">
              <a class="nav-link active" href="../Proyecto2/CuidadoProductos.html">
                <h5>Guía</h5>
              </a>
            </li>
            <li class="nav-item me-5 dropdown letras ">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><h5>Productos</h5></a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="../Proyecto2/eliminarProducto.html">Eliminar un producto</a>
                <a class="dropdown-item" href="../Proyecto2/modificarProducto.html">Editar productos</a>
                <a class="dropdown-item" href="../Proyecto2/insertarProducto.html">Agregar productos</a>
              </div>
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
            <h1>Eliminar producto</h1>
          </div>
          
          <form id="formulario" action="eliminarProducto.php" method="POST">
            <div class="mb-3">
              <label for="nombreProducto" class="form-label">Nombre del Producto a eliminar</label>
              <input type="text" class="form-control" id="nombreProducto" name="nombreProducto" value="<?php echo $nombreProducto; ?>">
            </div>
           
            <button class="btn btn-primary">Eliminar producto</button>
          </form>
        </div>
        
      </div>
  </main>
  <footer class="footer " style="background-color: greenyellow;">
    <div class="container d-flex justify-content-between align-items-center py-3 border-highlight">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="me-2 text-muted text-decoration-none">
                <i class="bi bi-cup"></i>
                <span>&copy; Software Productos Saludables</span>
            </a>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex text-white">
            <li class="ms-3 "><a class="text-muted" href="#"><i class="bi bi-twitter"></i></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-instagram"></i></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-facebook"></i></a></li>
        </ul>


    </div>



</footer>

  
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>