<?php
    $date=date("d/m/Y H:i");
    $name=$_SESSION['user'];
    $requete="SELECT * FROM resultat WHERE nom_complet='$name' AND dates='$date'";          
    $resultat=$connexion->query($requete);
    $number=1;