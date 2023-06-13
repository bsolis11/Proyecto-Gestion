<?php
session_start();

include 'conexion.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$validarLogin = mysqli_query($con, "SELECT rol, contrasena FROM registro WHERE correo = '$correo'");
$resultado = mysqli_fetch_assoc($validarLogin);

if ($resultado) {
    // Verificar la contraseña utilizando otro método si no está cifrada con password_hash()
    if ($contrasena === $resultado['contrasena']) {
        $_SESSION['usuario'] = $resultado;

        // Redirigir al usuario según su rol
        if ($resultado['rol'] == 1) {
            //Vendedor
            header('Location: Principal1.html');
        } elseif ($resultado['rol'] == 2) {
            //Comprador
            header('Location: Principal2.html');
        } else {
            // Rol desconocido
            echo "Rol desconocido.";
        }
    } else {
        // La contraseña es incorrecta
        echo "Contraseña incorrecta.";
    }
} else {
    // El correo no está registrado
    echo "El correo no está registrado.";
}

mysqli_close($con);
?>