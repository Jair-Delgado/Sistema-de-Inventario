<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/inventario.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Oswald:wght@200;400&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos/estilo-ingreso.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Sistema de Inventario</title>
</head>

<!--INGRESO DEL USUARIO LOGUEADO-->

<body>

    <!--Navegacion-->
    <header>
        <div class="interior">
            <a href="" class="logo" target="blank"><img src="img/inventario.png" alt="Logo"></a>
            <nav class="navegacion">
                <ul>

                    <li><a href="ingreso.php" target="blank"><i class=" shop fa-solid fa-house-user"></i>Inicio</a></li>
                    <li class="submenu">
                        <a href="#" target="blank"><i class=" shop fa-solid fa-id-card-clip" id="perfil"></i>Mi perfil</a>
                        <ul class="hijos">
                            <li><a href=""><i class="fa-solid fa-user-gear"></i>Ajustes</a></li>
                            <li><a href=""><i class="fa-solid fa-user-pen"></i>Editar perfil</a></li>

                            <li><a href="index.php"><i class="fa-solid fa-bed"></i>Cerrar Sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="bienvenida-usuario">
                <h1>SISTEMA DE INVENTARIO</h1>
            </div>
        </div>


        <div id="sidemenu" class="menu-collapsed">
            <!--Profile-->
            <div class="menu-items">
                <div class="items">
                <a href="#">
                    
                    <i class=" shop fa-solid fa-address-card"></i>
                        <!--Mensaje de Bienvenida al usuario-->
                        
                            <?php

                            require_once('Models/conexion-Postgresql.php');
                            session_start();
                            $data = $_SESSION['nombre_usuario'];
                            echo "<span>Bienvenido $data</span>";
                            ?>
                       
                    
                </a>
                </div>
            </div> 
            <!--Items-->

            <div class="menu-gestor">
                <div class="item-gestor">
                    <a href="Menu_inventario/gestor_productos.php">
                        <span>
                        <i class=" shop fa-solid fa-shop"></i>
                        Gestor de Productos
                        </span>
                    </a>

                </div>
            </div>
        </div>
    </header>
</body>
</html>