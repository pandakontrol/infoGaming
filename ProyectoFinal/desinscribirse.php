<?php
require_once "login/conexion.php";
require_once "scripts.php";
require_once "links.php";
$id_anuncio = $_POST['id_anuncio'];
$id_usuario = $_COOKIE ["usuario"];
		

$desinscribir = "DELETE FROM relacion_anuncios_usuario WHERE id_anuncio = '$id_anuncio' AND id_usuario='$id_usuario'";

mysqli_query($conexion,$desinscribir);


?>
		<script type="text/javascript">
			alertify.confirm('Te has borrado correctamente', 'Desinscripcion realizada', function(){ alertify.success('Ok') 
				location.replace("anunciosUsuario.php");
			}, function(){ alertify.error('Cancel')
				location.replace("anunciosUsuario.php");
			}
			);
				</script>

