<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="../estilos/estilo-registro.css">
</head>
<body>
    <div class="caja-login">
        <!--imagen del login-->
        <img class="avatar" src="../img/inventario.png" alt="logo inventario">
        <h1>Crear una nueva cuenta</h1>
        <form action="../php/index.php" method="post">
           <!--Usuario--> 
           <label for="usuario">Correo electronico</label>
           <input name='usuario' type="text" placeholder="Ingrese su correo electronico" required>

           <!--Contraseña--> 
           <label for="contraseña">Contraseña</label>
           <input name='contrasenia' type="password" placeholder="Ingrese una contraseña" required>
           <label for="contraseña"></label>
           <input type="password" placeholder="Vuelva a escribir la contraseña" required>
           <input id='registro' type="submit" value="Crear Cuenta" onclick="reg()">

           <a href="../login.php">¿Ya tiene una cuenta? Inicie sesión aquí</a>
           
        </form>
    </div>
    <script type="text/javascript" src="../js/main.js"></script>
</body>
</html>