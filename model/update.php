<?php
    //------------Connexion --------------
    $con=new mysqli('localhost','root','','henriette_tfc');
    if (!$con) {
        die(mysqli_error($con));
    }
    //------------Connexion Fin--------------

    if (isset($_POST['updateid'])) {

        $user_id=$_POST['updateid'];
        $sql="select * from `eleve` where code_eleve=$user_id";
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
        $nom_complet_edit=$_POST['nom_complet_edit'];
        $classe_edit=$_POST['classe_edit'];
        $password_edit=$_POST['password_edit'];
        $password_crypt=md5($_POST['password_edit']);

        $sql="update `eleve`set nom_utilisateur='$nom_complet_edit',mot_de_passe='$password_crypt',enclaire='$password_edit',classe='$classe_edit' where code_eleve=$uniqueid";
        $result=mysqli_query($con,$sql);
    }