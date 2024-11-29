<?php
	session_start();
	require_once '../../bdd/connexion.php';

	$requete="SELECT * FROM entree WHERE mouvement='Sorties'";
	$ps=$connexion->query($requete);
	$id=1;
	// Total Prévisionnels
	 $nblmd=$connexion->prepare("SELECT SUM(prevision) AS prix_total FROM entree WHERE mouvement='Sorties'");
     $nblmd->execute();
     $nblmd=$nblmd->fetch()['prix_total'];
     // Total Réalités
	 $nblmd2=$connexion->prepare("SELECT SUM(realite) AS prix_total FROM entree WHERE mouvement='Sorties'");
     $nblmd2->execute();
     $nblmd2=$nblmd2->fetch()['prix_total'];

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
					<h2 class=" pt-1" style="font-weight: bold;">123TechDigit</h2>
					<img src="./img/11111.PNG" align="center" width="100px" height="100px">
				</div>
			</div>
		<div class="container col-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
						<h4>BUDGET SUR LES DEPENSES DU CENTRE</h4>
					</div>	
					<!-- Le corps du tableau où l'on mettra le contenu -->
					<div class="panel-body">
						<table class="table table-striped" style="background-color: white; font-size: 12px;">
							<thead>
								<tr>
					 <th>ID</th><th>DESIGNATION</th><th>PREVSIONS</th><th>REALITES</th><th>SESSION</th><th>DATE-ENREGISTREMENT</th>
								</tr>
							</thead>
							<tbody>
								 <?php while ($et=$ps->fetch()){?>
                                <tr>
                          <td><?php echo $id; ?></td>
						        <td><?php echo $et['designation'] ?></td>
						        <td><?php echo $et['prevision'] ?> $</td>
						        <td><?php echo $et['realite'] ?> $</td>
						        <td><?php echo $et['dates'] ?></td>
						        <td><?php echo $et['date_enreg'] ?></td>
                                <!--liens -->
                                            </tr>   
                                    <?php $id++;} ?>  
							</tbody>
							 <tfoot style="font-size: 17px !important;">
                                <tr>
                                   <th>Total:</th>
                                   <th></th>
                                   <th>(<?php echo $nblmd."$";?>)</th>
                                   <th>(<?php echo $nblmd2."$";?>)</th>
                                   <th></th>
                                   <th></th>

                                </tr>
                            </tfoot>
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
