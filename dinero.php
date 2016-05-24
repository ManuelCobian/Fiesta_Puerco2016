	<?php 
		function dinero(){

					
					include("conection.php");//conecta a la base de datos como un objeto
					
					
					$conexion=$conectar;//toma el valor del objeto
						

					$consulta="SELECT SUM(Total) FROM registros ";

					$ejecutar=$conexion->query($consulta);
					
					
					while ($registros=$ejecutar->fetch_assoc()) {

							foreach ($registros as $elementos=>$value) //va interactuando cada indice es la variable elementos y la variable value toma el valor de cada casilla del vector
							{
								# code...
							$total=+$value;
							}
							
							
								
							

					}
					return $total;
			}


	 ?>
	