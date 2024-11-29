<?php
include '../bdd/connexion.php';
// Postage des données à partir d'Ajax
extract($_POST);
if (isset($_POST['answer1Send']) && isset($_POST['answer2Send'])) {
    $ps=$connexion->prepare("INSERT INTO question(enonce,ref_id)VALUES(?,?)");
    //Pour bien recupere les données on crée un table de parametre
    $params=array(($_POST['answer1Send']),$_POST['answer2Send']);
    //Execution de la requête par leur paramètre en ordre 
    $ps->execute($params);
}