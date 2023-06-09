

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CLINICA ESMERALDA</title>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<script src="view/assets/js/login.js"></script>
	<link rel="stylesheet" href="assets/css/login.css"/>

  <!-- Favicons -->
  <link href="assets/img/hospital.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

</head>
<body>
	<?php
	include_once dirname(__FILE__) . '/../domain/sesion.php';

	$userSession = new Sesion();
	$userSession->closeSession();
	?>

	<!-- Modal de registro de pacientes -->
	<div class="modal fade" id="registroModal" tabindex="-1" role="dialog" aria-labelledby="registroModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header bg-primary text-white text-center">
					<h5 class="modal-title" id="registroModalLabel">Registro de Pacientes</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
					<div class="modal-body">
						<form enctype="multipart/form-data" class="row g-3 needs-validation" novalidate id="formRegistroPaciente" method="POST" action="business/pacienteaction.php">
							<div id="alertaRegistroPaciente" style="display: none;"></div>
							<div id="mensajeRegistroPaciente" style="display: none;"></div>

							<div class="form-group">
								<label for="nombrePaciente" class="form-label">Nombre</label>
								<input type="text" id="nombrePaciente" name="nombrePaciente" class="form-control" required pattern="^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$"/>
							</div>

							<div class="form-group">
								<label for="apellidoPaciente" class="form-label">Apellido</label>
								<input type="text" id="apellidoPaciente" name="apellidoPaciente" class="form-control" required pattern="^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$"/>
							</div>

							<div class="form-group">
								<label for="correo" class="form-label">Correo Electrónico</label>
								<input type="email" id="correo" name="correo" class="form-control" required />
							</div>

							<div class="form-group">
								<label for="telefono" class="form-label">Teléfono</label>
								<input type="text" id="telefono" name="telefono" required class="form-control" min="0" pattern="[0-9]+" />
							</div>

							<button type="submit" id="insertar" name="insertar" class="btn btn-primary btn-block">Registrar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="assets/img/hospital.png" class="hospital_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form onsubmit="return validar();" method="POST" action="index.php">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="nomUsuario" id="nomUsuario" class="form-control input_user" placeholder="Nombre de usuario" required="true">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input id="txtPassword" name="txtPassword" type="password" class="form-control" placeholder="Contraseña" required="true">
							<div class="input-group-append">
								<button id="show_password" class="btn btn-primary ojo-btn" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
							</div>
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Recordar acceso</label>
							</div>
						</div>
						<div class="d-flex justify-content-center mt-3 login_container">
							<input type="submit" class="btn login_btn" value="Acceder">
						</div>
					</form>
				</div>
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						<a href="#" class="ml-2" data-toggle="modal" data-target="#registroModal">Crear cuenta</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
	if (isset($_GET['error'])) {
		if ($_GET['error'] == "error") {
			?>
			<script>
				Swal.fire({
					title: '¡Usuario o contraseña incorrecta!',
					text: "Ingrese los datos correctos",
					icon: 'warning',
					showCancelButton: false,
					confirmButtonColor: '#c0392b',
					confirmButtonText: 'Volver a intentar'
				}).then((result) => {

				})
			</script>
			<?php
		}
	} else if (isset($_GET['act'])) {
		if ($_GET['act'] == "1") {
			?>
			<script>
				Swal.fire({
					title: 'Su cuenta se activó correctamente!',
					text: "Ingrese sus datos",
					icon: 'success',
					showCancelButton: false,
					confirmButtonColor: '#c0392b',
					confirmButtonText: 'Aceptar'
				}).then((result) => {

				})
			</script>
			<?php
		}
	} else if (isset($_GET['act'])) {
		if ($_GET['act'] == "0") {
			?>
			<script>
				Swal.fire({
					title: '¡Error!',
					text: "La cuenta ya fue activada o no existe",
					icon: 'error',
					showCancelButton: false,
					confirmButtonColor: '#c0392b',
					confirmButtonText: 'Aceptar'
				}).then((result) => {

				})
			</script>
			<?php
		}
	}
	?>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
