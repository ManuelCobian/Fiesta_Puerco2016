

<html>
<head>
	<title>Puerquitos Registrados</title>
	<center>
			<h1>Fiesta del Puerquito 2016</h1>
	</center>
	<br>
	<br>
	
		<meta charset="utf-8">
	
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" >
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/validar.js"></script>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link rel="stylesheet" type="text/css" href="css/regresar.css">


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
background:white;
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
</style>

</head>

	<body>
			<h1>EL Ganador ES el puerco </h1>

	</body>
<br>

	<table class="table table-bordered" >
	
<?php 
			
		function ganador(){

					
					$server="localhost";
					$user="root";
					$db="puerco2016";
					$password="";
					$conectar=new mysqli($server,$user,$password,$db)or die("no se pudo conectar");//conecta a la base de datos como un objeto
					$i=0;
					
					$conexion=$conectar;//toma el valor del objeto
						

					$consulta="SELECT * ,MAX(Total) FROM registros ";

					$ejecutar=$conexion->query($consulta);
					
					
					while ($registros=$ejecutar->fetch_assoc()) {

						foreach ($registros as $elementos=>$value) {
								# code...
							$total=+$value;
							}

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
							
							


						<?php 
							}
							return $total;
						}

				?>

				
				</center>

				</tbody></table>
				<div class="regresar">
					<p><a href="index.php">Regrasar a la pagina principal</a></p>

				</div>
</html>