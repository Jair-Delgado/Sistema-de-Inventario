<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/estilo-login.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Oswald:wght@200;400&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Sistema de Inventario</title>
</head>

<!--LOGIN-->
<body>
    <main>
        <!--Imagen del login-->
        <!--<img class="avatar" src="img/inventario.png" alt="logo inventario">-->
        <h1>Iniciar Sesion</h1>

        <form autocomplete="off" action="sesion.php" method="POST" class="formulario" id="formulario" >

            <!--Email--> 
            <div class="formulario__grupo" id="grupo__email">
                <label for="email" class="formulario__label">Ingrese su correo electrónico</label>
                <div>
                    <input id="usuario" name="email" type="email"  class="formulario__input" placeholder="usuario@correo.com">
                    <i class=" formulario__validacion-estado fa-solid fa-triangle-exclamation"></i>
                </div>
                <p class="formulario__input-error">El número de cédula solo contine numeros y es de una extensión de 10 digitos </p>
            </div>


           <!--Contraseña--> 
            <div class="formulario__grupo" id="grupo__contraseña" >
                <label for="contraseña" class="formulario__label">Ingrese su contraseña</label>
                <div class= "formulario__grupo-input">
                    <input id="contraseña" name="pass" type="password" placeholder="" class="formulario__input">
                    <i class=" formulario__validacion-estado fa-solid fa-triangle-exclamation"></i>
                </div>
                <p>Contraseña incorrecta</p>

            </div>

           <!--Boton para iniciar sesion-->
           <input id="ejecutar" type="submit" value="Iniciar Sesion">

            <!--Redireccion para crear una cuenta nueva-->

           
           <a href="#"> <i class=" regresar fa-solid fa-clipboard-user"> Olvide la clave</i></a>
           <a href="registro-usuarios.php"> <i class=" regresar fa-solid fa-clipboard-user"> Registrarse</i></a>
           <a href="index.php"><i class=" regresar fa-solid fa-tent-arrow-turn-left"> Volver al Inicio</i></a>
        </form>
</main>
<script src="js/formulario.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>