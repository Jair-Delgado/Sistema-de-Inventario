<?php namespace Models;
 
 class Conectar 
 {
     public static $db;
     
    //Conexion a la base de datos
    public static function conexion()
    {
        $host = "host=localhost";
        $port = "port=5432";
        $dbname = "dbname=inventario";
        $user = "user=postgres";
        $password = "password=1234";

        // Revisar si la conexion se realizó {or die: En caso de error}
        self::$db = pg_connect ("$host $port $dbname $user $password")
       or die ("La Base de datos no ha sido conectada" . pg_last_error());
        
        return self::$db;   

        
       /*if(self::$db){
            echo "exito";
        }else {
            echo "no se conecto la base de datos" . pg_last_error();
        }*/
        
        
    }
    
}

//$conectar = new Conectar();
Conectar::conexion();