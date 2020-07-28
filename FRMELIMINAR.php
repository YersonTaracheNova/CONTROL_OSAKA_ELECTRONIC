<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "bdunad11";

$codigo=$_POST['codigo'];
	$conn=mysqli_connect($servername, $username, $password, $dbname);
	if(!$conn){
		echo"Conexion fallida al servidor";
  }
	$sql = "DELETE FROM TABLA11 WHERE codigo=$codigo";
	if (mysqli_query($conn, $sql)) {
		echo "Producto eliminado con exito <br><a href='FRMELIMINAR.html'>Volver</a>";
  } 
  else
  {
    echo "Error. Verifique, no se ha podido eliminar el producto <br><a href='FRMELIMINAR.html'>Volver</a>: " 
    . mysqli_error($conn);		
	}
  mysqli_close($conn);
?>