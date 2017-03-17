<?php
/*$servidor="localhost";
$usuario="root";
$pwd="";
$BD="servicios_libres";
*/


$servidor="mysql.hostinger.mx";
$usuario="u612567239_user2";
$pwd="tecnologico";
$BD="u612567239_serv2"; 

$conn=mysqli_connect($servidor,$usuario,$pwd,$BD)or die("Error al conectarse a la base de datos".mysqli_error());
?>
