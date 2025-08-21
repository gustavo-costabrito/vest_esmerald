<?php

class Database
{
    protected mixed $db;

    public function __construct(string $host, string $dbname, string $dbuser, string $dbpassword)
    {
        try {
            $this->db = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $dbpassword, [
                PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_ERRMODE
            ]);
        } catch (PDOException $e) {
            die("Erro: {$e->getMessage()}");
        }
    }
}