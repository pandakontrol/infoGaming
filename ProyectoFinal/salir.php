

<?php 

if (isset($_COOKIE ["empresa"])) {
	setcookie("empresa", '',time() - (86400 * 30), "/"); // 86400 = 1 day
	header("location:login/index.php");
}else{
    if (isset($_COOKIE ["usuario"])) {
       
		setcookie("usuario",'', time() - (86400 * 30), "/"); // 86400 = 1 day
		header("location:login/index.php");
    }else{
        
    }
}



 ?>