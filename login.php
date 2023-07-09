<!--Esta será la Vista | La parte importante está en el formulario-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>


    <center><!--"action=" dirá donde se envían los datos , en este caso irán a "loguear.php" | El motodo será POST-->
        <form action="logica/loguear.php" method="POST">
                <input type="text" name="usuario" placeholder="Ingrese su usuario">
                <br><br>
                <input type="password" name="clave" placeholder="Ingrese su contraseña">
                <br><br>
                <button type="submit">Log In</button>
        </form>
    </center>
</body>
</html>