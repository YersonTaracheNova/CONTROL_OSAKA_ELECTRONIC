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
$sql=  "UPDATE TABLA11 SET codigo='$codigo', descripcion='$descripcion', proveedor='$proveedor', 
disponible='$disponible', venta= '$venta', costo='$costo'
WHERE codigo = '$codigo'";    
$validar = mysqli_query($conn, $sql);

    if(!$validar)
    {
        echo "Error en la actualizcion del producto. <br><br><br>
         <a href='FRMACTUALIZAR.html'>Regresar</a>: " . mysqli_error($conn); 
    }		
    else
    {
        echo "Producto actualizado con exito<br><a href='FRMACTUALIZAR.html'>Regresar</a>";		
	} 
 mysqli_close($conn);
?>

