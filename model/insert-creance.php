<?php 
    if (isset($_POST['saves'])) {

        $code_abonne=htmlspecialchars($_POST['code_abonne']);
        $num_facture=htmlspecialchars($_POST['num_facture']);
        $montant_apayer=htmlspecialchars($_POST['montant_apayer']);
        $montant_payer=htmlspecialchars($_POST['montant_payer']);
        $description=htmlspecialchars($_POST['description']);
        
        if($montant_payer<$montant_apayer){
            $erreur="Le Montant Payer doit être inferieur ou égal au montant payer!";
        }else{
            $reste=$montant_payer-$montant_apayer;
             //Création de l'objet prepare et envoie de la requête
            $ps=$connexion->prepare("INSERT INTO creance(code_abonne,num_facture,montant_apayer,montant_payer,description,reste)VALUES(?,?,?,?,?,?)");
            //Pour bien recupere les données on crée un table de parametre
            $params=array($code_abonne,$num_facture,$montant_apayer,$montant_payer,$description,$reste);
            //Execution de la requête par leur paramètre en ordre 
            $ps->execute($params);
            // Pour recuperer l'id du user
            ?>
            <script type="text/javascript">
                alert('Enregistrement Effectuer avec Succès!')
            </script>
            <script>
                window.open('creance.php','_self')
            </script>
            <?php
            exit(); 
        }
        
    }
