<center>

<h1>Editar informacion</h1>
</center>


<html>
<head>
	<title>Consultas</title>

</head>

<body>

		  	<html>
	
		<title>Alta de Usuario</title>

		<meta charset="utf-8">

	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" >
	<script type="text/javascript" src="jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<link rel="stylesheet" type="text/css" href="estilos.css">	
<style type="text/css">
body{
	background:#ccc;
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
form{

	margin-left:40px;

}
</style>
<SCRIPT TYPE="text/javascript" ></SCRIPT>

	
	<header>
		<center>
			<h1>Administración-edicion De Registros</h1>
<br>
		</center>

	</header>
	<body>

			<div class="decorador">
				<h1> REGISTROS</h1>
			<br>
			<br>
				
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
				
					
						<th class="matar">ID</th>

							
							<th><center>Puerco</center></th>				
							<th><center>Familia</center></th>
							<th><center>Total</center></th>
							<th>opciones</th>
					
								
								
				</thead>
				
				<tbody id="table">

					<td><center><p><?php echo $registros["id"]; ?></p></td></center>
					<td><center><p><?php echo $registros["Puerco"]; ?></p></td></td></center>
					<td><center><p><?php echo $registros["Familia"]; ?></p></td></td></center>
					<td><center><p><?php echo $registros["Total"]; ?></p></td></td></center>
					
					<td>
					<a href="baja-registros.php" target="_blank"><img src="borrar.gif"></a>
					<a href="cambios-registros.php" target="_blank"><img src="editar.jpg"></a>
					<a href="alta-registros.php" target="_blank"><img src="nuevo.jpg"></a>

					</td>
						<td></td>
					
					
							
								

							
								

							

							


						<?php 
							}
							?>

							</center>


						
					
				</tbody>
				
			
				
			</table>
			
<div class="ok">


</div>



<div >
<link rel="stylesheet" type="text/css" href="estilos/estilosAgregarUsuario.css">
		<center>
			<div class="ola">
		<form class="agregarUsuario" action="cambio.php"method="post" name="alta_frm">
			<h2>EDITAR REGISTROS</h2>
		<br></br>
		
		<label for="user">id</label><br><br>
	
		<input type="number" name="id" class="user" placeholder="Inserte correo" autofocus maxlength="50" requerid>

		
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

</html>

