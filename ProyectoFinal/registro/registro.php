<?php 

	require_once "conexion.php";
	require_once "scripts.php";
	// $conexion=conexion();
	if (isset($_POST['submit'])) {
		$nombre=$_POST['nombre'];
        $apellidos=$_POST['apellidos'];
        $fecha_nacimiento=$_POST['fecha_nacimiento'];
		$password=$_POST['password'];
        $email=$_POST['email'];
        $telefono=$_POST['telefono'];
        $dni=$_POST['dni'];
        $juego=$_POST['id_juego'];

		if(buscaRepetido($email,$conexion)==1){
			
			?>
			<script type="text/javascript">
			alertify.confirm('Error al crear usuario', 'El email introducido ya esta en uso', function(){ alertify.success('Ok') 
				location.replace("formularioUsuario.php");
			}, function(){ alertify.error('Cancel')
				location.replace("../login/index.php");
			}
			);
				</script>
			
			
			<?php
			
			
		}else{
			//$sql="INSERT into usuario (nombre,apellidos,dni,email,password,telefono,fecha_nacimiento,id_juego)
			//	values ('$nombre','$apellidos','$dni','$email','$password','$telefono','$fecha_nacimiento','$juego')";
			//echo $result=mysqli_query($conexion,$sql);
		
		
		
			$sql = "INSERT into usuario (nombre,apellidos,password,dni,email,fecha_nacimiento,telefono,id_juego) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?)";
			//Inserccion de campos en la base de datos
			
			$stmt = $conn->prepare($sql);
			$stmt -> bind_param('ssssssss', $nombre, $apellidos, $password, $dni,$email, $fecha_nacimiento,$telefono,$juego);
			$stmt -> execute();

			?>
			<script type="text/javascript">
			alertify.confirm('Registro realizado con éxito', 'Usuario creado correctamente', function(){ alertify.success('Ok') 
				location.replace("../login/index.php");
			}, function(){ alertify.error('Cancel')
				location.replace("../login/index.php");
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