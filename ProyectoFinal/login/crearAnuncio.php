<?php 


	require_once "conexion.php";
	require_once "scripts.php";

session_start();
	$galletica = $_COOKIE['empresa'];

	
	// $conexion=conexion();
	if (isset($_POST['submit'])) {
		$titulo=$_POST['titulo'];
        $descripcion=$_POST['descripcion'];
        
	
		if(buscaRepetido($titulo,$conexion)==1){
			
			?>
			<script type="text/javascript">
			alertify.confirm('Error al publicar el anuncio', 'El titulo introducido ya esta en uso', function(){ alertify.success('Ok') 
				location.replace("../indexEmpresa.php");
			}, function(){ alertify.error('Cancel')
				 location.replace("../indexEmpresa.php");
			}
			);
				</script>
			
			
			<?php
			
			
		}else{
	
		
		
			$sql = "INSERT into anuncios (titulo,descripcion,id_empresa) VALUES ( ?, ?, ?)";
			//Inserccion de campos en la base de datos
			
			$stmt = $conn->prepare($sql);
			$stmt -> bind_param('sss', $titulo, $descripcion, $galletica);
			$stmt -> execute();

			?>
			<script type="text/javascript">
			alertify.confirm('Anuncio publicado con éxito', 'Anuncio creado correctamente', function(){ alertify.success('Ok') 
				 location.replace("../indexEmpresa.php");
			}, function(){ alertify.error('Cancel')
				 location.replace("../indexEmpresa.php");
			}
			);
				</script>
			
			
			<?php
		}

	}

		function buscaRepetido($titulo,$conexion){
			$sql="SELECT * from anuncios 
				where titulo='$titulo'";
			$result=mysqli_query($conexion,$sql);

			if(mysqli_num_rows($result) > 0){
				return 1;
			}else{
				return 0;
			}
		}


 ?>