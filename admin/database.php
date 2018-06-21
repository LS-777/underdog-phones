<?php class Database {

    private static $dbHost = "localhost";
    private static $dbName = "underdog_phones";
    private static $dbUsername = "root";
    private static $dbUserpassword = "MIGHTYDUCKS";

    private static $connection = null;

    public static function connect()
    {
        if (self::$connection == null) {
            try {
                self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName, self::$dbUsername, self::$dbUserpassword);
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }
        return self::$connection;
    }

    public static function disconnect()
    {
        self::$connection = null;
    }


}