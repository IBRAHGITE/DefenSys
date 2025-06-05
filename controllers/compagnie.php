<?php
    include_once(dirname(__FILE__) . '/../models/Modele.php');
    $model = new Modele();
    $today = date('Y-m-d H:i:s');
    if (!empty($_GET) && $_GET['var'] == 'index') {
        $compagnies = $model->getProcedureFree("SELECT * FROM compagnies");
        include(dirname(__FILE__) . '/../views/pages/Compagnies/index.php');
    }elseif (!empty($_GET) && $_GET['var'] == 'store') {
        $data = $_POST;
        $libCompagnie = htmlentities($_POST['libelle'],ENT_QUOTES);
        $text = "INSERT INTO compagnies (libelle,created_At,updated_At) VALUES ( ''$libCompagnie'',''$today'',''$today'')";
        $result = $model->getProcedureFree($text);
        $url = 'index.php?page=compagnie&var=index';
        redirect($url);

    }elseif (!empty($_GET) && $_GET['var'] == 'update') {
        $data = $_POST; 
        $id = $data['id'];
        $libelle = htmlentities($data['libelle'],ENT_QUOTES);
        $text = "UPDATE compagnies SET libelle = ''$libelle'', updated_At = ''$today'' WHERE id = " . $id;
        $result = $model->getProcedureFree($text);
        $url = 'index.php?page=compagnie&var=index';
        redirect($url);
    }elseif (!empty($_GET) && $_GET['var'] == 'delete') {
        $data = $_GET;
        $id = base64_decode($data['id']);
        $text = "DELETE FROM compagnies WHERE id = $id ";
        $result = $model->getProcedureFree($text);
        $url = 'index.php?page=compagnie&var=index';
        redirect($url);
    } 