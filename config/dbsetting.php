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
        $this->hostname='ROGER-DAGO';
        //Port
        // $this->port = 1433;
        //SQL Server Database name
        $this->database = 'DBDefensys';
        //SQL Server username
        $this->username = 'rogerhost';
        //SQL Server password
        $this->password = '1603@Host';
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






/*
 * chargement du modele
 */
function chargerclasse($classe)
{
  require('Models/' . $classe . '.php');
}

spl_autoload_register('chargerclasse'); // fonction d'auto chargement de classe.
