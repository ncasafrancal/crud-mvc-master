<?php

class Database {

    public static function conectar() {
        $host = "localhost";
        $db = "senati";
        $port = 3308;
        $user = "root";
        $password = "1234";

        $conexion = new PDO("mysql:host=$host;dbname=$db;port=$port",
                    $user, $password);
        return $conexion;
    }

}

?>