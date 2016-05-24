<?php
$server="localhost";
$user="root";
$db="puerco2016";
$password="1234";
$conectar=new mysqli($server,$user,$password,$db)or die("no se pudo conectar");
	$conexion=$conectar;//toma el valor del objeto
?>