<?php
$servername = "localhost";
$username = "root";
$password = "12345678";


$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
$sql = "CREATE DATABASE bdunad11";
if (mysqli_query($conn, $sql))
{
    echo "Base de datos creada con exito";    
} else
{
        echo "Error creando base de datos: <br><a href='FRMCREARBD.html'><B>Regresar<B></a> " . mysqli_error($conn);
}
mysqli_close($conn);
?> 