<?php /* -------------- Para el hosting necesitas cambiar la base de datos*/

		require_once("dompdf/dompdf_config.inc.php");
		require('conexion_pdf.php');
		


$codigoHTML='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Reporte de Puerquitos Registrados</title>
<img src="fondo.jpg" width="100px" hight="100px">
<h1>Lista de Pueercos Registrados  </h1>

<style type="text/css">
	
h1{
	font-style:30px;
	border:1px solid white;
	text-align:center;
	padding:20px;
	background:#CCD507;
	margin-left:30px;
	margin-right:30px;
}
	body{
	text-align:center;
	border:1px solid white;
	padding:auto;
	margin-right:auto;
	background:url("fondo.jpg"); 
	background-repeat:no-repeat;
	background-position:center; 
	background-attachment:fixed;
	margin-left:auto;

	padding-top:auto;
	margin-top:auto;
	margin-bottom:auto;

	}
td{
	font-size:25px;
	background:white;
	color:black;
}
.total{

font-size:20px;

margin-top:auto;
border:1px solid white;
background:aqua;
padding:5px;
margin-right:50px;
margin-left:50px;



}
</style>

</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  
  <tr bgcolor="#D0E839">
    <td><strong>Puerco</strong></td>
    <td><strong>Familia</strong></td>
    <td><strong>Total</strong></td>
    
  </tr>';
  


$consulta="SELECT * FROM registros ";//SELECIONA DE LA TABLE PAIS ORDENAR POR PAIS DESENDENTE

$ejecutar_consulta=$conexion->query($consulta);

while ($registros=$ejecutar_consulta->fetch_assoc()) {
$codigoHTML.='	
	<tr>
		<td>'.$registros['Puerco'].'</td>
		<td>'.$registros['Familia'].'</td>
		<td>'.$registros['Total'].'</td>
											
	</tr>';
	
}
$codigoHTML.='
</table>



<p class="total">total de dinero recaudado'.'   '. dinero().'</p>


<p class="total">total de Puercos registrados'.'   '. sumar().'</p>
<p class="total">Puerco ganador'.'   '. ganador().'</p>
</body>
</html>';


$codigoHTML=utf8_encode($codigoHTML);
$dompdf=new DOMPDF();
$dompdf->load_html($codigoHTML);
ini_set("memory_limit","128M");
$dompdf->render();
$dompdf->stream("Reporte_puerquitos_Registrados.pdf");





		function dinero(){

					
					include("conection.php");
					$i=0;
					
					$conexion=$conectar;//toma el valor del objeto
						

					$consulta="SELECT SUM(Total) FROM registros ";

					$ejecutar=$conexion->query($consulta);
					
					
					while ($registros=$ejecutar->fetch_assoc()) {

							foreach ($registros as $elementos=>$value) {
								# code...
							$total=+$value;
							}
							
							
								
							

					}
					return $total;
			}


			function sumar(){
					include("conection.php");//conecta a la base de datos como un objeto

			$total=0;
			$conexion=$conectar;;//toma el valor del objeto
				

		$consulta="SELECT count(Total) FROM registros ";

			$ejecutar=$conexion->query($consulta);
			$num_regs=$ejecutar->num_rows;

			while ($registros=$ejecutar->fetch_assoc()) {

							
							foreach ($registros as $elementos=>$value) {
								# code...
							$total=+$value;
						}
							
							
								
							

					}
					return $total;
			}




			function ganador(){
					include("conection.php");//conecta a la base de datos como un objeto

			$total=0;
			$conexion=$conectar;;//toma el valor del objeto
				

		$consulta="SELECT Puerco,Familia , max(Total) FROM registros ";

			$ejecutar=$conexion->query($consulta);
			$num_regs=$ejecutar->num_rows;

			while ($registros=$ejecutar->fetch_assoc()) {

							
							foreach ($registros as $elementos=>$value) {
								# code...
							$total=+$value;
						}
							
							
								
							

					}
					return $total;
			}




	
?>