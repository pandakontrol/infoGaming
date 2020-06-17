<?php

if (isset($_COOKIE ["empresa"])) {
    $id_empresa = $_COOKIE ["empresa"];
}else{
    if (isset($_COOKIE ["usuario"])) {
        $id_usuario = $_COOKIE ["usuario"];
    }else{
        header("location:login/index.php");
    }
}
?>


