<?php require_once('../model/login-admin.php'); ?>
<!Doctype html>
<html class="no-js" lang="en">
<head>
    <?php require_once('header.php'); ?>
    <style type="text/css">
        .space{
            margin-top:50px;
        }
    </style>
</head>
<body>
	<div class="contenair space col-md-6 col-xd-12 col-md-offset-3" >   
			<div class="panel panel-primary">

				<div class="panel-heading">
                     <h2 align="center">CONNEXION BACK-OFFICE</h2>
                    <div class="panel-body" style="background-color:#062e80">
                           <div class="form-group">
                                <label class="control-label">Nom d'utilisateur</label>
                                <input type="text" placeholder="Nom d'utilisateur" title="SVP entrez votre nom d'utilisateur" required="" value="" name="User" id="NomUt" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password" style="color:#FFFFFF; letter-spacing:0.1em">Mot de passe</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="Pwd" id="Pwd" class="form-control" autocomplete="off">
                            </div>
                            <div align="center">
                                <button class="btn btn-success" id="cnx">Se Connecter</button> 
                            </div>
                            <div align="center">
                                <a href="index.php" class="btn btn-primary">Partie FrontOffice</a>
                            </div>
                    </div>
                    <div class="alert alert-danger alert-mg-b alert-st-four is-no-visible" role="alert">
                            <i class="fa fa-times edu-danger-error admin-check-pro admin-check-pro-none" aria-hidden="true"></i>
                            <p class="message-mg-rt message-alert-none"></p>
                    </div>
                </div>
			</div>
			<div class="text-center login-footer">
				<p style="color:black; font-weight: bolder; letter-spacing: 0.1em">Copyright © 2023. Tous droits reservés.</a></p>
			</div>
		</div>   
    <?php require_once('footer.php'); ?>
    <script src="js/app/login.js"></script>
</body>
</html>