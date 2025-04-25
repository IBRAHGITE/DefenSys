<?php
 include_once(dirname(__FILE__) . '/../models/Modele.php');
 $model = new Modele();
 if (!empty($_GET) && $_GET['var'] == 'index') {
     $departements = $model->getProcedureFree("SELECT * FROM departement");
     include(dirname(__FILE__) . '/../views/pages/Departements/index.php');
    # code...
 }elseif (!empty($_GET) && $_GET['var'] == 'store') {
        // $model->getProcedureFree("INSERT INTO departement (libelle) VALUES ('" . $_POST['libelle'] . "')");
    $test = 'Le departement'. $_POST['libelle'].' a été ajouté avec succès';
    header('Location: index.php?page=departement&var=index&test='.$test);
    $url = 'index.php?page=departement&var=index&test='.$test;
    redirect($url);
    //  include(dirname(__FILE__) . '/../views/pages/Departements/index.php');
    # code...
 }