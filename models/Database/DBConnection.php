<?php
class DBConnection
{
    public $username = "root", $password = "";
    public function connect()
    {
        try {
            $conn = new PDO("mysql:dbname=newclub;host=localhost", $this->username, $this->password);
            return $conn;
        } catch (Exception $e) {
            die($e);
        }
    }
}
