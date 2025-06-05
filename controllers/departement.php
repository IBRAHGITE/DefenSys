<?php
 include_once(dirname(__FILE__) . '/../models/Modele.php');
 include_once(dirname(__FILE__) . '/../components/function.php');
 $model = new Modele();
 if (!empty($_GET) && $_GET['var'] == 'index') {
     $departements = $model->getProcedureFree("SELECT * FROM departements");
     $listeDepartements = $departements;
     include(dirname(__FILE__) . '/../views/pages/Departements/index.php');
    # code...
 }elseif (!empty($_GET) && $_GET['var'] == 'store') {
    $data = data($_POST);
    $libDepartement = htmlentities($_POST['libelle'],ENT_QUOTES);
    $text = "INSERT INTO departements (libelle) VALUES ( ''$libDepartement'')";
    $result = $model->getProcedureFree($text);
   //  header('Location: index.php?page=departement&var=index');
    $url = 'index.php?page=departement&var=index';
    redirect($url);
 } elseif (!empty($_GET) && $_GET['var'] == 'edit') {
    $data = $_GET;
    var_dump($data);die;
    $TheDepartement = $model->getProcedureFree("SELECT * FROM departements WHERE id = " . (int) $data['id']); 
 }elseif (!empty($_GET) && $_GET['var'] == 'delete') {
    $data = $_GET;
    $id = base64_decode($data['id']);
    $text = "DELETE FROM departements WHERE id = $id ";
    $result = $model->getProcedureFree($text);
    var_dump($result);die;
    header('Location: index.php?page=departement&var=index&test='.$test);
    $url = 'index.php?page=departement&var=index&test='.$test;
    redirect($url);
 } 