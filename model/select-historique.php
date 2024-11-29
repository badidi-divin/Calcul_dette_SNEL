<?php
$name=$_SESSION['user'];
$requete="SELECT * FROM resultat WHERE nom_complet='$name'";          
$resultat=$connexion->query($requete);
$number=1;