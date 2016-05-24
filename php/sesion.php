<?php 
session_start();

//evualuo que la session continue verificando una de las variables creadas
//en control.php cuando esta ya no coincida con su valor inicial se redirije 
//al archivo salir.php

if (!$_SESSION["autentificado"]) {
	# code...
	header("location:salir.php");
}


 ?>