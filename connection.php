<?php

//connection made using the concept of oop
class Database 
{
    public static $connection; //connection variable made for storing the connection
    public static function connect()
    {
        if (!isset(Database::$connection)) {
            Database::$connection = new mysqli('localhost', 'root', '#True12345', 'weena_nadha', '3306');//since connction variable is not set wwe have to create a new database conecction using mysqliclass and it will assign in to the connction variable
        }
        return Database::$connection;//this returns the values stored in the conection variable
    }
    public static function iud($q)// this function responsible for the insert update delete processes
    {
        Database::connect()->query($q);// $q is the sql query which is passed as the parameter of the iud function 
        return Database::connect()->affected_rows;//this returns the number of affected rows as integer 
    }
    public static function search($q)//this funtion is responsible for the select queries in the database  
    {
        return Database::connect()->query($q);//this returns the query results  
    }
}
