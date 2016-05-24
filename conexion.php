<?php 
// realiza la conexion a la base de datos en objetos
function conectarse()
{
	$server="localhost";
	$user="root";
	$db="puerco2016";
	$password="1234";
	$conectar=new mysqli($server,$user,$password,$db)or die("no se pudo conectar");//conecta a la base de datos como un objeto

return $conectar;
}
$conexion=conectarse();//toma el valor del objeto

 ?>