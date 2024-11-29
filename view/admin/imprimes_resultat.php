<?php
	session_start();
	require_once '../../bdd/connexion.php';

	$requete="SELECT * FROM creance";
	$ps=$connexion->query($requete);
	$id=1;


	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tableau de Bord</title>
	<link rel="stylesheet" href="tt/css/test.css">
	<style type="text/css">
		@page
		{
			size:A4;
			margin:0; 

		}
		#print-btn{
			display: none;
			visibility: none;
		}
		.margetop{
			margin-top: 10px;
		}
		.spacer{
			margin-top: 10px;
		}
		.space{
			margin-top: 70px;
		}
		.spac{
			margin-top: 80px;
		}
		.a{
			text-align:center;
			text-decoration: blink;
		}
	</style>
</head>
<body>
	<!--************************ Header ***********************************-->
	<!-- Navigation -->

			<div class="container headings text-center margetop" >
				<div style="margin-bottom:30px">
					<h2 class=" pt-1" style="font-weight: bold;">SNEL</h2>
				</div>
			</div>
		<div class="container col-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
						<h4>LISTE DES FACTURES PAYES NORMALEMENT</h4>
					</div>	
					<!-- Le corps du tableau où l'on mettra le contenu -->
					<div class="panel-body">
						<table class="table table-striped" style="background-color: white; font-size: 12px;">
							<thead>
								<tr>
					 <th>ID</th><th>CODE-ABONNE</th><th>NUM-FACTURE</th><th>MONTANT-A-PAYER(CDF)</th><th>MONTANT-PAYER(CDF)</th><th>RESTE</th><th>DESCRIPTION</th><th>DATE-OPERATION</th>
								</tr>
							</thead>
							<tbody>
								 <?php while ($et=$ps->fetch()){?>
                                <tr>
                                <td ><?php  echo($et['id'])?></td>
                                        <td><?php  echo($et['code_abonne'])?></td>
                                        <td><?php  echo($et['num_facture'])?></td>
                                        <td><?php  echo($et['montant_apayer'])?></td>
                                        <td><?php  echo($et['montant_payer'])?></td>
                                        <td><?php  echo($et['reste'])?></td>
                                        
                                        <td><?php  echo($et['description'])?></td>
                                        <td><?php  echo($et['date_operation'])?></td>
                                <!--liens -->
                                            </tr>   
                                    <?php $id++;} ?>  
							</tbody>
						</table>
					</div>
				</div>	
			</div>
	<!-- Circulation de la page -->
	
	
	<!-- Affichage inscris end -->
		
	




<!-- ***********footer Ends******************** -->
<!-- **********************Code Javascript*********************-->
	<script src="tt/js/jquery-3.2.1.min.js"></script>
	<script src="tt/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		  $(document).ready(function(){
            window.print();
        });
	</script>
</body>
</html>
