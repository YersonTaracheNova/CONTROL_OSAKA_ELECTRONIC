<?php
//conexion
date_default_timezone_set("America/Bogota");
$dbhost="localhost";
$dbuser="root";
$dbpass="12345678";
$dbname="bdunad11";
//Crear respaldo de  base de datos
$mysqldump='"C:\AppServ\MySQL\bin\mysqldump.exe"';
$backup_file = '"C:\AppServ\www\CONTROL_ OSAKA_ELECTRONIC\backups\"'.$dbname. "-" .date("Y-m-d-H-i-s"). ".sql";
system("$mysqldump --no-defaults -u $dbuser -p$dbpass $dbname > $backup_file");
echo "Respaldo realizado con exito. <br><br><br><a href='FRMBACKUP.html'>Regresar</a>"; 
?>