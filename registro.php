<?php session_start(); ?>
<html>
	<head>
		<title>Formulario de Registro</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>

	<body>
		<?php include "php/navbar.php"; ?>

		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2>Registro</h2>

					<form role="form" name="registro" action="php/registro.php" method="post">
					  <div class="form-group">
					    <label for="username">Nombre Completo</label>
					    <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
					  </div>
						
						<div class="form-group">
					    <label for="institucion">Institución</label>
					    <input type="text" class="form-control" id="institucion" name="institucion" placeholder="Institución">
					  </div>
						
						<div class="form-group">
					    <label for="email">Correo Electronico</label>
					    <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico">
					  </div>
						
						<div class="form-group">
							<label for="expo">Expo a la que desea asistir</label><br>
							<input type="radio" name="expo" value="1"> Vanesa Ibarra & Teresa Hernández <br>
  						<input type="radio" name="expo" value="2"> Aldahir Santos Luna <br>
  						<input type="radio" name="expo" value="3"> Fabián Remírez <br>
							<input type="radio" name="expo" value="4"> Verónica Rendón Fuentes <br>
  						<input type="radio" name="expo" value="5"> David Waldo Díaz <br>
  						<input type="radio" name="expo" value="6"> Juan Carlos Ayala Pérez <br>
  						<input type="radio" name="expo" value="7"> Edgar Manuel López Barrios <br>
							<input type="radio" name="expo" value="8"> Leopoldo Acosta <br>
  						<input type="radio" name="expo" value="9"> Jorge ... <br>
  						<input type="radio" name="expo" value="10"> PROLOGIS <br>
					  </div>
						
						<div class="form-group">
					    <label for="password">Contrase&ntilde;a</label>
					    <input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
					  </div>
						
						<div class="form-group">
					    <label for="confirm_password">Confirmar Contrase&ntilde;a</label>
					    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmar Contrase&ntilde;a">
						</div>
						
					  <button type="submit" class="btn btn-primary">Registrar</button>
					</form>

				</div>
			</div>
		</div>

		<script src="js/valida_registro.js"></script>
	</body>
</html>