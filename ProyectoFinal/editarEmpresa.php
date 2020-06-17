<?php

require_once "login/conexion.php";
require_once "scripts.php";
// $conexion=conexion();
if (isset($_POST['submit'])) {
	$id_empresa = $_COOKIE['empresa'];
	$consult = "SELECT * from empresas where id_empresa = '$id_empresa'";
	$nombreEmpresa = mysqli_query($conexion, $consult);
	$datoEmpresa = mysqli_fetch_array($nombreEmpresa);
	$id_empresa = $datoEmpresa['id_empresa'];


	$nombre = $_POST['nombre'];
	$cif = $_POST['cif'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$password = $_POST['password'];




	if (buscaRepetido($email, $conexion) == 1 && $email != $datoEmpresa['email']) {

?>
		<script type="text/javascript">
			alertify.confirm('Error al crear usuario', 'El email introducido ya esta en uso', function() {
				alertify.success('Ok')
				location.replace("indexEmpresa.php");
			}, function() {
				alertify.error('Cancel')
				location.replace("indexEmpresa");
			});
		</script>


	<?php


	} else {



		$editar = "UPDATE empresas set nombre='$nombre', cif='$cif', email='$email', password='$password', telefono ='$telefono' WHERE id_empresa='$id_empresa'";

		mysqli_query($conexion, $editar);

	?>
		<script type="text/javascript">
			alertify.confirm('Registro realizado con éxito', 'Usuario creado correctamente', function() {
				alertify.success('Ok')
				location.replace("indexEmpresa.php");
			}, function() {
				alertify.error('Cancel')
				location.replace("indexEmpresa.php");
			});
		</script>


<?php
	}
}

function buscaRepetido($email, $conexion)
{
	$sql = "SELECT * from empresas 
				where email='$email'";
	$result = mysqli_query($conexion, $sql);

	if (mysqli_num_rows($result) > 0) {
		return 1;
	} else {
		return 0;
	}
}


?>