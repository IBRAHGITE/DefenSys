<?php
 include_once(dirname(__FILE__) . '/../models/Modele.php');
 include_once(dirname(__FILE__) . '/../components/function.php');
 $model = new Modele();
 $today = date('Y-m-d H:i:s');
 if (!empty($_GET) && $_GET['var'] == 'index') {
     $departements = $model->getProcedureFree("SELECT * FROM departements");
     $listeDepartements = $departements;
     include(dirname(__FILE__) . '/../views/pages/Departements/index.php');
    # code...
 }elseif (!empty($_GET) && $_GET['var'] == 'store') {
    $data = data($_POST);
    $libDepartement = htmlentities($_POST['libelle'],ENT_QUOTES);
    $text = "INSERT INTO departements (libelle,created_At,updated_At) VALUES ( ''$libDepartement'',''$today'',''$today'')";
    $result = $model->getProcedureFree($text);
    $url = 'index.php?page=departement&var=index';
    redirect($url);
 } elseif (!empty($_GET) && $_GET['var'] == 'edit') {
    $data = $_GET;
    $TheDepartement = $model->getProcedureFree("SELECT * FROM departements WHERE id = " . (int) $data['id']); 
 }elseif (!empty($_GET) && $_GET['var'] == 'update') {
    $data = $_POST;
    $id = $data['id'];
    $libelle = $data['libelle'];
    $libDepartement = htmlentities($libelle,ENT_QUOTES);
    $text = "UPDATE departements SET libelle = ''$libDepartement'', updated_At = ''$today'' WHERE id = " . $id;
    $result = $model->getProcedureFree($text);
   //  header('Location: index.php?page=departement&var=index');
    $url = 'index.php?page=departement&var=index';
    redirect($url);
 }
 
 elseif (!empty($_GET) && $_GET['var'] == 'delete') {
    $data = $_GET;
    $id = base64_decode($data['id']);
    $text = "DELETE FROM departements WHERE id = $id ";
    $result = $model->getProcedureFree($text);
   //  header('Location: index.php?page=departement&var=index&test='.$test);
    $url = 'index.php?page=departement&var=index&test='.$test;
    redirect($url);
 } 