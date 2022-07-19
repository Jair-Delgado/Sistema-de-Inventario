<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/estilo-login.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Oswald:wght@200;400&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <title>Sistema de Inventario</title>
</head>

<!--LOGIN-->
<body>
    <div class="caja-login">

        <!--Imagen del login-->

        <img class="avatar" src="img/inventario.png" alt="logo inventario">
        <h1>Bienvenido</h1>

        <form action="sesion.php" method="POST">

           <!--Usuario--> 

           <label for="usuario">Correo electrónico</label>
           <input id="usuario" name="user" type="text" placeholder="Ingrese su correo electrónico">

           <!--Contraseña--> 

           <label for="contraseña">Contraseña</label>
           <input id="contraseña" name="pass" type="password" placeholder="Ingrese su Contraseña">
           <input id="ejecutar" type="submit" value="Iniciar Sesion">

            <!--Redireccion para crear una cuenta nueva-->

           <a href="#">Olvide la contraseña</a>
           <a href="registro-usuarios.php">¿No tiene una cuenta? Registrese aquí</a>
           <a href="index.php">INICIO</a>
        </form>
    </div>
</body>
</html>