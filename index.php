<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta name="description" content="">
  	<meta name="author" content="">
	<title>SchoolBox</title>

	<link rel="stylesheet" type="text/css" href="css/accueil.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">

	<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="js/accueil.js"></script>

	<script type="text/javascript">
		$(function(){
			$("#authentification").hide();

			$("#btn-authentification").click(function(){
				$("#authentification").show('slow');
			})
		})
	</script>


	<style type="text/css">
		body{
			background-color: #056;
			font-family: 'calibri light';
		}
		a{
			margin: 1%;
		}
		button{
			margin: 1%;
		}
		form{
			background-color: white;
			padding: 2%;
			border-radius: 15px 15px 15px 15px;
		}
		legend{
			text-align: center;
		}
		input{
			margin: 1%;
		}
		#authentification{
			margin: 2%;
		}

	</style>
</head>
<body onload="text()">
	<div id="parent" class="container">
		<div class="blocDuMilieu" class="row">

			<div class="col-sm-1 col-md-1"></div>

			<div class="col-xs-12 col-sm-11 col-md-6" id="message">
				<h1>Bienvenu dans SchoolBox</h1>
				<h3>Une autre façon de rapprocher les écoles du Cameroun pour une expérience unique dans vos études</h3>

				<?php 
					if ($_COOKIE['nom']!=null AND $_COOKIE['classe']!=null AND $_COOKIE['ecole']!=null) 
						{
				?>
						<a href="accueil.php" class="btn btn-primary pull-right">Accueil</a>
				<?php
					}else
						{
				?>
						<a href="#authentification" class="btn btn-primary pull-right" id="btn-authentification"><span class="glyphicon glyphicon-user"></span> Se connecter</a>
				<?php } ?>
				

				
			</div>

			<div class="animation hidden-xs"></div>


			<div class="col-xs-12 col-sm-12 col-md-4" id="authentification">
				<form class="form-group" method="post" action="accueil.php">
					<fieldset>
						<legend>
							<span class="fa fa-users fa-3x"></span>
							<span class="fa fa-pencil fa-3x"></span>
						</legend>

						<label for="nom">Nom</label>
						<input type="text" name="nom" class="form-control" placeholder="votre nom" required="">

						<label for="classe">Classe</label>
						<select name="classe" required="" class="form-control">
							<optgroup label="3e">
								<option value="3e-bil">3e Bilingue</option>
								<option value="3e-esp">3e Espagnol</option>
								<option value="3e-all">3e Allemand</option>
							</optgroup>

							<optgroup label="1ere">
								<option value="1ere-bil">1ere Bilingue</option>
								<option value="1ere-esp">1ere Espagnol</option>
								<option value="1ere-all">1ere Allemand</option>
								<option value="1ere-c">1ere C</option>
								<option value="1ere-d">1ere D</option>
							</optgroup>

							<optgroup label="Tle">
								<option value="tle-bil">Tle Bilingue</option>
								<option value="tle-esp">Tle Espagnol</option>
								<option value="tle-all">Tle Allemand</option>
								<option value="tle-c">Tle C</option>
								<option value="tle-d">Tle D</option>
							</optgroup>
						</select>

						<label for="ecole">Ecole</label>
						<select name="ecole" class="form-control">
							<optgroup label="Mfou">
								<option value="lbil">Lycée bilingue</option>
								<option value="lclassique">Lycée classique</option>
							</optgroup>
						</select>

						<input type="submit" name="" value="Valider" class="btn btn-primary pull-right">
						
					</fieldset>
				</form>
			</div>

		</div>

	</div>

</body>
</html>