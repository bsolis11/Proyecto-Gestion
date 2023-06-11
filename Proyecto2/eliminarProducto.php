<?php
    include 'conexion.php';
    
    $nombreProducto = $_POST['nombreProducto'];

    $query = "DELETE FROM producto WHERE nombreProducto = '$nombreProducto'";

    $ejecutar = mysqli_query($con, $query);

    if($ejecutar)
    {
        echo'
        <script>
            alert("Producto eliminado exitosamente");
            window.location="eliminarProducto.html"
        </script>
        ';
    }
?>