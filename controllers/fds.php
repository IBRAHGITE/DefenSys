<?php
include_once(dirname(__FILE__) . '/../models/Modele.php');
$model = new Modele();
if (!empty($_GET) && $_GET['var'] == 'index') {
    $fds = $model->getProcedureFree("SELECT * FROM fds");
    include(dirname(__FILE__) . '/../views/pages/FDS/index.php');
}