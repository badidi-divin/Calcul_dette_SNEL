<?php 
    include '../bdd/connexion.php';

if (isset($_POST['displaySend'])) {
    $table='              
    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
    data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" class="table table-striped">
    <thead class="gradient-ohhappiness" style="font-weight:bold;">
        <tr>
            <th>ID</th><th>CODE-ABONNE</th><th>NOM-COMPLET</th><th>TELEPHONE</th><th>ADRESSE-COMPLETE</th><th>DATE-ENREGISTREMENT</th><th>OPERATION</th>
        </tr>
    </thead>';
        $requete="SELECT * FROM entree";                  
        $resultat=$connexion->query($requete);
        $number=1;

        while ($et=$resultat->fetch()){

        $id=$et['id'];
        $code_abonne=$et['code_abonne'];
        $nom_complet=$et['nom_complet'];
        $tel=$et['tel'];
        $adresse=$et['adresse'];
        $date=$et['date'];
        $table.='<tr>
        <td>'.$number.'</td>
        <td>'.$code_abonne.'</td>
        <td>'.$nom_complet.'</td>
        <td>+'.$tel.'</td>
        <td>'.$adresse.'</td>
        <td>'.$date.'</td>
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
