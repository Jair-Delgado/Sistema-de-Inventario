<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/estilo-login.css">
    <title>Sistema de Inventario</title>
    
   
</head>
<body>
    <div class="caja-login">

        <!--imagen del login-->

        <img class="avatar" src="../Login/img/inventario.png" alt="logo inventario">
        <h1>Bienvenido</h1>

        <form action="sesion.php" method="POST">

           <!--Usuario--> 

           <label for="usuario">Correo electrónico</label>
           <input id="usuario" name="user" type="text" placeholder="Ingrese el correo electrónico">

           <!--Contraseña--> 

           <label for="contraseña">Contraseña</label>
           <input id="contraseña" name="pass" type="password" placeholder="Ingrese la Contraseña">
           <input id="ejecutar" type="submit" value="Iniciar Sesion">

            <!--Redireccion para crear una cuenta nueva-->

           <a href="#">Olvide la contraseña</a>
           <a href="./php/registro-usuarios.php">¿No tiene una cuenta? Registrese aquí</a>
        </form>

    </div>
    <script type="text/javascript" src="./js/main.js"></script>
</body>
</html>