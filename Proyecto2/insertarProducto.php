<?php
    include 'conexion.php';
    
    $nombreProducto = $_POST['nombreProducto'];
    $nombreVendedor = $_POST['nombreVendedor'];
    $precio = $_POST['precio'];
    $contacto = $_POST['contacto'];
    $descripcion = $_POST['descripcion'];
    $cantidad = $_POST['cantidad'];
    $idVendedor = $_POST['idVendedor'];

    $query = "INSERT INTO producto(nombreProducto, nombreVendedor, precio,contacto,descripcion,cantidad,idVendedor) 
                VALUES('$nombreProducto','$nombreVendedor','$precio','$contacto','$descripcion','$cantidad','$idVendedor')";

    $ejecutar = mysqli_query($con, $query);

    if($ejecutar)
    {
        echo'
        <script>
            alert("Usuario almacenado exito");
            window.location="insertarProducto.html"
        </script>
      ';
    }

?>


<div class="alert alert-primary" role="alert">
  <strong>Alert Heading</strong> Some Word
</div>
