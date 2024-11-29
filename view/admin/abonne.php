<?php
    require_once 'include/session.php';
    $id=1;
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
                  
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <?php
                require_once 'include/connexion.php';
            
?>
        <div class="data-table-area mg-b-15" style="margin-left: 19px !important; font-size: 10px;">
              
            <div class="container-fluid" style="margin-top:80px;">
                <div style="margin-bottom: 10px;">
                 <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#completeModal">Ajouter</button>
                          &nbsp;&nbsp;
                        <a href="imprimer1.php"-- class="btn btn-success">Imprimer</a>
                </div>
                <div class="row">

               
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                         <div class="main-sparkline13-hd" style="border-radius: 5px; padding: 9px 4px 1px 9px;background-color:#141F29;">
                         <h1 style="color:white;font-size: 16px !important;letter-spacing: 0.2em"><i class="fa fa-product-hunt"></i> Liste des Abonnés<span class="table-project-n"></span>
                                </div>
                        <div class="sparkline13-list">
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright" id="displayDataTable">
                                                              
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
         
    <!-- Enregistrement  -->
        <div class="modal fade" id="completeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">AJOUTER</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                    <div class="form-group">
                        <label for="completename">Code Abonné:</label>
                        <input type="text" class="form-control" id="code_abonne" placeholder="Code Abonné" required="required"/>
                    </div>
                    <div class="form-group">
                        <label for="completename">Nom Complet:</label>
                        <input type="text" class="form-control" id="nom_complet" placeholder="nom_complet" required="required"/>
                    </div>
                    <div class="form-group">
                        <label for="completename">Téléphone:</label>
                        <input type="number" class="form-control" id="tel" placeholder="Télephone" required="required"/>
                    </div>
                    <div class="form-group">
                        <label for="completemobile">Adresse Complète:</label>
                        <input type="text" class="form-control" id="adresse" required="required" placeholder="adresse" />
                    </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="adduser()">Enregistrer</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
              </div>
            </div>
          </div>
    </div>
    </div>
    <!-- Fin Enregistrement  -->
    <!-- Enregistrement  -->
        <div class="modal fade" id="UpdateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">EDITION</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                    <div class="form-group">
                        <label for="completename">Code Abonné:</label>
                        <input type="text" class="form-control" id="code_abonne_edit" placeholder="Code Abonné" required="required"/>
                    </div>
                    <div class="form-group">
                        <label for="completename">Nom Complet:</label>
                        <input type="text" class="form-control" id="nom_complet_edit" placeholder="nom_complet" required="required"/>
                    </div>
                    <div class="form-group">
                        <label for="completename">Téléphone:</label>
                        <input type="number" class="form-control" id="tel_edit" placeholder="Télephone" required="required"/>
                    </div>
                    <div class="form-group">
                        <label for="completemobile">Adresse Complète:</label>
                        <input type="text" class="form-control" id="adresse_edit" required="required" placeholder="adresse" />
                    </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="updateDetails()">Edition</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                <input type="hidden" id="hiddendata">
              </div>
            </div>
          </div>
    </div>
    </div>
    <!-- Fin Enregistrement  -->
   <?php
        require_once 'include/foot_js.php';
   ?>

   <script type="text/javascript">
      //  --------------------Chargement des données dans -------------
         $(document).ready(function(){
            displayData();
        });
        function displayData(){
            var displayData="true";
            $.ajax({
                url:"../../model/display-abonne.php",
                type:'post',
                data:{
                    displaySend:displayData
                },
                success:function(data,status){
                    $('#displayDataTable').html(data);
                }
            });
        }
        // --------------------Fin -----------------------
              function adduser(){
        var answer1=$('#code_abonne').val();
        var answer2=$('#nom_complet').val();
        var answer3=$('#tel').val();
        var answer4=$('#adresse').val();

        $.ajax({
            url:"../../model/insert-abonne.php",
            type:'post',
            data:{
                answer1Send:answer1,
                answer2Send:answer2,
                answer3Send:answer3,
                answer4Send:answer4,
            },
            success:function(data,status){
                //Function to display data
                //console.log(status);
                $('#code_abonne').val('');
                $('#nom_complet').val('');
                $('#tel').val('');
                $('#adresse').val('');

                swal("Enregistrement effectué avec succès  !!","SNEL", "success");

                $('.swal-button').click(function(){
                     
                     
                    $('#completeModal').modal('hide');
                    displayData();
                })
               
                }
            });
        
    }
     // Delete record

     
    function DeleteUser(deleteid){
        $.ajax({
            url:"../../model/delete-abonne.php",
            type:'post',
            data:{
                deletesend:deleteid
            },
            success:function(data,status){
                swal("Suppression effectuée avec succès  !!","SNEL", "success");

                $('.swal-button').click(function(){
                    
                    displayData();
                    $('#completeModal').modal('hide');
                })

            }
        });
    }
    // Update Function
  //    ---------------------------------Edition des données----------------- ///
    function GetDetails(updateid){
        $('#hiddendata').val(updateid);

        $.post("../../model/update-abonne.php",{updateid:updateid},function(data,status){
            var userid=JSON.parse(data);
            $('#code_abonne_edit').val(userid.code_abonne);
            $('#nom_complet_edit').val(userid.nom_complet);
            $('#tel_edit').val(userid.tel);
            $('#adresse_edit').val(userid.adresse);
        });
        $('#UpdateModal').modal("show");
    }
    // ------Modification des données--------
    function updateDetails(){
        var code_abonne_edit=$('#code_abonne_edit').val();
        var nom_complet_edit=$('#nom_complet_edit').val();
         var tel_edit=$('#tel_edit').val();
          var adresse_edit=$('#adresse_edit').val();
        var hiddendata=$('#hiddendata').val();

        $.post("../../model/update-abonne.php",{
            code_abonne_edit:code_abonne_edit,
            nom_complet_edit:nom_complet_edit,
            tel_edit:tel_edit,
            adresse_edit:adresse_edit,
            hiddendata:hiddendata

        },function(data,status){
            swal("Modification effectuée avec succès  !!","SNEL", "success");
                $('.swal-button').click(function(){
                    $('#UpdateModal').modal('hide');
                    displayData();
                    
                })
        });
    }
    </script>

</body>
</html>