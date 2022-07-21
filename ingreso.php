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
        <title>Sistema de Inventario</title>
    </head>

<!--INGRESO DEL USUARIO LOGUEADO-->
 <body>
       <div class="container">
            <!--Navegacion-->
            <nav class="navegacion">
               <div class="icono-usuario"> <i class="fa-solid fa-user"></i> </div>
               <!--Mensaje de Bienvenida al usuario--> 
                    <?php
                            session_start();
                            $nombre=$_SESSION['nombre_usuario'];
                            echo "<h1>Bienvenido $nombre</h1>";    
                    ?>
              <h1>MENU INVENTARIO</h1> <a id="cerrar-sesion" href="index.php">Cerrar Sesion</a>
            </nav>
       </div>
       <div class="con">
            <!--Caja gestor de productos-->
            <div class="contenedor">
                <header>
                    <h2>GESTOR DE PRODUCTOS</h2>
                </header>
    
                <main>
                    <a href="#">
                        <section>
                            <h2>Consultar<br>stock<br>productos</h2>
                        </section>
                    </a>
    
                    <a href="#">
                        <section>
                            <h2>Realizar<br>pedido<br>a proveedor</h2>
                        </section>
                    </a>
    
                    <a href="#">
                        <section>
                            <h2>Registrar<br>entrega<br>del proveedor</h2>
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
 </body>
 </html>
 