<?php

namespace App;
use PDO;
use PDOException;

class Database
{
    private string $host = "localhost";
    private string $db_name = "team_tasker";
    private string $username = "root";
    private string $password = "";

    private ?PDO $conn = null;

    public function getConnection(){
        if($this->conn === null){
            try{
                $dns = "mysql:host={$this->host};dbname={$this->db_name};charset=utf8mb4";
                $this->conn = new PDO($dns,$this->username, $this->password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
            }catch(PDOException $e){
                die("Chyba pripojenia k DB ". $e->getMessage());
            }
        }
        return $this->conn;
    }
}