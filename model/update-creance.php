<?php 
    $requser=$connexion->prepare("SELECT * FROM creance WHERE id=?");
    $requser->execute(array($_GET['id']));
    $userinfo=$requser->fetch();

    if (isset($_POST['saves'])) {

        $code_abonne=htmlspecialchars($_POST['code_abonne']);
        $num_facture=htmlspecialchars($_POST['num_facture']);
        $montant_apayer=htmlspecialchars($_POST['montant_apayer']);
        $montant_payer=htmlspecialchars($_POST['montant_payer']);
        $description=htmlspecialchars($_POST['description']);
        
        if($montant_payer>$montant_apayer){
            $erreur="Le Montant Payer doit être inferieur ou égal au montant payer!";
        }else{
            $reste=$montant_apayer-$montant_payer;
             //Création de l'objet prepare et envoie de la requête
            $ps=$connexion->prepare("UPDATE creance SET code_abonne=?,num_facture=?,montant_apayer=?,montant_payer=?,description=?,reste=? WHERE id=?");
            //Pour bien recupere les données on crée un table de parametre
            $params=array($code_abonne,$num_facture,$montant_apayer,$montant_payer,$description,$reste,$_GET['id']);
            //Execution de la requête par leur paramètre en ordre 
            $ps->execute($params);
            // Pour recuperer l'id du user
            ?>
            <script type="text/javascript">
                alert('Modification Effectuée avec Succès!')
            </script>
            <script>
                window.open('creance.php','_self')
            </script>
            <?php
            exit(); 
        }
        
    }
