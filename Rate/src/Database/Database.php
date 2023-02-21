<?php

class Database
{
    public $host = 'localhost';
    public $dbname = 'test';
    public $username = 'root';
    public $password = '';

    public $connection;

    public function __construct()
    {
        try {
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
