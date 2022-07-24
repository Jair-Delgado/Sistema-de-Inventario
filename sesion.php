<?php

/***
 * VALIDACION DEL LOGIN
 */

require_once('Models/conexion-Postgresql.php');
session_start();

class Logueo 
{
    
     //Método para guardar la informacion del login
     
    public  function iniciarSesion() 
    {
        $correo =$_POST['email'];
        $clave=$_POST['pass'];
   
       //Consulta a la tabla empleados para validar el ingreso
       $query = "SELECT * FROM empleados WHERE email='$correo' AND contraseña= '$clave'";
       $consulta=pg_query(Models\Conectar::$db, $query);
       $cantidad= pg_num_rows($consulta);
       
       if($cantidad>0){
            //Si los datos de ingreso son correctos mensaje de bienvenida, sino muestra en pantalla Datos Incorrectos
           $_SESSION['nombre_usuario']=$correo;
           header('location: ingreso.php');
       }else{
           echo "Datos Incorrectos!";
       }
    }
}

//Objetos para llamar a los métodos
$logueo = new Logueo();
$logueo->iniciarSesion();