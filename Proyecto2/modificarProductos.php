<?php
    include 'conexion.php';
    
    $nombreProducto = $_POST['nombreProducto'];
    $nombreVendedor = $_POST['nombreVendedor'];
    $precio = $_POST['precio'];
    $contacto = $_POST['contacto'];
    $descripcion = $_POST['descripcion'];
    $cantidad = $_POST['cantidad'];

    $query = "UPDATE producto SET nombreVendedor = '$nombreVendedor', precio = '$precio',
     contacto = '$contacto', descripcion = '$descripcion', cantidad = '$cantidad' 
     WHERE nombreProducto = '$nombreProducto'";

    $ejecutar = mysqli_query($con, $query);

    if($ejecutar)
    {
        echo'
        <script>
            alert("Producto modificado exitosamente");
            window.location="modificarProducto.html"
        </script>
        ';
    }
?>




