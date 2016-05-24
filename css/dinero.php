	<?php 
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


	 ?>
	