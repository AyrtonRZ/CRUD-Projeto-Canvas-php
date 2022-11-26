<?php
session_start();
$login = "admin";
$senha = "123";



if  (($_POST["login"]==$login) && ($_POST["senha"]==$senha)){
     $_SESSION["logou"] = 1;
      header("location: welcome.php");
}
else{
    $_SESSION["erro"] = 1;
    header("location: login.php");
}
