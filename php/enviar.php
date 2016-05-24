<?php 
include('conection.php');

$puerco=$_POST["puerco"];


$familia=$_POST["familia"];
$total=$_POST["total"];

$conexion=$conectar;;//toma el valor del objeto
		
$consulta=" INSERT INTO registros(Puerco,Familia,Total) Values('$puerco','$familia','$total') ";
		
$ejecutar=$conexion->query($consulta);
		
header("location:archivo-protegido.php");

		


 ?>