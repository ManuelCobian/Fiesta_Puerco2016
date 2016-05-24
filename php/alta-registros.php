<html>
<head>
	<title>Administracion</title>
	<link rel="stylesheet" type="text/css" href="page.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<meta charset="UTF-8">
		<meta name="viewport" content="width=device.width, initial-scale=1.0">
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="/css/custom.css">
	<link rel="stylesheet" type="text/css" href="csslog.css">
<link rel="stylesheet" type="text/css" href="styles.css">
<link rel="stylesheet" type="text/css" href="page.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/registro.js"></script>
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<style type="text/css">
		body{
	text-align:center;
	border:1px solid white;
	padding:auto;
	margin-right:auto;
	background:url('fondo.jpg'); 
	background-repeat:no-repeat;
	background-position:center; 
	background-attachment:fixed;
	margin-left:auto;

	padding-top:auto;
	margin-top:auto;
	margin-bottom:auto;

	}
	</style>	

		<center>

					<h1>Admistracion del sistema</h1>

				</center>

</head>
<br>
<br>

	<body>
		<header>
			
			<div class="col xs-8 col sm-8 col md-8 container pop" >
			<img src="user.png" width="40px">
				<a href="archivo-protegido.php">Cerrar Sesion</a>
				</div>
			</header>


	<div class="decorador">
	<center>
	
	<h1>Lista De Registros</h1>


	</center>
		<br>
<br>


</div>

<center>
<div >

<link rel="stylesheet" type="text/css" href="estilos/estilosAgregarUsuario.css">
		<center>
			<div class="ola">
		<form class="agregarUsuario" action="enviar.php"method="post" name="alta_frm">
			<h2>Registrar Puerquitos</h2>
		<br></br>
		
		

		
		<label for="user">Puerco</label><br><br>
	
		<input type="number" name="puerco" class="user" placeholder="Inserte correo" autofocus maxlength="50" requerid>
	

		<label for="text">Familia</label><br><br>
		<input type="text" name="familia" class="user" placeholder="Inserte correo" autofocus maxlength="50" requerid>
	
		<br></br>	

	<label>Total</label> <br><br>
	<input type="text" name="total" / placeholder="Inserte correo electronico"maxlength="50" >

	
	

	
	<input type="submit" value="Enviar este formulario" class="btn" onclick="mensaje();">
	</div>
	</form>
	</center>

		
				
			
	</body>
	
	</html>