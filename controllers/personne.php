<?php
include_once(dirname(__FILE__) . '/../models/Modele.php');
$model = new Modele();
$today = date('Y-m-d H:i:s');
if (isset($_GET['var']) && $_GET['var'] == 'index') {
    $data = ['','','','','','','','','',''];
    $personnes = $model->getProcedure('PS_PERSONNES',0,$data);
include(dirname(__FILE__) . '/../views/pages/Personnes/index.php');
} elseif (isset($_GET['var']) && $_GET['var'] == 'show') {
    $id = base64_decode($_GET['id']);
    $data = ['','','',$id,'','','','','',''];
    $personne = $model->getProcedure('PS_PERSONNES', 4, $data);
    // var_dump($personne);die;
    include(dirname(__FILE__) . '/../views/pages/Personnes/show.php');
} elseif (isset($_GET['var']) && $_GET['var'] == 'create') {
    $liste_departements = $model->getProcedureFree("SELECT * FROM departements");
    $departements = $liste_departements;
    include(dirname(__FILE__) . '/../views/pages/Personnes/create.php');
} elseif (isset($_GET['var']) && $_GET['var'] == 'store') { 
    $data =$_POST;
    $donnee = $_POST;
    $matricule = $data['matricule'];
    $nom = $data['nom'];
    $prenom = $data['prenom'];
    $datenais = $data['datenais'];
    $departement = $data['departement'];
    $fonction = $data['fonction'];
    $commentaire = $data['commentaire'];
    $donnee = [$matricule,$nom,$prenom,$datenais,$departement,$fonction,$commentaire,$today,$today];
    $ins = $model->getProcedureFree("
    INSERT INTO Personnes (matricule, firstname, lastname, dateNaissance, departement, fonction, commentaire, created_at, updated_at) 
    VALUES (''$matricule'', ''$nom'', ''$prenom'', ''$datenais'', ''$departement'', ''$fonction'', ''$commentaire'', ''$today'', ''$today'')"
        );
    $url = 'index.php?page=personne&var=index';
    redirect($url);
    
    // header('Location: index. php?page=personne&var=index');
} elseif (isset($_GET['var']) && $_GET['var'] == 'edit') {
    $liste_departements = $model->getProcedureFree("SELECT * FROM departements");
    $id = base64_decode($_GET['id']);
    $data = ['','','',$id,'','','','','',''];
    $personne = $model->getProcedure('PS_PERSONNES', 4, $data);
    $personne = $personne[0];
    // var_dump($personne);die;
    include(dirname(__FILE__) . '/../views/pages/Personnes/edit.php');
} elseif (isset($_GET['var']) && $_GET['var'] == 'update') {
    $data = $_POST;
    $id = $data['id'];
    $matricule = $data['matricule'];
    $nom = $data['nom'];
    $prenom = $data['prenom'];
    $datenais = $data['datenais'];
    $departement = $data['departement'];
    $fonction = $data['fonction'];
    $commentaire = $data['commentaire'];
    $ins = $model->getProcedureFree("
    UPDATE Personnes SET matricule = ''$matricule'', firstname = ''$nom'', lastname = ''$prenom'', dateNaissance = ''$datenais'',
    departement = ''$departement'', fonction = ''$fonction'', commentaire = ''$commentaire'', updated_at = ''$today'' 
    WHERE id = " . $id);
    $url = 'index.php?page=personne&var=index';
    redirect($url);
} elseif (isset($_GET['var']) && $_GET['var'] == 'delete') {
    $id = base64_decode($_GET['id']);
    $data = ['','','',$id,'','','','','',''];
    $model->getProcedure('PS_PERSONNES',3,$data);
    $url = 'index.php?page=personne&var=index';
    redirect($url);
}elseif (isset($_GET['var']) && $_GET['var'] == 'blacklist') {
    $id = base64_decode($_GET['id']);
    $model->getProcedureFree("
    UPDATE Personnes SET blacklist = 1, updated_at = ''$today'' WHERE id = " . $id);

    $url = 'index.php?page=personne&var=index';
    redirect($url);
} elseif (isset($_GET['var']) && $_GET['var'] == 'unblacklist') {
    $id = base64_decode($_GET['id']);
    $model->getProcedureFree("
    UPDATE Personnes SET blacklist = 0, updated_at = ''$today'' WHERE id = " . $id);
    $url = 'index.php?page=personne&var=index';
    redirect($url);
} else {
    $url = 'index.php?page=personne&var=index';
    redirect($url);
}