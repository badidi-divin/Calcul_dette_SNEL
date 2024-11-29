<?php 
    $requser=$connexion->prepare("SELECT * FROM facture_creance WHERE id=?");
    $requser->execute(array($_GET['id']));
    $userinfo=$requser->fetch();

    if (isset($_POST['saves'])) {

        $code_abonne=htmlspecialchars($_POST['code_abonne']);
        $num_facture=htmlspecialchars($_POST['num_facture']);
        $montant_apayer=htmlspecialchars($_POST['montant_apayer']);
        $etat=htmlspecialchars($_POST['etat']);
             //Création de l'objet prepare et envoie de la requête
            $ps=$connexion->prepare("UPDATE facture_creance SET code_abonne=?,num_facture=?,montant_apayer=?,etat=? WHERE id=?");
            //Pour bien recupere les données on crée un table de parametre
            $params=array($code_abonne,$num_facture,$montant_apayer,$etat,$_GET['id']);
            //Execution de la requête par leur paramètre en ordre 
            $ps->execute($params);
            // Pour recuperer l'id du user
            ?>
            <script type="text/javascript">
                alert('Modification Effectuée avec Succès!')
            </script>
            <script>
                window.open('facture-np.php','_self')
            </script>
            <?php
            exit(); 
        }
        
    
