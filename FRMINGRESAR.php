<?php
//Datos de ingreso//
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "bdunad11";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}   
	  $codigo=$_POST['codigo'];
    $descripcion=$_POST['descripcion'];
    $proveedor=$_POST['proveedor'];
    $disponible=$_POST['disponible'];
    $venta=$_POST['venta'];
    $costo=$_POST['costo'];
	
$sql="INSERT INTO TABLA11( codigo, descripcion, proveedor, disponible, costo, venta)
                VALUES('$codigo','$descripcion', '$proveedor','$disponible', '$costo', '$venta')";	

$Validar=mysqli_query($conn, $sql);
if(!$Validar){	
		echo"Error en el ingreso de datos <br><br><br> <a href='FRMINGRESAR.html'><b>Regresar</b></a>";
    }
else
{   
  echo "Datos almacenados correctamente <br><br><br> <a href='FRMINGRESAR.html'><b>Regresar</b></a>" ;
}    
    
        
  mysqli_close($conn);
?>