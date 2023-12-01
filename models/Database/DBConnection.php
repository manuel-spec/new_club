<?php
class DBConnection
{
    public $username = "root", $password = "";
    public function __construct()
    {
        try {
            $conn = new PDO("mysql:dbname=newclub;host=localhost", $this->username, $this->password);
            if ($conn) {
                echo "Connection has been established";
            } else {
                echo "0";
            }
        } catch (Exception $e) {
            die($e);
        }
    }
}

$u = new DBConnection();
