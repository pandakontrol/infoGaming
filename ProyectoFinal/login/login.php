<?php 


	require_once "conexion.php";
    require_once "scripts.php";
    // $conexion=conexion();
    error_reporting(0);
    

		$email=$_POST['email'];
		$password=$_POST['password'];

		    $sql="SELECT * from usuario where email='$email' and password='$password'";
        $result=mysqli_query($conexion,$sql);
        
        
        $sql2="SELECT * from empresas where email='$email' and password='$password'";
        $result2=mysqli_query($conexion,$sql2);
        
        $datoEmpresa = mysqli_fetch_array($result2);

        $datoUsuario = mysqli_fetch_array($result);

		if(mysqli_num_rows($result) > 0){
            
	        session_start();
            $_SESSION['user']=$email;
            
            $cookie_name2 = "usuario";
            $cookie_value2 = $datoUsuario['id_usuario'];
            setcookie($cookie_name2, $cookie_value2, time() + (86400 * 30), "/"); // 86400 = 1 day
            // include('../indexUsuario.php');

           
            ?>
              <script>
            location.replace("../indexUsuario.php");
          </script> 
            <?php
		}else{
            if(mysqli_num_rows($result2) > 0){
                
	            session_start();
                $_SESSION['user']=$email;
          
                $cookie_name = "empresa";
                $cookie_value = $datoEmpresa['id_empresa'];
                setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

                ?>
                <script>
                location.replace("../indexEmpresa.php");
              </script>
                <?php
            }else{
                ?>
                <script type="text/javascript">
                 alertify.alert("Email o contraseña incorrectos");
                </script>
                <?php
            include('index.php');
            }
            
        }
        

        
 ?>