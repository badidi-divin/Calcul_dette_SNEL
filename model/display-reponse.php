<?php 
    include '../bdd/connexion.php';

if (isset($_POST['displaySend'])) {
    $table='              
    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
    data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" class="table table-striped">
    <thead class="gradient-ohhappiness" style="font-weight:bold;font-size:10px;">
        <tr>
            <th>ID</th><th>REPONSE</th><th>REFERENCE DE LA QUESTION</th><th>NOTATION</th><th>OPERATION</th>
        </tr>
    </thead>';
        $requete="SELECT * FROM answer";                  
        $resultat=$connexion->query($requete);
        $number=1;

        while ($et=$resultat->fetch()){

        $id=$et['id'];
        $name=$et['name'];
        $ref_id=$et['ref_id'];
        $not_id=$et['notation'];
        $table.='<tr>
        <td>'.$number.'</td>
        <td>'.$name.'</td>
        <td>'.$ref_id.'</td>
        <td>'.$not_id.'</td>
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
