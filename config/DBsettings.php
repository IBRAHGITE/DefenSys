<?php
class DatabaseSettings{
    protected $hostname;
    // protected $port;
    protected $database;
    protected $username;
    protected $password;
// SQL SERVER
    function __construct(){
        //SQL Server instance
        $this->hostname='BRAMADJIRE\SQLEXPRESS';
        //Port
        // $this->port = 1433;
        //SQL Server Database name
        $this->database = 'EAUPURE';
        //SQL Server username
        $this->username = 'sa';
        //SQL Server password
        $this->password = 'Adoo7509';
    }

    // MYSQL
    // function __construct(){
    //     //MYSQL instance
    //     $this->hostname='localhost';
    //     //Port
    //     // $this->port = 1433;
    //     //SQL Server Database name
    //     $this->database = 'eaupureapp';
    //     //SQL Server username
    //     $this->username = 'root';
    //     //SQL Server password
    //     $this->password = '';
    // }
    // CE fichier doit etre dans gitignore
}