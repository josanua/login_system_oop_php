<?php

class Dbh
{

//    TODO: change with const or add .env file
//    define("MYSQL_HOST", 'localhost');
//    define("MYSQL_DATABASE", '{your_database_name}');
//    define("MYSQL_USERNAME", '{your_username}');
//    define("MYSQL_PASSWORD", '{your_password}');

    protected function connect() {
        try {
            $username = "root";
            $password = "root";
            $dbh = new PDO('mysql:host=localhost;dbname=ooplogin', $username, $password);
            return $dbh;
        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}