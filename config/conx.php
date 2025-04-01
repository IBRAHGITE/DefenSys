<?php

/*
 * script de connection à la base de données
 */

// $hostname = base64_encode("SAS-VM-003");
// $port = 1433;
// $dbname = base64_encode("OPERAS_GLOBAL_ETL");
// $username = base64_encode("sa");
// $pw = base64_encode("Corporatedb*22");

$hostname = base64_encode("BRAMADJIRE\SQLEXPRESS");
$port = 1433;
$dbname = base64_encode("EAUPURE");
$username = base64_encode("igite");
$mdp='AdooA1@76@32@7509';
$pw = base64_encode($mdp);

try {
  $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
  $bdd = new PDO("sqlsrv:Server=" . base64_decode($hostname) . ";Database=" . base64_decode($dbname) . "", base64_decode("$username"), base64_decode("$pw"), $pdo_options);
} catch (PDOException $e) {
  $errorPage = "vews/pages/error.php";
  header("Location:$errorPage", true, 307);
}

/*
 * chargement du modele
 */
function chargerclasse($classe)
{
  require('Models/' . $classe . '.php');
}

spl_autoload_register('chargerclasse'); // fonction d'auto chargement de classe.