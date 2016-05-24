<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<meta name="viewport" content="width=device.width, initial-scale=1.0">
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="/css/custom.css">
	<link rel="stylesheet" type="text/css" href="csslog.css">
<link rel="stylesheet" type="text/css" href="styles.css">
<SCRIPT TYPE="text/javascript" src="jquery.js"></SCRIPT>

	<title>Administracion</title>
</head>
<body>
	<header>
		<center>
			<h1>Administracion Del Sistema</h1>

			<br>

		</center>
		
	</header>

   <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="/css/custom.css">
		
		
    <div class="container" style="margin-top:40px">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<center>
									<strong> Inicio de Seccion</strong>
						</center>
					
					</div>
					<div class="panel-body">
						<form role="form" action="php/control.php" method="POST"onsubmit="return validar();">

			<?php 
			error_reporting(E_ALL ^ E_NOTICE);//SOLAMENTE MENSAJE DE ERROR DE MI APLICACION
			if ($_GET["error"]=="si") {//por si la informacion es incorrecta
			//no entra
				echo "<span> verifica tus datos</span>";
			}
			else{
			echo "<span>introduce tus datos";//si es vasio introduce 
				//informacion
			}
		 ?>
							<fieldset>
								<div class="row">
									<div class="center-block">
										<center>
														<img class="profile-img"
											src="user.png" width="100px">

										</center>
										<br>
										<br>
																			</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-10  col-md-offset-1 ">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-user"></i>
												</span> 
									<input class="form-control" placeholder="Nombre de Usuario" id="user" type="text" name="nombre_txt" autofocus required>

											</div>
											<br>
												
										</div>
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-lock"></i>
												</span>
									<input class="form-control" placeholder="Contraseña" name="password_txt" type="password" id="pw" required>
											</div>
										</div>
										<br>
										<div class="form-group">
											<input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign in">

										</div>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
					
					<!--<div class="panel-footer ">
						No te has registrado? <a href="indice1.html" onClick=""> Hazlo Aqui! </a>
					</div>-->
                </div>
			</div>
		</div>

		</body>
</html>