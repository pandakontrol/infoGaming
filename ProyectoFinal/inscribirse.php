<?php
require_once "login/conexion.php";
require_once "scripts.php";
require_once "links.php";
$id_anuncio = $_POST['id_anuncio'];
$id_usuario = $_COOKIE ["usuario"];
		
$inscribir = "INSERT into relacion_anuncios_usuario (id_anuncio,id_usuario) VALUES ( ?, ?)";
//Inserccion de campos en la base de datos

$stmt = $conn->prepare($inscribir);
$stmt -> bind_param('ss', $id_anuncio,$id_usuario);
$stmt -> execute();



?>
		<script type="text/javascript">
			alertify.confirm('Te has inscrito correctamente', 'Inscripcion realizada', function(){ alertify.success('Ok') 
				location.replace("indexUsuario.php");
			}, function(){ alertify.error('Cancel')
				location.replace("indexUsuario.php");
			}
			);
				</script>