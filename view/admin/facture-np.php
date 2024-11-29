<?php
    require_once 'include/session.php';
    $c=1;
  
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
        <div class="header-advance-area">
            <?php
                require_once 'include/connexion.php';
                require_once '../../model/select-facture-np.php';
?>
        <div class="col-md-12 col-xd-12" style="padding-top: 80px;padding-bottom: 30px;">
            <form method="get" action="" class="form-inline">
                        <div class="form-group">
                            <label for="nom_eleve" style="color:black;">Code Abonné:</label>
                            <input type="text" name="mot1" class="form-control" placeholder="Code Abonné..." value="<?php echo $mot1 ?>">
                        </div>
                        <label for="option" style="color:black;">Etat:</label>
                        <select name="mot2" class="form-control" onchange="this.form.submit()" id="option">
                            <option value="all"  <?php if($mot2==="all") echo "selected" ?>>Tous</option>
                            <option value="0" <?php if($mot2==="0") echo "selected" ?>>Non Payé</option>
                            <option value="1" <?php if($mot2==="1") echo "selected" ?>>Payé</option>
                        </select>
                        <button type="submit" class="btn btn-success">
                        <span class="glyphicon glyphicon-search"></span></button>
                        &nbsp;&nbsp;
                        <a href="add_facture_np.php" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></a>
                         <a href="imprime_facture_np.php" class="btn btn-success"><span class="glyphicon glyphicon-print"></span></a>
                    </form>
        </div>
         <div class="data-table-area mg-b-15" style="margin-left: 19px !important; font-size: 10px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                         <div class="main-sparkline13-hd" style="border-radius: 5px; padding: 9px 4px 1px 9px;background-color:#141F29;">
                         <h1 style="color:white;font-size: 16px !important;letter-spacing: 0.2em"><i class="fa fa-product-hunt"></i>LISTE<span class="table-project-n"> DES CREANCES</span>
                                </div>
                        <div class="sparkline13-list">
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div class="table-responsive table--no-card m-b-30">
                                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                                data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" class="table table-striped">
                                                <thead>
                                       <tr>
                                         <th>ID</th><th>CODE-ABONNE</th><th>NUM-FACTURE</th><th>MONTANT-A-PAYER(CDF)</th><th>DATES</th><th>ETAT</th><th>ACTIONS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php while ($et=$resultat->fetch()){?>
                                        <tr>
                                       <td ><?php  echo($et['id'])?></td>
                                        <td><?php  echo($et['code_abonne'])?></td>
                                        <td><?php  echo($et['num_facture'])?></td>
                                        <td><?php  echo($et['montant_apayer'])?></td>
                                        <td><?php  echo($et['dates'])?></td>
                                        <td><?php  
                                            if ($et['montant_apayer']==0) {
                                                ?>
                                                <a href="#" class="btn btn-success">Facture Payé</a>
                                                <?php
                                            }else{
                                               ?>
                                                <a href="#" class="btn btn-danger">Facture Non Payé</a>
                                                <?php 
                                            }
                                        ?></td>
                                        <!--liens -->
                                        <td style="background-color: white; font-size: 5px;"><a onclick="return confirm('Etes-vous sûre...?');" href="../model/Supprimefacturenp.php?id=<?php echo($et['id'])?>" class='btn btn-danger'><span class="glyphicon glyphicon-trash"></span></a>
                                            <td style="background-color: white; font-size: 5px;"><a  href="editfacture-np.php?id=<?php echo($et['id'])?>" title="Editer cet enregistrement" class='btn btn-success'><span class="glyphicon glyphicon-pencil"></span></a>
                                        </td>
                                                    </tr>   
                                            <?php $c++; } ?>  
                                    </tbody>
                                </table>
                                </div>
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