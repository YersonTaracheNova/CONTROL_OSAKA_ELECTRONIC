<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "bdunad11";
	$conn=mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		echo"Conexion fallida al servidor";
  }  
  $codigo=$_POST['codigo'];
  $descripcion=$_POST['descripcion'];
  $proveedor=$_POST['proveedor'];
  $disponible=$_POST['disponible'];
  $venta=$_POST['venta'];
  $costo=$_POST['costo'];
	$sql="SELECT codigo, descripcion, proveedor, disponible, costo, venta FROM TABLA11 WHERE codigo=$codigo";
  $validar = mysqli_query( $conn, $sql);  
  if (mysqli_num_rows($validar) > 0)
  {
    while($row = mysqli_fetch_assoc($validar)){      
      echo "Codigo del producto:  " .$row['codigo']. "<br>";
      echo "Descripcion del pruducto del producto:  " .$row['descripcion']. "<br>";
      echo "Proveedor:  " .$row['proveedor']. "<br>";
      echo "Disponibilidad del producto:" .$row['disponible']. "<br>";
      echo "Valor del costo:  " .$row['costo']. "<br>";
      echo "Valor de venta al publico:  " .$row['venta']. "<br>";
      echo " Consulta exitosa. <a href='FRMCONSULTAR.html'>Regresar</a>";        
    }
  } 
  else{
    echo "Ingrese  un codigo para realizar la consulta. <br><br><br>  <a href='FRMCONSULTAR.html'>Regresar</a> ";
  }
  mysqli_close($conectar);
?>