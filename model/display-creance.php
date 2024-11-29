<?php 
    include '../bdd/connexion.php';

if (isset($_POST['displaySend'])) {
    $table='              
    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
    data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" class="table table-striped">
    <thead class="gradient-ohhappiness" style="font-weight:bold;">
        <tr>
            <th>ID</th><th>CODE-ABONNE</th><th>NUM-FACTURE</th><th>MONTANT-A-PAYER($)</th><th>MONTANT-PAYER($)</th><th>RESTE</th><th>DATE-OPERATION</th><th>ACTIONS</th>
        </tr>
    </thead>';
        $requete="SELECT * FROM creance";                  
        $resultat=$connexion->query($requete);
        $number=1;

        while ($et=$resultat->fetch()){

        $id=$et['id'];
        $code_abonne=$et['code_abonne'];
        $num_facture=$et['num_facture'];
        $montant_apayer=$et['montant_apayer'];
        $montant_payer=$et['montant_payer'];
        $reste=$et['reste'];
        $date_operation=$et['date_operation'];
        $table.='<tr>
        <td>'.$number.'</td>
        <td>'.$code_abonne.'</td>
        <td>'.$num_facture.'</td>
        <td>+'.$montant_apayer.'</td>
        <td>'.$montant_payer.'</td>
        <td>'.$reste.'</td>
        <td>'.$date_operation.'</td>
        <td>
            <button class="btn btn-primary" onclick="GetDetails('.$id.')"><span class="glyphicon glyphicon-pencil"></span></button>
            <button class="btn btn-danger" onclick="DeleteUser('.$id.')"><span class="glyphicon glyphicon-trash"></span></button>
        </td>
        </tr>';
        $number ++;
    }
    $table.='</table>';
    echo $table;
}
?>
    <!-- TRAITEMENT PERSONNEL
        ============================================ -->
<script src="js/app/produit-process.js"></script>
<script src="js/data-table/bootstrap-table.js"></script>
<script src="js/data-table/tableExport.js"></script>
<script src="js/data-table/data-table-active.js"></script>
<script src="js/data-table/bootstrap-table-editable.js"></script>
<script src="js/data-table/bootstrap-editable.js"></script>
<script src="js/data-table/bootstrap-table-resizable.js"></script>
<script src="js/data-table/colResizable-1.5.source.js"></script>
<script src="js/data-table/bootstrap-table-export.js"></script>
<script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/scrollbar/mCustomScrollbar-active.js"></script>
