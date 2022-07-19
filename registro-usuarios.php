<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="estilos/estilo-registro.css">
    <link rel="icon" href="../img/inventario.png">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Oswald:wght@200;400&family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>
<!--Registro de nuevos usuarios-->
<body>
    <div class="caja-login">
        <!--imagen del login-->
        <img class="avatar" src="img/inventario.png" alt="logo inventario">
        <h1>Crear una nueva cuenta</h1>
        <form autocomplete="off" action="registro.php" method="post">

            <!--Numero de cedula--> 
            <label for="cedula">Numero de Cedula</label>
            <input name="cedula" type="number"  placeholder="Ingrese su número de cedula" required >
            <!--Nombre--> 
            <label for="nombre">Nombre</label>
            <input name="nombre" type="text" placeholder="Ingrese su nombre" required>

            <!--Apellido--> 
            <label for="apellido">Apellido</label>
            <input name="apellido" type="text" placeholder="Ingrese su apellido" required>

            <!--Usuario--> 
            <label for="email">Correo electronico</label>
            <input name="email" type="email" placeholder="Ingrese su correo electronico" required>
            <!--Telefono--> 
            <label for="telefono">Numero de Telefono</label>
            <input name="telefono" type="number" placeholder="Ingrese su numero de telefono" required>

            <!--Contraseña--> 
            <label for="contraseña">Contraseña</label>
            <input name="contraseña" type="password" placeholder="Ingrese una contraseña" required>

            <!--Repetir contraseña--> 
            <label for="contraseñax2"></label>
            <input name="contraseñax2" type="password" placeholder="Vuelva a escribir su contraseña" required>

            <!--Boton para crear la cuenta-->
                <input id="registro" type="submit" value="Crear Cuenta">
        
            <!--Links de redireccion-->
            <a href="login.php">¿Ya tiene una cuenta? Inicie sesión aquí</a>
            <a href="index.php">INICIO</a>
            
        </form>
    </div>
</body>
</html>