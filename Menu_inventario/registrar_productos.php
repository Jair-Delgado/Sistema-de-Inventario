<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="../estilos/estilo-productos.css">
    <link rel="icon" href="../img/inventario.png">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Oswald:wght@200;400&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<!--Registro de productos-->
<body>
    <main>
        <h1>Agregar Producto</h1>
        <form autocomplete="off" action="Registros_Inventario/registro-productos.php" method="POST" class="formulario" id="formulario">
            
        <!--Id del producto--> 
            <div class="formulario__grupo" id="grupo__id-producto">
                    <label for="id-producto" class="formulario__label">Id del producto</label>
                <div class="formulario__grupo-input">
                    <input name="id-producto" type="text" class="formulario__input"  placeholder="" required >
                    <i class=" formulario__validacion-estado fa-solid fa-triangle-exclamation"></i>
                </div>
                    <p class="formulario__input-error"> </p>
            </div>

        <!--Categoria--> 
            <div class="formulario__grupo" id="grupo__categoria">
                    <label for="categoria" class="formulario__label">Id categoría</label>
                <div class="formulario__grupo-input">
                    <input name="categoria" type="text" class="formulario__input" id="categoria" placeholder="" required>
                    <i class=" formulario__validacion-estado fa-solid fa-triangle-exclamation"></i>
                </div>
                    <p class="formulario__input-error"></p>
            </div>

        <!--Nombre del producto--> 
            <div class="formulario__grupo" id="grupo__nombre_prod">
                    <label for="nombre_prod" class="formulario__label">Nombre</label>
                <div class="formulario__grupo-input">
                    <input name="nombre_prod" type="text" class="formulario__input" id="nombre__prod" placeholder="" required>
                    <i class=" formulario__validacion-estado fa-solid fa-triangle-exclamation"></i>
                </div>
                    <p class="formulario__input-error"></p>
            </div>

        <!--Precio unitario--> 
            <div class="formulario__grupo" id="grupo__precio">
                    <label for="precio" class="formulario__label">Precio unitario</label>
                <div class="formulario__grupo-input">
                    <input name="precio" type="text" class="formulario__input" id="precio" placeholder="Ingrese el precio unitario" required>
                    <i class=" formulario__validacion-estado fa-solid fa-triangle-exclamation"></i>
                </div>
                    <p class="formulario__input-error"></p>
            </div>

            
        <!--Cantidad--> 
            <div class="formulario__grupo" id="grupo__cantidad">
                <label for="cantidad" class="formulario__label">Cantidad disponible</label>
                <div class="formulario__grupo-input">
                    <input name="cantidad" type="text" class="formulario__input" id="cantidad"  placeholder="Ingrese la cantidad disponible" required>
                    <i class=" formulario__validacion-estado fa-solid fa-triangle-exclamation"></i>
                </div>
                <p class="formulario__input-error"></p>
            </div>

            <input id="registro" type="submit" value="Agregar Producto">        
            <!--Links de redireccion-->
           
    
                <a href="../ingreso.php"><i class=" regresar fa-solid fa-tent-arrow-turn-left"> Regresar al gestor</i></a>
        </form>
</main>

    <script src="js/formulario.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>