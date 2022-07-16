 <!DOCTYPE html>
 <html lang="en">
 <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
 </head>
 <body>
 <?php
        session_start();
        $usuario=$_SESSION['nombre_usuario'];
        echo "<h1>Bienvenido $usuario</h1>"; 
        
        
?>
        <h1>MENU INVENTARIO</h1>
 </body>
 </html>
 