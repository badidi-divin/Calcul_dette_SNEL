<?php 
    include '../bdd/connexion.php';

if (isset($_POST['displaySend'])) {
    $table='              
    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
    data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" class="table table-striped">
    <thead class="gradient-ohhappiness" style="font-weight:bold;font-size:10px;">
        <tr>
            <th>ID</th><th>NOM_COMPLET</th><th>MOT DE PASSE</th><th>CLASSE</th><th>OPERATION</th>
        </tr>
    </thead>';
        $requete="SELECT * FROM eleve";                  
        $resultat=$connexion->query($requete);
        $number=1;

        while ($et=$resultat->fetch()){

        $id=$et['code_eleve'];
        $nom=$et['nom_utilisateur'];
        $enclaire=$et['enclaire'];
        $classe=$et['classe'];
        $table.='<tr>
        <td>'.$number.'</td>
        <td>'.$nom.'</td>
        <td>'.$enclaire.'</td>
        <td>'.$classe.'</td>
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
<script>
        function choix(){
        var answer1=$('#motcle').val();
        $.ajax({
            url:"../model/select-classe.php",
            type:'get',
            data:{
                answer1Send:answer1,
            },
            success:function(data,status){
                //Function to display data
                    displayData(data);
               
                }
            });
        
    }
</script>