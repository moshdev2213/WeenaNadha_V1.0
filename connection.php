<?php
class Database
{
    public static $x;
    public static function connect()
    {
        if (!isset(Database::$x)) {
            Database::$x = new mysqli('localhost', 'root', '#True12345', 'weena_nadha', '3306');
        }
        return Database::$x;
    }
    public static function iud($q)
    {
        Database::connect()->query($q);
        return Database::connect()->affected_rows;
    }
    public static function search($q)
    {
        return Database::connect()->query($q);
    }
}
