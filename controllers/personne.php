<?php
    include_once(dirname(__FILE__) . '/../models/Modele.php');
    $model = new Modele();
if (isset($_GET['var']) && $_GET['var'] == 'index') {
    $personnes = $model->getProcedureFree("SELECT * FROM personnes");
    include(dirname(__FILE__) . '/../views/pages/Personnes/index.php');
} elseif (isset($_GET['var']) && $_GET['var'] == 'show') {
    $id = base64_decode($_GET['id']);
    $personne = $model->getProcedureFree("SELECT * FROM personnes WHERE id = " . $id);
    include(dirname(__FILE__) . '/../views/pages/Personnes/show.php');
} elseif (isset($_GET['var']) && $_GET['var'] == 'create') {
    $liste_departements = $model->getProcedureFree("SELECT * FROM departements");
    include(dirname(__FILE__) . '/../views/pages/Personnes/create.php');
} elseif (isset($_GET['var']) && $_GET['var'] == 'store') { 
    $model->getProcedureFree("INSERT INTO personne (nom, prenom, email) VALUES ('" . $_POST['nom'] . "', '" . $_POST['prenom'] . "', '" . $_POST['email'] . "')");
    header('Location: index.php?page=personne&var=index');
} elseif (isset($_GET['var']) && $_GET['var'] == 'edit') {
    $liste_departements = $model->getProcedureFree("SELECT * FROM departements");
    $id = base64_decode($_GET['id']);
    $personne = $model->getProcedureFree("SELECT * FROM personnes WHERE id = " . $id);
    $personne = $personne[0];
    include(dirname(__FILE__) . '/../views/pages/Personnes/edit.php');
} elseif (isset($_GET['var']) && $_GET['var'] == 'update') {
    $model->getProcedureFree("UPDATE personne SET nom = '" . $_POST['nom'] . "', prenom = '" . $_POST['prenom'] . "', email = '" . $_POST['email'] . "' WHERE id = " . $_POST['id']);
    header('Location: index.php?page=personne&var=index');
} elseif (isset($_GET['var']) && $_GET['var'] == 'delete') {
    $model->getProcedureFree("DELETE FROM personne WHERE id = " . $_GET['id']);
    header('Location: index.php?page=personne&var=index');
}