<?php 

	require_once "login/conexion.php";
	require_once "scripts.php";
	// $conexion=conexion();
	if (isset($_POST['submit'])) {
        $id_usuario = $_COOKIE['usuario'];
        $consss = "SELECT * from usuario where id_usuario = '$id_usuario'";
        $nombreUsuario=mysqli_query($conexion,$consss);
        $datoUsuario = mysqli_fetch_array($nombreUsuario);
        $id_usuario = $datoUsuario['id_usuario'];
        
        
        $nombre=$_POST['nombre'];
        $apellidos=$_POST['apellidos'];
        $fecha_nacimiento=$_POST['fecha_nacimiento'];
		$password=$_POST['password'];
        $email=$_POST['email'];
        $telefono=$_POST['telefono'];
        $dni=$_POST['dni'];
        $id_juego=$_POST['id_juego'];
        
		if(buscaRepetido($email,$conexion)==1 && $email!=$datoUsuario['email']){
			
			?>
			<script type="text/javascript">
			alertify.confirm('Error al editar usuario', 'El email introducido ya esta en uso', function(){ alertify.success('Ok') 
				location.replace("formularioUsuario.php");
			}, function(){ alertify.error('Cancel')
				location.replace("formularioUsuario.php");
			}
			);
				</script>
			
			
			<?php
			
			
		}else{

		
		     
            $editar = "UPDATE usuario set nombre='$nombre', apellidos='$apellidos', password='$password', dni='$dni', email='$email', fecha_nacimiento = '$fecha_nacimiento' ,telefono ='$telefono', id_juego='$id_juego' WHERE id_usuario='$id_usuario'";

            mysqli_query($conexion,$editar);

			?>
			<script type="text/javascript">
			alertify.confirm('Modificación realizada con éxito', 'Usuario editado correctamente', function(){ alertify.success('Ok') 
				location.replace("indexUsuario.php");
			}, function(){ alertify.error('Cancel')
				location.replace("indexUsuario.php");
			}
			);
				</script>
			
			
			<?php
		}

	}

		function buscaRepetido($email,$conexion){
			$sql="SELECT * from usuario 
				where email='$email'";
			$result=mysqli_query($conexion,$sql);

			if(mysqli_num_rows($result) > 0){
				return 1;
			}else{
				return 0;
			}
		}


 ?>