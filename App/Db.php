<?php

namespace App;

use PDOException;

class Db
{
    public $conn;

    public function getConnection(){
        $this->conn = null;
        $config = (include 'config.php')['db'];
        try{
            $this->conn = new \PDO('mysql:host =' . $config['host'] . ';dbname=' . $config['dbname'],
                $config['user'], $config['password']);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}