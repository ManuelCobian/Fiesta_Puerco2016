<?php 

//conrola si podra entrar a la sesion

	include("conexion.php");
	$nombre=$_POST["nombre_txt"];
	$contra=$_POST["password_txt"];

	$consulta="SELECT * FROM usuarios WHERE email='$_POST[nombre_txt]' and clave='$_POST[password_txt]'";//seleciono en la base de datos del campo email si hay un email igual al registro

	$ejecutar=$conexion->query(utf8_decode($consulta));
	$num_regs=$ejecutar->num_rows;
	//incio la sesion

	
	if ($num_regs>0) {
		session_start();
	$_SESSION["autentificado"]=true;
	$_SESSION["usuario"]=$ejecutar;
	header("location:archivo-protegido.php");
	
	}
	else
	{
		header("location:../index.php?error=si");
	}
		
 ?>