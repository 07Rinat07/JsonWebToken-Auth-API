<?php

// Используем для подключения к базе данных MySQL
class Database
{
    // Учётные данные базы данных
    private $host = "127.0.0.1";
    private $db_name = "jwt-auth-api";
    private $username = "root";
    private $password = "";
    public $conn;

    // Получаем соединение с базой данных
    public function getConnection()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        } catch (PDOException $exception) {
            echo "Ошибка соединения с БД: " . $exception->getMessage();
        }

        return $this->conn;
    }
}