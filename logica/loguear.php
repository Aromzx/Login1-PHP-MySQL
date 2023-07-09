<?php
//Controlador
 
// "require" Se utiliza para incluir y ejecutar código de otros archivos en un archivo principal.
require 'conexion.php';

//"session_star" Para iniciar o reanudar una función.
session_start();

//Los valores de usuarios y clave se obtienen a traves de $_POST['usuario'] y $_POST['clave'].
$usuario = $_POST['usuario'];

$clave = $_POST['clave'];

/*1.Se establecerá una consulta utilizando los valores de "usuario" y "clave". Se buscará en la tabla "usuarios" si existe una combinación de
usuario y contraseña según los datos proporcionados*/

/*2.La consulta se ejecuta mediante "mysqli_query()" donde $conexión es la variable que tiene la conexión a la bd (establecida previamente mediante
require 'conexión.php' y $q es la consulta SQL construida anteriormente*/

/*3.El resultado de la consulta se almacena en el arreglo "$array" utilizando mysqli_fetch_array(), en este caso se utiliza "COUNT(*)"
en la consulta para obtener el numero de filas que coinciden en la combinación de usuario y contraseña proporcionada. El resultado se almacena en
"$array['']"*/

/*4.Se realiza una comprobación para verificar si $array[''] es mayor o igual que 0, lo que significa que se encontró una coincidencia en la bd.
Si es así, se establece una variable llamada "$_SESSION['']" con el valor de usuario proporcionado. Luego se dirige a la pagina
"paginaprincipal.php" utilizando "header()"*/

/*5.Si no se encuentra la coincidencia en la bd, se imprime "Datos incorrectos"*/
$q = "SELECT COUNT(*) as contar from usuarios where usuario = '$usuario' and clave ='$clave' ";
$consulta = mysqli_query($conexion, $q);
$array = mysqli_fetch_array($consulta);

if ($array['contar']>0){
    $_SESSION['username'] = $usuario;
    header("location: ../paginaprincipal.php");
}else{
    echo"Datos incorrectos";
}

?>