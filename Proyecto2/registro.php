<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$rol = $_POST['rol'];



$query = "INSERT INTO registro(nombre, correo, usuario, contrasena, rol) 
VALUES('$nombre', '$correo', '$usuario', '$contrasena', '$rol')";

$verificarCorreo = mysqli_query($con,"SELECT * from registro WHERE correo='$correo'");

$verificarUsuario = mysqli_query($con,"SELECT * from registro WHERE usuario='$usuario'");


// con mysqli_num_rows verifica por filas que el correo que entra no sea igual a alguno en la base de datos

if(mysqli_num_rows($verificarCorreo)> 0 )
{
    echo '
    <script>
        alert("El correo ya se encuentra registrado en el sistema");
        window.location="index.html";
    </script>
    ';
    
}else if(mysqli_num_rows($verificarUsuario)> 0)
    {
        echo '
    <script>
        alert("El Usuario ya se encuentra registrado en el sistema");
        window.location="index.html";
    </script>
    ';
    }
else{
     
     $ejecutar = mysqli_query($con, $query);

    if ($ejecutar) {
        echo '
        <script>
            alert("Usuario almacenado exitosamente");
            window.location="index.html";
        </script>';
    } else {
        echo '
        <script>
            alert("Error al almacenar el usuario");
            window.location="index.html";
        </script>';
    }

}
   


mysqli_close($con);
?>