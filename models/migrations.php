<?php

$base_dir = __DIR__ . "/../";

require($base_dir . "vendor/autoload.php");

class migrations
{
    public $conn, $username = "root", $password = "";
    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=localhost", $this->username, $this->password);
        } catch (Exception $e) {
            die($e);
        }
    }
    public function migrate()
    {
        $sql = "CREATE DATABASE IF NOT EXISTS newclub;
                USE newclub;
                CREATE TABLE users(
                    `id` INT NOT NULL PRIMARY KEY,
                    `username` VARCHAR(255) NOT NULL,
                    `email` VARCHAR(255) NOT NULL,
                    `password` VARCHAR(255) NOT NULL,
                    `created_at` VARCHAR(255) NOT NULL,
                    `updated_at` VARCHAR(255) NOT NULL,
                    `password_reset_token` VARCHAR(255) DEFAULT NULL UNIQUE,
                    `token_expires_at` DATETIME DEFAULT NULL
                );
                CREATE TABLE events(
                    `id` INT NOT NULL PRIMARY KEY,
                    `event_title` VARCHAR(255) NOT NULL,
                    `event_desc` VARCHAR(255) NOT NULL,
                    `event_posted_by` VARCHAR(255) NOT NULL,
                    `event_posted_at` DATETIME NOT NULL,
                    `event_updated_at` DATETIME NOT NULL,
                    `event_registered_total` INT DEFAULT 0
                );
        ";
        if ($this->conn->exec($sql)) {
            echo "migration completed successfully !!!";
        } else {
            echo "migration failed !!!";
        }
    }
    public function roll_back_migration()
    {
        $sql = "DROP DATABASE IF EXISTS newclub;";
        if ($this->conn->exec($sql)) {
            echo "migrations has been rolled back";
        } else {
            echo "migrations has not been rolled back!!";
        }
    }
}
$migrate = new migrations();
$migrate->migrate();
