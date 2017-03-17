<?php

include "conexion.php";
$Id=$_POST["ID"];
$sql="DELETE FROM servicios  WHERE Id_Servicios=$Id";
$result=mysqli_query($conn, $sql);

if($result){

echo "El registro fue eliminado correctamente";
}else{
echo "No se encontro ningun registro: ".mysqli_error();
}
mysqli_close($conn);
?>