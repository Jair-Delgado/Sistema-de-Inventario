<?php
 
    #Conexion a la base de datos
     function conexion(){
        $host = "host=localhost";
        $port = "port=5432";
        $dbname = "dbname=inventario";
        $user = "user=postgres";
        $password = "password=1234";
        
        $db= pg_connect ("$host $port $dbname $user $password");
        
        return $db;   
    }
?>