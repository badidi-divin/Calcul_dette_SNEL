<?php
    require_once 'include/session.php';
    require_once '../../model/edit-facture-np.php'; 
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
                            <h3 class="mb-3" align="center">FORMULAIRE D'EDITION</h3>
                        <form action="" method="post" class="appointment-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <label>Code Abonné:</label>
                                <select name="code_abonne" class="form-control">
                                    <?php
                                        $ps=$connexion->prepare("SELECT * FROM entree");
                                        $ps->execute();
                                        ?>
                                        <option disabled="disabled">
                                            Choisissez une rubrique
                                        </option>
                                        <?php
                                            while ($s=$ps->fetch(PDO::FETCH_OBJ)) {
                                        ?>
                                        <option value="<?php echo $s->code_abonne; ?>">
                                            <?php echo $s->code_abonne; ?>
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
                                        <label>Numéro Facture</label>
                                        <input type="text" class="form-control appointment_date-check-in" placeholder="Numéro Facture" name="num_facture" required="required" value="<?= $userinfo['num_facture'] ?>">
                                    </div>
                                </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon"><span class="ion-md-calendar"></span></div>
                                        <label>Montant A Payer(CDF):</label>
                                         <input type="number" class="form-control appointment_date-check-in" placeholder="Montant A Payer" name="montant_apayer" required="required" value="<?= $userinfo['montant_apayer'] ?>">
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon"><span class="ion-md-calendar"></span></div>
                                        <label>Etat:</label>
                                         <select class="form-control" name="etat">
                                             <option value="0">
                                                 Non Payé
                                             </option>
                                             <option value="1">
                                                 Payé
                                             </option>
                                         </select>
                                    </div>
                                </div>
                                </div>                       
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon"><span class="ion-md-calendar"></span></div>
                                         <button type="submit" name="saves" class="btn btn-success col-lg-12">Edition</button>
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