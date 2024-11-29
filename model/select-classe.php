<?php
include '../bdd/connexion.php';
$mot2=isset($_GET['motcle'])?$_GET['motcle']:"all";

if ($mot2=="all") {
    $requete="SELECT * FROM eleve";                  
}else{
    $requete="SELECT * FROM eleve WHERE classe='$mot2'";  
}

$resultat=$connexion->query($requete);
