 <!DOCTYPE html>
 <html lang="en">
 <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="img/inventario.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Oswald:wght@200;400&family=Roboto:wght@100&display=swap" rel="stylesheet">
        <title>Sistema de Inventario</title>
 </head>
 <body>
       <div class="container">

      
       <!--Mensaje de Bienvenida al usuario--> 
       <div class="welcome-message">
              <div class="icono-usuario"> <i class="fa-solid fa-user"></i> </div>
              <?php
                     session_start();
                     $usuario=$_SESSION['nombre_usuario'];
                     echo "<h1>Bienvenido $usuario</h1>";     
              ?>

       </div>

       <nav class="navegacion">

       </nav>



        <h1>MENU INVENTARIO</h1> 
        <a href="index.php">Cerrar Sesion</a>
       </div>
 </body>
 </html>
 