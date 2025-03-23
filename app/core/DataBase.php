<?php

class DataBase {
    private static $instance = null;
    private $pdo;

    public function  __construct(){
        $config = require_once __DIR__.'/../../config/database.php';

        try {
            $dsn = "mysql:host={$config['host']};dbname={$config['dbname']};chartset={$config['chartset']}";
            $this->pdo = new PDO($dsn, $config['username'], $config['password']);
            $this -> pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOExeption $e) {
            echo "Error en la conexion". $e -> getMessage();
            exit;
        }
    }

    public static function getInstance(){
        if (self::$instance === null) {
            self::$instance = new DataBase();
        }

        return self::$instance -> pdo;
    }

    private function __clone(){}
}