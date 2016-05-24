<?php
//cargar la carpeta dompdf
header("Content-type: application/vnd.ms-excel");//necesario para las libreriras
header("Content-Disposition: attachment; filename=Reportes_puercos.xls");// ponngo el NOMBRE al archivo
	require('conexion_pdf.php');//llamo a la conexion a la db
echo "SIRVE";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LISTA DE USUARIOS</title>
</head>
<body>


<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
  <img src="/...fondo.jpg" width="100px" hight="100px">
    <td colspan="3" bgcolor="skyblue"><CENTER><strong>REPORTE </strong></CENTER></td>
  </tr>
<br>
<br>
<thead  bgcolor="red">

    
    <th><strong>Puerco</strong></th>
    <th><strong>Familia</strong></th>
    <th><strong>Total</strong></th>
   


</thead>

<?php
		('conexion_pdf.php');

$consulta="SELECT * FROM registros";
		
		$ejecutar_consulta=$conexion->query($consulta);

		while ($res=$ejecutar_consulta->fetch_assoc()) {

				$codigo=$res["Puerco"];
				$nombre=$res["Familia"];
				$Apellido=$res["Total"];
				
				
				

?>
<tr>
	
	<td><CENTER><?php echo $codigo; ?></center></td>
	<td><center><?php echo $nombre; ?></center></td>
	<td><center><?php echo $Apellido; ?></center></td>
	
	                
 </tr> 


  <?php
}
  ?>


</table>


</body>
</html>