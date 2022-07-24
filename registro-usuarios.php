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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<!--Registro de nuevos usuarios-->
<body>
    <main>
        <!--imagen del login-->
        <!---<img class="avatar" src="img/inventario.png" alt="logo inventario">-->
        <h1>Crear una nueva cuenta</h1>
        <form autocomplete="off" action="registro.php" method="POST" class="formulario" id="formulario">
            
        <!--Numero de cedula--> 
            <div class="formulario__grupo" id="grupo__cedula">
                    <label for="cedula" class="formulario__label">Número de Cedula</label>
                <div class="formulario__grupo-input">
                    <input name="cedula" type="text" class="formulario__input"  placeholder="1745970417" required >
                    <i class=" formulario__validacion-estado fa-solid fa-triangle-exclamation"></i>
                </div>
                    <p class="formulario__input-error">El número de cédula solo contine numeros y es de una extensión de 10 digitos </p>
            </div>

        <!--Nombre--> 
            <div class="formulario__grupo" id="grupo__nombre">
                    <label for="nombre" class="formulario__label">Nombre</label>
                <div class="formulario__grupo-input">
                    <input name="nombre" type="text" class="formulario__input" id="nombre" placeholder="Pedro" required>
                    <i class=" formulario__validacion-estado fa-solid fa-triangle-exclamation"></i>
                </div>
                    <p class="formulario__input-error">El nombre solo puede contener letras</p>
            </div>

        <!--Apellido--> 
            <div class="formulario__grupo" id="grupo__apellido">
                    <label for="apellido" class="formulario__label">Apellido</label>
                <div class="formulario__grupo-input">
                    <input name="apellido" type="text" class="formulario__input" id="nombre" placeholder="Llanos" required>
                    <i class=" formulario__validacion-estado fa-solid fa-triangle-exclamation"></i>
                </div>
                    <p class="formulario__input-error">El apellido solo puede contener letras</p>
            </div>

        <!--Email--> 
            <div class="formulario__grupo" id="grupo__email">
                    <label for="email" class="formulario__label">Correo electronico</label>
                <div class="formulario__grupo-input">
                    <input name="email" type="email" class="formulario__input" id="correo" placeholder="usuario@mail.com" required>
                    <i class=" formulario__validacion-estado fa-solid fa-triangle-exclamation"></i>
                </div>
                    <p class="formulario__input-error">El correo solo puede contener letras, números, puntos, guiones y guión bajo y tener la estructura usuario@correo.com</p>
            </div>

            
            <!--Contraseña--> 
            <div class="formulario__grupo" id="grupo__contraseña">
                <label for="contraseña" class="formulario__label">Contraseña</label>
                <div class="formulario__grupo-input">
                    <input name="contraseña" type="password" class="formulario__input" id="contraseña"  placeholder="Ingrese una contraseña" required>
                    <i class=" formulario__validacion-estado fa-solid fa-triangle-exclamation"></i>
                    
                    <p class="formulario__input-error">La contraseña debe ser de 5 a 10 dígitos</p>
                </div>
            </div>
            <!--Repetir contraseña--> 
            <div class="formulario__grupo" id="grupo__contraseñax2">
                <label for="contraseñax2" class="formulario__label">Vuelva a escribir su contraseña</label>
                <div class="formulario__grupo-input">
                    <input name="contraseñax2" type="password" class="formulario__input" id="contraseñax2" placeholder="" required>
                    <i class=" formulario__validacion-estado fa-solid fa-triangle-exclamation"></i>
                </div>
                <p class="formulario__input-error">Las contraseñas no coinciden</p>
            </div>  

            <!--Telefono--> 
                <div class="formulario__grupo" id="grupo__telefono">
                        <label for="telefono" class="formulario__label">Numero de Telefono</label>
                    <div class="formulario__grupo-input">
                        <input name="telefono" type="text" class="formulario__input" placeholder="0995786553" required>
                        <i class=" formulario__validacion-estado fa-solid fa-triangle-exclamation"></i>
                    </div>
                        <p class="formulario__input-error">El número de telefono debe ser de una extension de 10 numeros y no contener símbolos ni letras </p>
                </div>

            <!--<div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class=" formulario__validacion-estado fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>-->

            <!--Boton para crear la cuenta-->
            <!--<div class="formulario__grupo formulario__grupo-btn-enviar">
                <input class="formulario__btn" id="registro"   type="submit" value="Crear Cuenta">
                <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
            </div>-->

            <input id="registro" type="submit" value="Crear Cuenta">
        
            <!--Links de redireccion-->
           
                <a href="login.php"> <i class=" regresar fa-solid fa-clipboard-user"> Acceder con una cuenta</i></a>
                    <a href="index.php"><i class=" regresar fa-solid fa-tent-arrow-turn-left"> Volver al Inicio</i></a>
        </form>
</main>

    <script src="js/formulario.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>