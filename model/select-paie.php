<?php
 $mot1=isset($_GET['mot1'])?$_GET['mot1']:"";

 $requete="SELECT * FROM paiement WHERE code_abonne LIKE '%$mot1%'";                 
 
 $resultat=$connexion->query($requete);