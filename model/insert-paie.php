<?php 
    if (isset($_POST['saves'])) {

        $num_facture1=htmlspecialchars($_POST['num_facture1']);
        $num_facture2=htmlspecialchars($_POST['num_facture2']);
        $observation=htmlspecialchars($_POST['observation']);

        // Selection----1
        $requser=$connexion->prepare("SELECT * FROM creance WHERE num_facture=?");
        $requser->execute(array($num_facture1));
        $userinfo1=$requser->fetch();
        // Selection---2
        $requser=$connexion->prepare("SELECT * FROM facture_creance WHERE num_facture=?");
        $requser->execute(array($num_facture2));
        $userinfo2=$requser->fetch();
        // Selection-definitif
        $montant_apayer=$userinfo2['montant_apayer'];
        $montant_payer=$userinfo1['reste'];
        
        $reste=$montant_apayer-$montant_payer;

        //Création de l'objet prepare et envoie de la requête
        $ps=$connexion->prepare("INSERT INTO paiement(code_abonne,num_facture,montant_a_payer,montant_payer,obs)VALUES(?,?,?,?,?)");
        //Pour bien recupere les données on crée un table de parametre
        $params=array($userinfo2['code_abonne'],$num_facture2,$montant_apayer,$montant_payer,$observation);
        //Execution de la requête par leur paramètre en ordre 
        $ps->execute($params);
        // Pour recuperer l'id du user
        // // Mis à jour de la facture
        $ps=$connexion->prepare("UPDATE facture_creance SET montant_apayer=? WHERE num_facture=?");
        //Pour bien recupere les données on crée un table de parametre
        $params=array($reste,$num_facture2);
        //Execution de la requête par leur paramètre en ordre 
        $ps->execute($params);
        // // Mis à jour de la créance
        $ps=$connexion->prepare("UPDATE creance SET reste=0 WHERE num_facture=?");
        //Pour bien recupere les données on crée un table de parametre
        $params=array($num_facture1);
            //Execution de la requête par leur paramètre en ordre 
        $ps->execute($params);

        ?>
        <script type="text/javascript">
         alert('Enregistrement Effectuer avec Succès!')
        </script>
        <script>
            window.open('paiement.php','_self')
        </script>
        <?php     
             exit(); 
        }
        
    
