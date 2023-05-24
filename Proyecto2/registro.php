<?php
    include 'conexion.php';
    
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $rol = $_POST['rol'];

    $query = "INSERT INTO registro(nombre, correo, usuario,contrasena,rol) 
                VALUES('$nombre','$correo','$usuario','$contrasena','$rol')";

    $ejecutar = mysqli_query($con, $query);

    if($ejecutar)
    {
        echo'
      <script>
              alert("Usuario almacenado exito");
              window.location="index.html"
      </script>
      ';
    }

?>