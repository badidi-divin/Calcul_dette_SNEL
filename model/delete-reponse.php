<?php
    include '../bdd/connexion.php';

    if (isset($_POST['deletesend'])) {
        $unique=$_POST['deletesend'];
        $ps=$connexion->prepare("DELETE FROM answer where id='$unique'");
	    $ps->execute();
    }