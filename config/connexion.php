<?php
include_once 'DBsettings.php';

class ConnexionDB extends DatabaseSettings
{

    public $connectionString;
    public $dataSet;
    public $query;

    private $host;
    private $port;
    private $dbName;
    private $user;
    private $pass;
    private $connex;


    function __construct()
    {
        $dbConnexionParams = new DatabaseSettings();
        $this->host = $dbConnexionParams->hostname;
        $this->dbName = $dbConnexionParams->database;
        $this->user = $dbConnexionParams->username;
        $this->pass = $dbConnexionParams->password;
        $dbConnexionParams = null;
    }

    // Connection à la base de données SQL SERVER
    function dbConnect()
    {
        try {
            $this->connectionString = new PDO("sqlsrv:Server=" . $this->host . ";Database=" . $this->dbName . "", $this->user, $this->pass);
            $this->connectionString->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            if ($this->connectionString instanceof PDO) {
                return $this->connectionString;
                echo 'connexion effectuer';
            }
        } catch (PDOException $e) {
            return $e;
            echo $e->getMessage();
        }
    }
    // Connection à la base de données MYSQL
        // function dbConnect()
        // {
        //     try {
        //         $this->connectionString = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbName . "", $this->user, $this->pass);
        //         $this->connectionString->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //         if ($this->connectionString instanceof PDO) {
        //             return $this->connectionString;
        //         }
        //     } catch (PDOException $e) {
        //         return $e;
        //         echo $e->getMessage();
        //     }
        // }

    function dbQuery($dbquery)
    {
        $this->query = $dbquery;
        try {
            $dbCon = $this->dbConnect();
            if ($dbCon instanceof PDO) {
                $stmt = $dbCon->prepare($this->query);
                $stmt->execute();
                $rows = $stmt->fetchAll();
                return $rows;
            }else{
                return $dbCon->getMessage();
            }
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
 
