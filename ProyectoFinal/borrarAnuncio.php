
<?php
require_once "login/conexion.php";
require_once "scripts.php";
require_once "links.php";
$id_anuncio=$_POST['id_anuncio'];

$borrar = "DELETE FROM anuncios WHERE id_anuncio = '$id_anuncio'";

mysqli_query($conexion,$borrar);



?>
		<script type="text/javascript">
			alertify.confirm('Anuncio borrado con éxito', 'Anuncio borrado correctamente', function(){ alertify.success('Ok') 
				location.replace("anunciosEmpresa.php");
			}, function(){ alertify.error('Cancel')
				location.replace("anunciosEmpresa.php");
			}
			);
				</script>