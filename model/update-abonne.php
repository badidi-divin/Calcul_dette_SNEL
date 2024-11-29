<?php
    //------------Connexion --------------
    $con=new mysqli('localhost','root','','stevie');
    if (!$con) {
        die(mysqli_error($con));
    }
    //------------Connexion Fin--------------

    if (isset($_POST['updateid'])) {

        $user_id=$_POST['updateid'];
        $sql="select * from `entree` where id=$user_id";
        $result=mysqli_query($con,$sql);
        $response=array();
        while($row=mysqli_fetch_assoc($result)){
            $response=$row;
        }
        echo json_encode($response);
    }else{
        $response['status']=200;
        $response['message']="Invalid or data not found";
    }
    // ------------------------Modification des données------------------------
    if (isset($_POST['hiddendata'])) {
        $uniqueid=$_POST['hiddendata'];
        $code_abonne_edit=$_POST['code_abonne_edit'];
        $nom_complet_edit=$_POST['nom_complet_edit'];
        $tel_edit=$_POST['tel_edit'];
        $adresse_edit=$_POST['adresse_edit'];
        
        $sql="update `entree`set code_abonne='$code_abonne_edit',nom_complet='$nom_complet_edit',tel='$tel_edit',adresse='$adresse_edit' where id=$uniqueid";
        $result=mysqli_query($con,$sql);
    }