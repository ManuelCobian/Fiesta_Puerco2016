<html>
<head>
	<title>Consultas</title>
<h1>Listado de Registros</h1>
</head>

<body>

		  	<html>
	
		<title>Alta de Usuario</title>
	<head>
		<meta charset="utf-8">
	
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" >
	<script type="text/javascript" src="jquery.js"></script>

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

th{
	border:1px solid #CCD507;
	margin-right:10%;
	margin-left:10%;
	background:#D0E839;
	text-align:center;


}
.decorador{
text-align:center;
border:1px solid white;
padding:30px;
margin-right:15%;
background:white;
margin-left:15%;

padding-top:1px;
margin-top:6%;
margin-bottom:40%;

}
.id{
	text-align:center;
}
.boton{
	background:#D0E839; 

}
button{
padding-right:30px;
}
</style>

</head>

<SCRIPT TYPE="text/javascript" ></SCRIPT>

	
		<center>
			<h1>Administración-Lista De Registros</h1>
<br>
		</center>

	</header>
	<body>
	
	
 	
 
		<div class="decorador">
				
				
				<div class="fondo">
				<table class="table table-bordered" >

<?php 

//selecionar 
	include("conexion.php");



$consulta="SELECT * FROM registros ";//SELECIONA DE LA TABLE PAIS ORDENAR POR PAIS DESENDENTE

$ejecutar_consulta=$conexion->query($consulta);

while ($registros=$ejecutar_consulta->fetch_assoc()) {
	
 ?>
 <thead>
				
					<th><center>id</cente></th>
						<th class="matar"></th><th>
						<center>
					Puerco
						</center>
						</th>
						<th>
					<center>Familia</center>
							</th>
							<th><center>Total</center></th>
							<th><center>opciones</center></th>
					
								
								
				</thead>
				
				<tbody id="table">

					<td>
							<center>
								<p><?php echo $registros["id"]; ?></p></td>

							</center>
							<td>

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
							
							<td>



							<center>
								<a href="baja-registros.php"><img src="borrar.gif"></a>

							</td>

							</center>
							


						<?php 
							}
							?>

							</center>


						
					
				</tbody>
				
			
				
			</table>
<a href="reporte_pdf.php" class="btn btn-success dropdown-toggle" target="_blank">Generar PDF</a>
<a href="reporte_exe.php" class="btn btn-success dropdown-toggle" target="_blank">Generar Excel</a>

<div class="ok">


</div>
			

	</body>
	</html>

</html>