    <?php 
    //Modelo

    //Se definen las variables: El Host | El Usuario | La Clave | La BD
    $host = "localhost";
    $usuario = "root";
    $clave = "";
    $bd = "phpdesdecero";

    //"mysqli_connect" para establecer la conexion a la bd.
    $conexion = mysqli_connect($host, $usuario, $clave, $bd);





    //Si: (la conexión con mysql se realizó correctamente): imprimir x | SiNo: imprimir y
    /*if($conexion){
        echo "La conexion se realizó correctamente";
    }else{
        echo "La conexión no se pudo realizar";
    }*/
    ?>