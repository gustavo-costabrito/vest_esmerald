<?php

class Database
{
    protected $db;

    public function __construct(string $host, string $dbName, string $dbUser, string $dbPassword)
    {
        try {
            $options = [
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            ];

            $this->db = new PDO("mysql:host=$host;dbname=$dbName", $dbUser, $dbPassword, $options);
        } catch (PDOException $e) {
            die('Erro: '. $e->getMessage());
        }
    }
}