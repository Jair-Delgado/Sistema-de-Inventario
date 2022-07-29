<?php
 //VALIDACION DEL LOGIN
require_once('Models/conexion-Postgresql.php');
session_start();
class Logueo 
{      
    public static  $mensaje = "Las credenciales no coinciden";

    public static function mensajeError(){
        print self::$mensaje;
    }

     //Método para guardar la informacion del login
    public  function iniciarSesion() 
    {
        $correo =$_POST['email'];
        $clave=$_POST['contraseña'];
   
       //Consulta a la tabla empleados para validar el ingreso
       $query = "SELECT * FROM empleados WHERE email='$correo' AND contraseña= '$clave'";
       //Consulta el nombre del correo registrado 
       $usuario = "SELECT nombre_e FROM empleados WHERE email = '$correo'";
       $nombre_usuario = pg_query(Models\Conectar::$db, $usuario);
       $validacion = pg_query(Models\Conectar::$db, $query);
       //Si se encontró un registro nos devuelve una fila
       $registro = pg_num_rows($validacion);
       $consulta=pg_num_rows($nombre_usuario);

        /***
         * Si se encontró al menos un registro se va a extraer el nombre del usuario registrado
         * y se imprimirá cuando se inicie sesion dando un mensaje de Bienvenida, Si los datos 
         * del login no coinciden mostrará Datos incorrectos.
         */

        
       if($registro>0)
       {
            while ($data = pg_fetch_object($nombre_usuario)) 
            {
                 $_SESSION['nombre_usuario']= ucfirst ($data->nombre_e);
            }
                header('location: ingreso.php');
       }else
       {
            //header('location: login.php');
           Logueo::mensajeError();
       }

    }
}

//Objetos para llamar a los métodos
$logueo = new Logueo();
$logueo->iniciarSesion();

