<?php
include "conexion.php";
$Id=$_POST["ID"];

$nom1=$_POST["Nom1"];
$dir1=$_POST["Dir1"];
$rfc1=$_POST["Rfc1"];
$tel1=$_POST["Tel1"];
$clasif1=$_POST["Clasifi1"];
$foto1=$_POST["Foto1"];
$lat1=$_POST["Lat1"];
$longit1=$_POST["Long1"];

$sql="UPDATE servicios VALUES '',Nombre_Servicio='$nom',Dirección='$dir',RFC='$rfc',Telefono='$tel',Clasificación='$clasif',Foto='$foto',Latitud='$lat',Longitud='$longit' WHERE Id_Servicios=$Id";
$reg=mysqli_query($conn,$sql);
if($reg){
echo "Nombre:".$nom1." Dirección:".$dir1." RFC:".$rfc1." Tel:".$tel1." Clasificación:".$clasif1." Foto:".$foto1." Latitud:".$lat1." Longitud:".$longit1;
}else{
echo "Error al actualizar los datos:".mysqli_error();	
}

mysqli_close($conn);