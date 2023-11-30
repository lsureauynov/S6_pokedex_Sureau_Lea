<?php

namespace App\Core;

use mysqli;

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


define('servername', "localhost");
define('username', "root");
define('password', "root");
define('dbname', "pokemon_db");


class Connect
{
    /**
     * @return object
     */
    public static function getDb()
    {

        $conn = new mysqli(servername, username, password, dbname);
        $conn->set_charset("utf8");

        if ($conn->connect_error) {
            die("Connection failed;". $conn->connect_error);
        }
        return $conn;

    }

    /**
     * @param string $sql
     */
    public static function execute($sql): void
    {

        $result = self::getDb()->query($sql);
        if(!$result) {
            die(mysqli_error(self::getDb()));
        }
    }

    /**
     * @param string $sql
     * @return array<array<string,string>>
     */
    public static function select($sql): array
    {
        $result = self::getDb()->query($sql);

        if(!$result) {
            die(mysqli_error(self::getDb()));
        }

        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
