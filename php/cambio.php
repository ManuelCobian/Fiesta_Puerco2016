<?php 
	 include('conection.php');
	error_reporting(E_ALL ^  E_NOTICE );
 	
	
	
	$num=$_POST["id"];
	$puerco=$_POST["puerco"];
	$familia=$_POST["familia"];
	$total=$_POST["total"];
	
	
		$conexion=$conectar;;//toma el valor del objeto
	

	$consulta="UPDATE registros SET  Puerco='$puerco',Familia='$familia',Total='$total'WHERE id='$num' ";
		
	$ejecutar=$conexion->query($consulta);		
	
		
	header("location:archivo-protegido.php");
	
		
    	
 ?>