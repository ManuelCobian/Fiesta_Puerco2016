<html>
<head>
	<title>Fiesta del Puerquito 2016 </title>
	<center>
			
	</center>
	<a href="login.php"target="_blank" CLASS="admin">ADMINISTRADORES</a>
	<br>
	<br>
	
		<meta charset="utf-8">
	
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" >
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/validar.js"></script>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	

		<style type="text/css">



th{
	border:auto solid #CCD507;
	margin-right:auto;
	margin-left:auto;
	background:#D0E839;
	text-align:center;


}

.decorador{
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
.id{
	text-align:center;
}
.boton{
	background:#D0E839; 

}
button{
padding-right:auto;
}
.admin{
	font-size:auto;
	text-decoration:none;
	color:white;
	list-style:none;

}
.admin:hover{
	background:red;
	text-decoration:none;
}
tbody:hover{
	background:red;

}
h1{
	font-size:40px;
}
</style>

</head>

<body>

	
		
	



	</header>
	<body>
	
	

  
 <div class="raw "  >
		 <div class="col-sm- col-md-  col-md- col-xt">

		<div class="decorador">
				
				
				<div class="fondo">

		<center>
			<h1>Puerquitos Registrados</h1>
<br>
<br>
		</center>
				<table class="table table-bordered" >

				<?php 

				//selecionar 
					include("conexion.php");



				$consulta="SELECT * FROM registros ";//SELECIONA DE LA TABLE PAIS ORDENAR POR PAIS DESENDENTE

				$ejecutar_consulta=$conexion->query($consulta);

				while ($registros=$ejecutar_consulta->fetch_assoc()) {
					
				 ?>
 <thead>
				
					
						<th class="matar"></th>
     
					<th><center>Puerco</center></th>
					
						
					<th><center>Familia</center></th>
				
							
					<th><center>Total</center></th>
							
					
								
								
				</thead>
				
				<tbody id="table">

					

							
							

					<td>
							<center>
								<p><?php echo $registros["Puerco"]; ?></p></td>

							</center>
							<td>



							<center>
								<p><?php echo $registros["Familia"]; ?></p></td>

							</center>
							<td>



							<center>
								<p><?php echo $registros["Total"]; ?></p></td>

							</center>
							
							


						<?php 
							}
							?>

				
				</tbody></table>
			<br><br>
			<br>
<div class="ok">

		<form name="formulario" action="buscar.php" method="post"  onsubmit="return validar();">
		<label for="buscar" class="oculto">RESULTADOS</label>
		<input type="text" maxlenght="30" autofocus requerid placeholder=" ingrese numero de puerco" class="boton" name="puerco">
		<input type="submit" value="buscar" class="btn btn-success dropdown-toggle">

		</form>
		<form name="formularios" action="ganadores.php" method="post"  onsubmit="return ganador();">
		
		
		</form>
		
</div>
		<div class="total">
			
			<p>Total De Donativos Registrados </p>
			<?php include("dinero.php"); ?>
			<p><?php echo dinero(); ?></p>
			

		</div>
		<div class="puerco">
			<?php include("puercos.php"); ?>
			<p>PUERCOS REGISTRADOS</p>
			<p><?php echo sumar(); ?></p>
		</div>	

<br>
<br>
<br>
<br>


		
<br>
<br>
		<img src="gracias.jpg" width="auto" class="img-circle" alt="12">
		<br>
<br>	

		<div class=" raw ventana">
		<footer>
		<p>Se les agradece a todas las personas que estuvieron apoyando por esta causa el comedor VENTANA DE ESPERANZA IAPS
		y su patronato se le agradece su apoyo
		</p>
		<p>Contactanos</p>
		<p>Correo ventanadeesperanza@hotmail.com</p>
		<a href="https://www.facebook.com/ventanade.esperanza.9?fref=ts "target="_blank"><i class="icon-social fa fa-facebook-official fa-5x " id="face"></i>
					</a>
		</footer>

</div>
</html>