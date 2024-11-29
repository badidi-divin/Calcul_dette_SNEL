<?php
    //------------Connexion --------------
    $con=new mysqli('localhost','root','','henriette_tfc');
    if (!$con) {
        die(mysqli_error($con));
    }
    //------------Connexion Fin--------------

    if (isset($_POST['updateid'])) {

        $user_id=$_POST['updateid'];
        $sql="select * from `answer` where id=$user_id";
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
        $reponse_edit=$_POST['reponse_edit'];
        $ref_edit=$_POST['ref_edit'];
        $not_edit=$_POST['not_edit'];
        $sql="update `answer`set name='$reponse_edit',ref_id='$ref_edit',notation='$not_edit' where id=$uniqueid";
        $result=mysqli_query($con,$sql);
    }