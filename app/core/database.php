<?php

class Database{
    protected $db;
    public function __construct(){
        try {
            $this->db = new PDO('mysql:host='.$_ENV['DB_HOST'].';dbname='.$_ENV['DB_NAME'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], [
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            ]);
        } catch (PDOException $e) {
            die('Erro: '.$e->getMessage());
        }
    }
}