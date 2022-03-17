<?php


class Database{


    public function __construct(){
        try{
            $this->mysql = $this->conectar();
            echo 'Conexión exitosa';
        } catch(PDOException $exepcion){

            echo 'Error de conexión' . $exepcion->getMessage();

        }            
    }

    function conectar(){

        // nombre del host, nombre de la database, username, password, charset utf-8.

        $hostname = 'localhost';
        $database = 'tienda';
        $username = 'root';
        $password = 'root';
        $charset = 'utf-8';
        
        $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ];
        $pdo = new pdo("mysql:host={$hostname};dbname={$database};charset{$charset}", $username, $password, $options);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }


}



?>