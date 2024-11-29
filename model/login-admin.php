<?php 
session_start();

require_once('../bdd/connexion.php');

$json = array('error'=> true);
$User=htmlspecialchars(trim($_GET['User']));
$Pwd=md5(htmlspecialchars((trim($_GET['Pwd']))));

 $verif=$connexion->prepare("SELECT * FROM admin WHERE username=? AND password=?");
 $verif->execute(array($User,$Pwd)); 

$compte=$verif->rowCount();
$af_user=$verif->fetch();

	if(!$compte==0)
	{
        $json['message'] = "OK";
        $_SESSION['id']=$af_user['id'];
        $_SESSION['user']=$af_user['username'];
		$_SESSION['password']=$af_user['password'];
        $json['user']=$af_user['username'];
	}
	else{
		$json['error']= false;
		$json['message']="Cette utilisateur n'existe pas dans la base de donnée.";
	}


echo json_encode($json);	
?>