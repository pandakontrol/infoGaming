<?php 
session_start();
	require_once "conexion.php";
	require_once "scripts.php";
	// $conexion=conexion();
	if (isset($_POST['submit'])) {
		$nombre=$_POST['nombre'];
        $cif=$_POST['cif'];
        $email=$_POST['email'];
		$password=$_POST['password'];
        $telefono=$_POST['telefono'];
    

		if(buscaRepetido($email,$conexion)==1){
			
			?>
			<script type="text/javascript">
			alertify.confirm('Error al crear una empresa', 'El email introducido ya esta en uso', function(){ alertify.success('Ok') 
				location.replace("formularioEmpresa.php");
			}, function(){ alertify.error('Cancel')
				location.replace("../login/index.php");
			}
			);
				</script>
			
			
			<?php
		}else{
		
			$sql = "INSERT into empresas (nombre,cif,email,password,telefono) VALUES ( ?, ?, ?, ?, ?)";
			//Inserccion de campos en la base de datos
			
			$stmt = $conn->prepare($sql);
			$stmt -> bind_param('sssss', $nombre, $cif, $email,$password,$telefono);
			$stmt -> execute();
			?>
			<script type="text/javascript">
			alertify.confirm('Registro realizado con éxito', 'Empresa creada correctamente', function(){ alertify.success('Ok') 
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
			$sql="SELECT * from empresas 
				where email='$email'";
			$result=mysqli_query($conexion,$sql);

			if(mysqli_num_rows($result) > 0){
				return 1;
			}else{
				return 0;
			}
		}


 ?>