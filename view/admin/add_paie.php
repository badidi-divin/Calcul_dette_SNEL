<?php
    require_once 'include/session.php';
    require_once '../../model/insert-paie.php'; 
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
   <?php
        require_once 'include/head.php';
   ?>
</head>

<body>

   <?php
    require_once('include/sidebar.php');
   ?>
   
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="#"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area" >
            <?php
                require_once 'include/connexion.php';
            ?>
             <div class="breadcome-area" style="padding-top: 30px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div form action="#" class="appointment-form">
                            <h3 class="mb-3" align="center">FORMULAIRE D'ENREGISTREMENT</h3>
                        <form action="" method="post" class="appointment-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <label>Code Abonné + Créances:</label>
                                <select name="num_facture1" class="form-control">
                                    <?php
                                        $ps=$connexion->prepare("SELECT * FROM creance");
                                        $ps->execute();
                                        ?>
                                        <option disabled="disabled">
                                            Choisissez une rubrique
                                        </option>
                                        <?php
                                            while ($s=$ps->fetch(PDO::FETCH_OBJ)) {
                                        ?>
                                        <option value="<?php echo $s->num_facture; ?>">
                                            <?php echo $s->code_abonne." voici le Reste: ".$s->reste."CDF de la Facture N°".$s->num_facture; ?>
                                        </option>
                                            <?php
                                            }
                                        ?>
                                </select>
                            </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon"><span class="ion-md-calendar"></span></div>
                                        <label>Num Facture A payer</label>
                                        <select name="num_facture2" class="form-control">
                                            <?php
                                                $ps=$connexion->prepare("SELECT * FROM facture_creance");
                                                $ps->execute();
                                                ?>
                                                <option disabled="disabled">
                                                    Choisissez une rubrique
                                                </option>
                                                <?php
                                                    while ($s=$ps->fetch(PDO::FETCH_OBJ)) {
                                                ?>
                                                <option value="<?php echo $s->num_facture; ?>">
                                                    <?php echo $s->num_facture."-".$s->code_abonne." Montant à Payer: ".$s->montant_apayer."CDF"; ?>
                                                </option>
                                                    <?php
                                                    }
                                                ?>
                                        </select>
                                    </div>
                                </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon"><span class="ion-md-calendar"></span></div>
                                        <label>Commentaire:</label>
                                         <input type="text" class="form-control appointment_date-check-in" placeholder="Commentaire" name="observation" required="required" value="RAS">
                                    </div>
                                </div>
                                </div>
                               
                                                              
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon"><span class="ion-md-calendar"></span></div>
                                         <button type="submit" name="saves" class="btn btn-danger col-lg-12">Payer</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <p style="color:red;"><?php if (isset($erreur)) {
                                echo $erreur;
                            } ?></p>
                         </form>

   <?php
        require_once 'include/foot_js.php';
   ?>
</body>
</html>