<?php
session_start();
include '../bdd/connexion.php';
$date1=date("d/m/Y H:i");
// Rassemblage des éléments

//-----------Questions 1---------------------//
$requser=$connexion->prepare("SELECT * FROM question where ref_id=1");
$requser->execute();
$question1=$requser->fetch();
//-----------Fin-Questions---------------------//

//-----------Questions 2---------------------//
$requser=$connexion->prepare("SELECT * FROM question where ref_id=2");
$requser->execute();
$question2=$requser->fetch();
//-----------Fin-Questions---------------------//

//-----------Questions 3---------------------//
$requser=$connexion->prepare("SELECT * FROM question where ref_id=3");
$requser->execute();
$question3=$requser->fetch();
//-----------Fin-Questions---------------------//

//-----------Questions 4---------------------//
$requser=$connexion->prepare("SELECT * FROM question where ref_id=4");
$requser->execute();
$question4=$requser->fetch();
//-----------Fin-Questions---------------------//

//-----------Questions 5---------------------//
$requser=$connexion->prepare("SELECT * FROM question where ref_id=5");
$requser->execute();
$question5=$requser->fetch();
//-----------Fin-Questions---------------------//

//-----------Reponses 1---------------------//
$requser=$connexion->prepare("SELECT * FROM answer where ref_id=1 AND notation=1");
$requser->execute();
$answer1=$requser->fetch();
//-----------Fin-Reponses---------------------//

//-----------Reponses 2---------------------//
$requser=$connexion->prepare("SELECT * FROM answer where ref_id=2 AND notation=1");
$requser->execute();
$answer2=$requser->fetch();
//-----------Fin-Reponses---------------------//

//-----------Reponses 3---------------------//
$requser=$connexion->prepare("SELECT * FROM answer where ref_id=3 AND notation=1");
$requser->execute();
$answer3=$requser->fetch();
//-----------Fin-Reponses---------------------//

//-----------Reponses 4---------------------//
$requser=$connexion->prepare("SELECT * FROM answer where ref_id=4 AND notation=1");
$requser->execute();
$answer4=$requser->fetch();
//-----------Fin-Reponses---------------------//

//-----------Reponses 5---------------------//
$requser=$connexion->prepare("SELECT * FROM answer where ref_id=5 AND notation=1");
$requser->execute();
$answer5=$requser->fetch();
//-----------Fin-Reponses---------------------//

//-----------resultat---------------------//
$requser=$connexion->prepare("SELECT * FROM resultat");
$requser->execute();
$resultat=$requser->fetch();
//-----------Fin-Questions---------------------//

// Fin
// Postage des données à partir d'Ajax
extract($_POST);

if (isset($_POST['answer1Send']) && isset($_POST['answer2Send']) && isset($_POST['answer3Send']) && isset($_POST['answer3Send']) && isset($_POST['answer4Send']) && isset($_POST['answer5Send'])) {
    if ($_POST['answer1Send']==$answer1['name']) {
        $point_resultat=1;
        $ps=$connexion->prepare("INSERT INTO resultat(question,reponse,nom_complet,point,dates)VALUES(?,?,?,?,?)");
        //Pour bien recupere les données on crée un table de parametre
        $params=array($question1['enonce'],$_POST['answer1Send'],$_SESSION['user'],$point_resultat,$date1);
        //Execution de la requête par leur paramètre en ordre 
        $ps->execute($params);
    }else{
        $point_resultat=0;
        $ps=$connexion->prepare("INSERT INTO resultat(question,reponse,nom_complet,point,dates)VALUES(?,?,?,?,?)");
        //Pour bien recupere les données on crée un table de parametre
        $params=array($question1['enonce'],$_POST['answer1Send'],$_SESSION['user'],$point_resultat,$date1);
        //Execution de la requête par leur paramètre en ordre 
        $ps->execute($params);
    }
    if ($_POST['answer2Send']==$answer2['name']) {
        $point_resultat=1;
        $ps=$connexion->prepare("INSERT INTO resultat(question,reponse,nom_complet,point,dates)VALUES(?,?,?,?,?)");
        //Pour bien recupere les données on crée un table de parametre
        $params=array($question2['enonce'],$_POST['answer2Send'],$_SESSION['user'],$point_resultat,$date1);
        //Execution de la requête par leur paramètre en ordre 
        $ps->execute($params);
    }else{
        $point_resultat=0;
        $ps=$connexion->prepare("INSERT INTO resultat(question,reponse,nom_complet,point,dates)VALUES(?,?,?,?,?)");
        //Pour bien recupere les données on crée un table de parametre
        $params=array($question2['enonce'],$_POST['answer2Send'],$_SESSION['user'],$point_resultat,$date1);
        //Execution de la requête par leur paramètre en ordre 
        $ps->execute($params);
    }

    if ($_POST['answer3Send']==$answer3['name']) {
        $point_resultat=1;
        $ps=$connexion->prepare("INSERT INTO resultat(question,reponse,nom_complet,point,dates)VALUES(?,?,?,?,?)");
        //Pour bien recupere les données on crée un table de parametre
        $params=array($question3['enonce'],$_POST['answer3Send'],$_SESSION['user'],$point_resultat,$date1);
        //Execution de la requête par leur paramètre en ordre 
        $ps->execute($params);
    }else{
        $point_resultat=0;
        $ps=$connexion->prepare("INSERT INTO resultat(question,reponse,nom_complet,point,dates)VALUES(?,?,?,?,?)");
        //Pour bien recupere les données on crée un table de parametre
        $params=array($question3['enonce'],$_POST['answer3Send'],$_SESSION['user'],$point_resultat,$date1);
        //Execution de la requête par leur paramètre en ordre 
        $ps->execute($params);
    }

    if ($_POST['answer4Send']==$answer4['name']) {
        $point_resultat=1;
        $ps=$connexion->prepare("INSERT INTO resultat(question,reponse,nom_complet,point,dates)VALUES(?,?,?,?,?)");
        //Pour bien recupere les données on crée un table de parametre
        $params=array($question4['enonce'],$_POST['answer4Send'],$_SESSION['user'],$point_resultat,$date1);
        //Execution de la requête par leur paramètre en ordre 
        $ps->execute($params);
    }else{
        $point_resultat=0;
        $ps=$connexion->prepare("INSERT INTO resultat(question,reponse,nom_complet,point,dates)VALUES(?,?,?,?,?)");
        //Pour bien recupere les données on crée un table de parametre
        $params=array($question4['enonce'],$_POST['answer4Send'],$_SESSION['user'],$point_resultat,$date1);
        //Execution de la requête par leur paramètre en ordre 
        $ps->execute($params);
    }
    if ($_POST['answer5Send']==$answer5['name']) {
        $point_resultat=1;
        $ps=$connexion->prepare("INSERT INTO resultat(question,reponse,nom_complet,point,dates)VALUES(?,?,?,?,?)");
        //Pour bien recupere les données on crée un table de parametre
        $params=array($question5['enonce'],$_POST['answer5Send'],$_SESSION['user'],$point_resultat,$date1);
        //Execution de la requête par leur paramètre en ordre 
        $ps->execute($params);
    }else{
        $point_resultat=0;
        $ps=$connexion->prepare("INSERT INTO resultat(question,reponse,nom_complet,point,dates)VALUES(?,?,?,?,?)");
        //Pour bien recupere les données on crée un table de parametre
        $params=array($question5['enonce'],$_POST['answer5Send'],$_SESSION['user'],$point_resultat,$date1);
        //Execution de la requête par leur paramètre en ordre 
        $ps->execute($params);
    }
    
}