<?php
include 'conexion.php';

$query = "SELECT * FROM producto";
$resultado = mysqli_query($con, $query);
 echo mysqli_connect_error();

if (mysqli_num_rows($resultado) > 0) {
    echo '<table>
            <thead>
                <tr>
                    <th>Nombre del Producto</th>
                    <th>Nombre del Vendedor</th>
                    <th>Precio</th>
                    <th>Contacto</th>
                    <th>Descripción</th>
                    <th>Cantidad</th>
                    <th>ID del Vendedor</th>
                </tr>
            </thead>
            <tbody>';

    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo '<tr>
                <td>' . $fila['nombreProducto'] . '</td>
                <td>' . $fila['nombreVendedor'] . '</td>
                <td>' . $fila['precio'] . '</td>
                <td>' . $fila['contacto'] . '</td>
                <td>' . $fila['descripcion'] . '</td>
                <td>' . $fila['cantidad'] . '</td>
                <td>' . $fila['idVendedor'] . '</td>
              </tr>';
    }

    echo '</tbody>
          </table>';
} else {
    echo 'No se encontraron datos.';
}

mysqli_close($con);
?>
