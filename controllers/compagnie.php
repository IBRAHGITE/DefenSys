<?php
    include_once(dirname(__FILE__) . '/../models/Modele.php');
    $model = new Modele();
    if (!empty($_GET) && $_GET['var'] == 'index') {
        $compagnies = $model->getProcedureFree("SELECT * FROM compagnie");
        include(dirname(__FILE__) . '/../views/pages/Compagnies/index.php');
    }elseif (!empty($_GET) && $_GET['var'] == 'store') {
        $data = Data($_GET);
    }