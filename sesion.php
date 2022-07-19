<?php

//VALIDACION DEL LOGIN
require 'conexion-Postgresql.php';
session_start();

#Funcion de la conexion a Postgresql
$con = conexion();

#Datos del formulario de logueo
$correo = $_POST['user'];
$clave=$_POST['pass'];

#Consulta a la tabla empleados para validar el ingreso
$query = "SELECT * FROM empleados WHERE email='$correo' AND contraseña= '$clave'";
$consulta=pg_query($con, $query);
$cantidad= pg_num_rows($consulta);

if($cantidad>0){
    $_SESSION['nombre_usuario']=$correo;
    header('location: ingreso.php');
}else{
    echo "Datos Incorrectos!";
}


?>