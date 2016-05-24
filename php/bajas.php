<?php 
	
	error_reporting(E_ALL ^  E_NOTICE);

		include("conection.php");
	

 	$registro=$_POST["borrar"];
	$bandera=false;
	
	 
	$conectar=new mysqli($server,$user,$password,$db)or die("no se pudo conectar");
	$conexion=$conectar;//toma el valor del objeto

if ($registro>0) 
{
	echo "<h1> el registro $registro fue eliminado</h1>";
	
	$consulta="DELETE FROM  registros WHERE id='$registro' ";

	$ejecutar=$conexion->query($consulta);
	$bandera=true;

	if ($bandera=true) {
		header("location:archivo-protegido.php");
	}
}
    	
 ?>