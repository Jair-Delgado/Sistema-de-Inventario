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
        </div>
    </header>
            

               <!--Mensaje de Bienvenida al usuario--> 
                    <?php

                        require_once('Models/conexion-Postgresql.php');
                            session_start();
                            $data=$_SESSION['nombre_usuario'];
                            echo "<h1>Bienvenido $data</h1>";  

                    ?>
       <div class="con">

            <!--Caja gestor de productos-->
            <div class="contenedor">
                
                    <h2>GESTOR DE PRODUCTOS</h2>
                
    
                <main>
                    <a href="#">
                        <section>
                            <h2>Consultar stock</h2>
                        </section>
                    </a>
    
                    <a href="Menu_inventario/Registros_Inventario/registro-productos.php">
                        <section>
                            <h2>Registrar productos</h2>
                        </section>
                    </a>
    
                    <a href="#">
                        <section>
                            <h2>Registrar entrega del proveedor</h2>
                        </section>
                    </a>
                </main>
            </div>
            
            <!--Caja productos bajo stock-->
            <aside>
                <h3>Productos stock bajo</h3><hr><br><br>
                <table>
                    <tr>
                        <th>producto</th>
                        <th>stock</th>
                    </tr>
                    <tr>
                        <td>nombre</td>
                        <td>stock</td>
                    </tr>
                    <tr>
                        <td>nombre</td>
                        <td>stock</td>
                    </tr>
                    <tr>
                        <td>nombre</td>
                        <td>stock</td>
                    </tr>
                    <tr>
                        <td>nombre</td>
                        <td>stock</td>
                    </tr>

                </table>
              </aside>
              
       </div>  
    <script>
        /*
        function mostrarMenuPerfil()
        {
            document.getElementById('submenu').style.display = 'block';
        }
        let menuPerfil = document.getElementById("perfil");
        menuPerfil.onclick = mostrarMenuPerfil;*/
    </script>
 </body>
 </html>
 