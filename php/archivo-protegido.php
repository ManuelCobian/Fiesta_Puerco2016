<?php 
include("sesion.php");
?>


<?php 
error_reporting(E_ALL ^  E_NOTICE);//solo te pone los 
$op=$_GET["op"];//tomo lo que hay en la variable op

switch ($op) {
	case 'alta'://si op es igual a alta 
		$contenido="alta-registros.php";//lo mandas a la pagina
		$titulo="Alta de Registros";//muestras el titulo de  la pagina 
		break;
		case 'baja':
		$contenido="baja-registros.php";
		$titulo="Baja de Registros";
		break;
		
		case 'consultas':
		$contenido="consultas-registros.php";
		$titulo="Consultas de Registros";
		break;
		
		case 'cambios':
		$contenido="cambios-registros.php";
		$titulo="Cambios de  Registros";
		break;
	
	default:
		$contenido="home.php";
		$titulo="Panel de Control";
		break;
}
 ?>

<html>
<head>
	<title><?php echo $titulo; ?></title><!-- pone el titulo dependiendo del titulo de menu-->
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css"/>

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/contactos.js" >

	

	</script>
	<center>
		<h1>bievenido  </h1>
	</center>
	
</head>
<body>
		<section id="contenido">

	<NAV>
		
			<ul>
				<li class="cambio "><a href="archivo-protegido.php">home</a></li>
				<li class="cambio "><a href="?op=alta">Registrar Puerquitos</a></li><!--cuando seleciono le mando una variable para validar arrba-->
				<li class="cambio "><a href="?op=baja"> eliminar Puerco</a></li>
				<li class="cambio"><a href="?op=cambios">editar Puerco</a></li>
				<li class="cambio"><a href="?op=consultas">Consultar Puerquitos</a></li>
				<li><a href="salir.php">Salir</a></li>
			</ul>
			
			</NAV>
	
			
			<section id="principal">
					<?php 
						include("$contenido");
					 ?>

			</section>
		</section>
		
		
</body>
</html>