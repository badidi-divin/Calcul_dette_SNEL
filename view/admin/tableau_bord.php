<?php
    require_once 'include/session.php';
    //****************************** Entrées*******************************************
    $requete="SELECT * FROM entree WHERE mouvement='Entrées'";
    $ps=$connexion->query($requete);
    $id=1;
    // Total Prévisionnels Entrées
     $nblmd=$connexion->prepare("SELECT SUM(prevision) AS prix_total FROM entree WHERE mouvement='Entrées'");
     $nblmd->execute();
     $nblmd=$nblmd->fetch()['prix_total'];
     // Total Réalités Entrées
     $nblmd2=$connexion->prepare("SELECT SUM(realite) AS prix_total FROM entree WHERE mouvement='Entrées'");
     $nblmd2->execute();
     $nblmd2=$nblmd2->fetch()['prix_total'];
      //******************************Fin Entrées*******************************************
     // ******************************Depenses**************************
     $requete="SELECT * FROM entree WHERE mouvement='Sorties'";
    $ps=$connexion->query($requete);
    $id=1;
    // Total Prévisionnels Depenses
     $nblmd3=$connexion->prepare("SELECT SUM(prevision) AS prix_total FROM entree WHERE mouvement='Sorties'");
     $nblmd3->execute();
     $nblmd3=$nblmd3->fetch()['prix_total'];
     // Total Réalités Depenses
     $nblmd4=$connexion->prepare("SELECT SUM(realite) AS prix_total FROM entree WHERE mouvement='Sorties'");
     $nblmd4->execute();
     $nblmd4=$nblmd4->fetch()['prix_total'];
     // ******************************Fin Depenses**************************
?>
<!doctype html>
<html class="no-js" lang="fr">

<head>
   <?php
        require_once 'include/head.php';
   ?>
</head>

<body  style="background-image: url(./img/22.png);min-height: 100vh;
    justify-content: center;
    align-items: center;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    position: relative;
    z-index: 1;}">

   <?php
    require_once('include/sidebar.php');
   ?>
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="#"></a>

                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area" >
            <?php
                require_once 'include/connexion.php';
            ?>
        </div>
         <div class="widget-program-box mg-tb-30" style="padding-top:50px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel widget-int-shape res-tablet-mg-t-30 dk-res-t-pro-30">
                            <div class="panel-body">
                                <div class="text-center content-box">
                                    <h2 class="m-b-xs">Total Global Recettes Prévsionnel</h2>
                                    <div class="m icon-box">
                                        <i class="educate-icon educate-charts"></i>
                                    </div>
                                    <p class="small mg-t-box" style="font-size: 50px">
                                      <?php
                                    echo $nblmd;
                                ?>$
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel widget-int-shape res-tablet-mg-t-30 dk-res-t-pro-30">
                            <div class="panel-body">
                                <div class="text-center content-box">
                                    <h2 class="m-b-xs">Total Global Recettes Réelles</h2>
                                    <div class="m icon-box">
                                        <i class="educate-icon educate-charts"></i>
                                    </div>
                                    <p class="small mg-t-box" style="font-size: 50px">
                                        <?php
                                    echo $nblmd2;
                                ?>$
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="widget-program-box mg-tb-30" style="padding-top:10px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel widget-int-shape res-tablet-mg-t-30 dk-res-t-pro-30">
                            <div class="panel-body">
                                <div class="text-center content-box">
                                    <h2 class="m-b-xs">Depenses Globales Prévisionnelles</h2>
                                    <div class="m icon-box">
                                        <i class="educate-icon educate-charts"></i>
                                    </div>
                                    <p class="small mg-t-box" style="font-size: 50px">
                                        <?php
                                    echo $nblmd3;
                                ?>$
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                       <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel widget-int-shape res-tablet-mg-t-30 dk-res-t-pro-30">
                            <div class="panel-body">
                                <div class="text-center content-box">
                                    <h2 class="m-b-xs">Depenses Globales Réelles</h2>
                                    <div class="m icon-box">
                                        <i class="educate-icon educate-charts"></i>
                                    </div>
                                    <p class="small mg-t-box" style="font-size: 50px">
                                  <?php
                                    echo $nblmd4;
                                ?>$
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <?php
        require_once 'include/foot_js.php';
   ?>
</body>
</html>