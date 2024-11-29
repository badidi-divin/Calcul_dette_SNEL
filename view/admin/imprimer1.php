<?php
	session_start();
	require_once '../../bdd/connexion.php';

	$requete="SELECT * FROM entree";
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
						<h4>LISTE DES ABONNES</h4>
					</div>	
					<!-- Le corps du tableau où l'on mettra le contenu -->
					<div class="panel-body">
						<table class="table table-striped" style="background-color: white; font-size: 12px;">
							<thead>
								<tr>
					 <th>ID</th><th>CODE</th><th>NOM-COMPLET</th><th>TELEPHONE</th><th>ADRESSE</th><th>DATE-ENREGISTREMENT</th>
								</tr>
							</thead>
							<tbody>
								 <?php while ($et=$ps->fetch()){?>
                                <tr>
                                <td><?php echo $id; ?></td>
						        <td><?php echo $et['code_abonne'] ?></td>
						        <td><?php echo $et['nom_complet'] ?></td>
						        <td><?php echo $et['tel'] ?></td>
						        <td><?php echo $et['adresse'] ?></td>
						        <td><?php echo $et['date'] ?></td>
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
