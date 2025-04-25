<?php
include_once(dirname(__FILE__) . '/../models/Modele.php');
$model = new Modele();
if (!empty($_GET) && $_GET['var'] == 'index') {
    $vehicules = $model->getProcedureFree("SELECT * FROM vehicules");
    include(dirname(__FILE__) . '/../views/pages/Vehicule/index.php');
} elseif (!empty($_GET) && $_GET['var'] == 'show') {
    $vari = 'shVar';
    include(dirname(__FILE__) . '/../views/pages/Vehicule/show.php');
} elseif (!empty($_GET) && $_GET['var'] == 'create') {
    $liste_marques = $model->getProcedureFree("SELECT * FROM marque WHERE type = 'voiture'");
    // $liste_modeles = $model->getProcedureFree("SELECT * FROM modele");
    $liste_couleurs = $model->getProcedureFree("SELECT * FROM couleur");
    // var_dump($liste_modeles, $liste_couleurs, $liste_marques);
    include(dirname(__FILE__) . '/../views/pages/Vehicule/create.php');
} elseif (!empty($_GET) && $_GET['var'] == 'store') {
    $model->getProcedureFree("INSERT INTO vehicule (marque, modele, annee, immatriculation) VALUES ('" . $_POST['marque'] . "', '" . $_POST['modele'] . "', '" . $_POST['annee'] . "', '" . $_POST['immatriculation'] . "')");
    header('Location: index.php?controller=vehicule&var=index');
} elseif (!empty($_GET) && $_GET['var'] == 'edit') {
    $vehicule = $model->getProcedureFree("SELECT * FROM vehicule WHERE id = " . $_GET['id']);
    include(dirname(__FILE__) . '/../views/pages/Vehicule/edit.php');
} elseif (!empty($_GET) && $_GET['var'] == 'update') {
    $model->getProcedureFree("UPDATE vehicule SET marque = '" . $_POST['marque'] . "', modele = '" . $_POST['modele'] . "', annee = '" . $_POST['annee'] . "', immatriculation = '" . $_POST['immatriculation'] . "' WHERE id = " . $_POST['id']);
    header('Location: index.php?controller=vehicule&var=index');
} elseif (!empty($_GET) && $_GET['var'] == 'delete') {
    $model->getProcedureFree("DELETE FROM vehicule WHERE id = " . $_GET['id']);
    header('Location: index.php?controller=vehicule&var=index');
}