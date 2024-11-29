<?php
 $mot1=isset($_GET['mot1'])?$_GET['mot1']:"";
 $mot2=isset($_GET['mot2'])?$_GET['mot2']:"all";
 
 if ($mot2=="all") {
     $requete="SELECT * FROM entree WHERE designation LIKE '%$mot1%'";                  
 }else{
     $requete="SELECT * FROM entree WHERE designation LIKE '%$mot1%' AND dates='$mot2'";  
 }
 
 $resultat=$connexion->query($requete);