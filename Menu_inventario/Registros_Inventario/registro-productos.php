<?php
session_start();
//Insercion de datos en la BDD
include ('../../Models/conexion-Postgresql.php');

class Productos 
{
    public $datos;
    public static function insercionProductos()
    {

        #Datos del formulario de registro
        $producto = $_POST["id-producto"];
        $categoria = $_POST["categoria"];
        $nom_prod = $_POST["nombre_prod"];
        $precio = $_POST["precio"];
        $cant_disp = $_POST["cantidad"];
        
        #Ingreso de los datos del formulario a la tabla productos
        $sql = "INSERT INTO productos (id_prod, id_cat, nombre_prod, precio_unitario, cant_disp) VALUES ('$producto', '$categoria', '$nom_prod', '$precio','$cant_disp')";
        pg_query(Models\Conectar::$db, $sql);
        //$_SESSION['nombre_usuario']=$nombre;
        header("location: ../registrar_productos.php");
        
        
    }
    
}

$usuarios= new Productos();
$usuarios->insercionProductos();


