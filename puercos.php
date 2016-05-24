<?php 

						
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