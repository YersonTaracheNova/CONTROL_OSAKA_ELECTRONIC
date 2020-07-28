<?php
//Datos de ingreso//
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "bdunad11";
//conexxion
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
//crear tabla
$sql = "CREATE TABLE TABLA11 (    
    codigo INT(20) PRIMARY KEY,
    descripcion VARCHAR(60) NOT NULL,
    proveedor VARCHAR(60) NOT NULL,
    disponible INT(20) NOT NULL,
    costo INT(20) NOT NULL,
    venta INT(20) NOT NULL  
    )";
if (mysqli_query($conn, $sql))
{
    echo "Tabla creada con exito";    
} else
{
        echo "Error en la creacion de tablas: <br><br><br><a href='FRMCREARTABLA.html'><B>Regresar<B></a>". mysqli_error($conn);
}
mysqli_close($conn);
?> 
