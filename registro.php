<?php
//Insercion de datos en la BDD
include 'conexion-Postgresql.php';
#funcion de la conexion a Postgresql
$con = conexion();

#Datos del formulario de registro
$cedula = $_POST["cedula"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$contraseña = $_POST["contraseña"];

#Ingreso de los datos del formulario a la tabla empleados
$sql = "INSERT INTO empleados VALUES ('$cedula', '$nombre', '$apellido', '$email', '$telefono', '$contraseña')";
pg_query($con, $sql);
header("location: registro-usuarios.php");



/*class Datos_registro {
    

    public function Datos_registro()
    {

        if ($_POST) {
            $cedula = $_POST["cedula"];
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $email = $_POST["email"];
            $telefono = $_POST["telefono"];
            $contraseña = $_POST["contraseña"];
        } 

        require 'conexion-Postgresql.php';
        //$registro = new Conexion();
        $registro -> Conectar();
        

        $query = "INSERT INTO empleados VALUES ('$cedula', '$nombre', '$apellido', '$email', '$telefono', '$contraseña')";
        $registrando = pg_query($registro->Conectar(),$query);

    }
}

$empleado = new Datos_registro();
$empleado->Datos_registro();*/


?>