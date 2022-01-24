<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

class DataBaseSystem
{
    var $server = "localhost";
    var $username = "root";
    var $password = "a123456";
    var $dbname = "db";
    var $connect;
    var $sql_error = "";

    function __construct()
    {
        $this->ConnectDB();
    }

    function ConnectDB()
    {
        if ($_SERVER["SERVER_NAME"] == "localhost") {
            $this->server = "localhost";
            $this->username = "root";
            $this->password = "a123456";
            $this->dbname = "chaindb";
        }
        try {
            $dsn = "mysql:host=" .  $this->server . ";dbname=" . $this->dbname . ";charset=utf8;";
            $this->connect = new \PDO(
                $dsn,
                $this->username,
                $this->password
            );
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (\PDOException $e) {
            $error = "Error Code: " . (int)$e->getCode() . "<br/>  Error Message: " . $e->getMessage();
            return  $error;
            exit();
        }
    }
}
