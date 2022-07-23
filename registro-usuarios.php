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
        <form autocomplete="off" action="registro.php" method="post" class="formulario" id="formulario">
            
        <!--Numero de cedula--> 
            <div class="formulario__grupo" id="grupo__cedula">
                    <label for="cedula" class="formulario__label">Numero de Cedula</label>
                <div class="formulario__grupo-input">
                    <input name="cedula" type="text" class="formulario__input"  placeholder="1745970417" required >
                    <i class="fa-solid fa-triangle-exclamation"></i>
                </div>
                    <p>mal escrito</p>
            </div>

        <!--Nombre--> 
            <div class="formulario__grupo" id="grupo__nombre">
                    <label for="nombre" class="formulario__label">Nombre</label>
                <div class="formulario__grupo-input">
                    <input name="nombre" type="text" class="formulario__input" placeholder="Pedro" required>
                    <i class="fa-solid fa-triangle-exclamation"></i>
                </div>
                    <p>mal escrito</p>
            </div>

        <!--Apellido--> 
            <div class="formulario__grupo" id="grupo__apellido">
                    <label for="apellido" class="formulario__label">Apellido</label>
                <div class="formulario__grupo-input">
                    <input name="apellido" type="text" class="formulario__input" placeholder="Llanos" required>
                    <i class="fa-solid fa-triangle-exclamation"></i>
                </div>
                    <p>mal escrito</p>
            </div>

        <!--Email--> 
            <div class="formulario__grupo" id="grupo__email">
                    <label for="email" class="formulario__label">Correo electronico</label>
                <div class="formulario__grupo-input">
                    <input name="email" type="email" class="formulario__input" placeholder="usuario@mail.com" required>
                    <i class="fa-solid fa-triangle-exclamation"></i>
                </div>
                    <p class="error">El correo debe tener la estructura @ aslkd</p>
            </div>

        <!--Telefono--> 
            <div class="formulario__grupo" id="grupo__telefono">
                    <label for="telefono" class="formulario__label">Numero de Telefono</label>
                <div class="formulario__grupo-input">
                    <input name="telefono" type="text" class="formulario__input" placeholder="0995786553" required>
                    <i class="fa-solid fa-triangle-exclamation"></i>
                </div>
                    <p>mal escrito</p>
            </div>

        <!--Contraseña--> 
            <div class="formulario__grupo" id="grupo__contraseña">
                    <label for="contraseña" class="formulario__label">Contraseña</label>
                <div class="formulario__grupo-input">
                    <input name="contraseña" type="password" class="formulario__input" placeholder="Ingrese una contraseña" required>
                    <i class="fa-solid fa-triangle-exclamation"></i>
                </div>
                <!--Repetir contraseña--> 
                <label for="contraseñax2" class="formulario__label"> </label>
                <div class="formulario__grupo-input">
                    <input name="contraseñax2" type="password" class="formulario__input" placeholder="Vuelva a escribir su contraseña" required>
                    <i class="fa-solid fa-triangle-exclamation"></i>
    
                </div>
                <p>mal escrito</p>
            </div>  
            <div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>

            <!--Boton para crear la cuenta-->
            <div class="formulario__grupo formulario__grupo-btn-enviar">
                <input class="formulario__btn" type="submit" value="Crear Cuenta">
                <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
            </div>
        
            <!--Links de redireccion-->
            <div>
                <a href="login.php">¿Ya tiene una cuenta? Inicie sesión aquí</a>
                <a href="index.php">INICIO</a>
            </div>
            
        </form>
</main>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>