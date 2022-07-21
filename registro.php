<?php
session_start();
//Insercion de datos en la BDD
require_once('Models/conexion-Postgresql.php');
class Usuarios 
{
    public $datos;
    public static function insercionDatos()
    {

        #Datos del formulario de registro
        $cedula = $_POST["cedula"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];
        $contraseña = $_POST["contraseña"];
        
        #Ingreso de los datos del formulario a la tabla empleados
        $sql = "INSERT INTO empleados VALUES ('$cedula', '$nombre', '$apellido', '$email', '$telefono', '$contraseña')";
        pg_query(Models\Conectar::$db, $sql);
        $_SESSION['nombre_usuario']=$nombre;
        header("location: ingreso.php");
        
    }
    
}

$usuarios= new Usuarios();
$usuarios->insercionDatos();
