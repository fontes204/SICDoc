<?php

/**
 * Created by PhpStorm.
 * User: mac
 * Date: 13/05/16
 * Time: 11:10
 */
class Database
{
    private static $conn;

    public function __construct(){
        $this->conn()->exec('SET CHARACTER SET utf8');
    }
    public function conn()
    {
        if (is_null(self::$conn)) {
            try {
                self::$conn = new PDO(DB_TYPE .':host='.DB_HOST.';dbname='.DB_NAME, DB_USER,DB_PASS);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            } catch (PDOException $e) {
                echo($e->getMessage());
            }
        }
        return self::$conn;
    }
}