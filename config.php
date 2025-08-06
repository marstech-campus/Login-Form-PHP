<?php

class Database
{
  public static $conn = null;
  public static function getconnection()
  {
    if (Database::$conn === null)
    {
       $hostname = 'localhost';
       $username = 'root';
       $password = '123';
       $dbname = 'phpproject';
       // Create connection
       $connection = new mysqli($hostname, $username, $password, $dbname); //object constructing
       if ($connection->connect_error)
        {
          die("Connection failed: " . $connection->connect_error);
        }
        else
        {
          Database::$conn = $connection;
          echo "Connection created successfully","<br>";
          return Database::$conn;
        }
    }
    else
    {
      echo "connection already exists","<br>";
      return Database::$conn;
    }
  }
}
$connection = Database::getconnection();
//$connection = Database::getconnection();
?>