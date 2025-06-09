<?php
include '../models/Modele.php';
include '../components/function.php';
include '../config/function.php';
$model = new Modele();
$response = true;
if (!empty($_POST)) {
    $id = base64_decode($_POST['id']);
    $text = "DELETE FROM departements WHERE id = $id";
    $data = $model->getProcedureFree($text);
    if (strpos($data,'contains no fields') !== false) {
    echo json_encode($response);
    }else {
        var_dump($data);
    }
    
}