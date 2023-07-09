<?php 

session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario)){
    header("location: login.php");
}

echo"<h1> Bienvenido $usuario </h1>";

echo "<a href='logica/salir.php'>EXIT</a>";


?>