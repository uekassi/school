<?php
	if(isset($_POST['nom']) AND isset($_POST['classe']) AND isset($_POST['ecole'])){
		setcookie('nom', $_POST['nom'], time()+365*24*3600, null, null, false, true);
		setcookie('classe', $_POST['classe'], time()+365*24*3600,null, null, false, true);
		setcookie('ecole', $_POST['ecole'], time()+365*24*3600,null,null,false,true);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		<?php 
				switch ($_COOKIE['ecole']) {
					case 'lbil':
						echo "Lycée Bilingue";
						break;
					case 'lclassique':
						echo "Lycée Classique";
						break;
					
					default:
						echo "Ecole indéterminée";
						break;
				}
		?>
	</title>

	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">

	<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

	<script type="text/javascript">
		$(function(){
			$("#msg1").hide();
			$("#msg2").hide();
			$("#msg3").hide();
			$("#msg4").hide();
			$("#msg5").hide();

			/*Action pour telephone*/
			$("#box1").hover(function(){
				$("#msg1").show('slow');
			})
			$("#box1").mouseleave(function(){
				$("#msg1").hide('slow');
			})

			$("#box2").hover(function(){
				$("#msg2").show('slow');
			})
			$("#box2").mouseleave(function(){
				$("#msg2").hide('slow');
			})

			$("#box3").hover(function(){
				$("#msg3").show('slow');
			})
			$("#box3").mouseleave(function(){
				$("#msg3").hide('slow');
			})

			$("#box4").hover(function(){
				$("#msg4").show('slow');
			})
			$("#box4").mouseleave(function(){
				$("#msg4").hide('slow');
			})

			$("#box5").hover(function(){
				$("#msg5").show('slow');
			})
			$("#box5").mouseleave(function(){
				$("#msg5").hide('slow');
			})

		})

		$(function piedPage(){

		})


	</script>

	<style type="text/css">
		body{
			background-color: #056;
			color: white;
			font-family: 'calibri light';
		}
		div{
			text-align: center;
			background-size: 100% 100%;
		}
		footer{
			background-color: black;
			opacity: 0.8;
			color: white;
		}
		.menu{
			height: 200px;
		}
		.menu:hover{
			border: solid;
		}
		.cercle{
			height: 35px;
			width: 35px;
			border-radius: 100% 100% 100% 100%;
			background-color: #056;
			border-width: 0px;
			opacity: 0.5;
		}
		.cercle:hover{
			opacity: 1;
		}
		div .btn{
			background-color: white;
		}
		div .btn:hover{
			background-color: #056;
			color: white;
		}
		#info{
			color: black;
			background-color: white;
			border-radius: 10px 10px 10px 10px;
		}
		.btn-vide{
			background-color: transparent;
			border: 0px;
			opacity: 0.5;
		}
		.btn-vide:hover{
			opacity: 1;
		}

	</style>
</head>
<body onload="modal()">
		<section style="margin: 5%;" id="entete">
			<h3>
					<?php 
						switch ($_COOKIE['ecole']) {
							case 'lbil':
								echo "Lycée Bilingue";
								break;
							case 'lclassique':
								echo "Lycée Classique";
								break;
								
							default:
								echo "Vous n'avez pas détermié votre école";
								echo "<a href=\"index.php\"> Retour </a>";
								break;
						}
					?>				
			</h3>
<!--
			<div class="btn-group pull-right">
				<button class="btn-vide dropdown-toggle" data-toggle="dropdown"><span class="fa fa-list fa-2x"></span></button>
				<ul class="dropdown-menu">
					<li><a href="">Option 1</a></li>
					<li><a href="">Oprion 2</a></li>
					<li><a href="">Option 3</a></li>
				</ul>
			</div>	
			-->		
		</section>

	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-4 menu" style="background-image: url(images/study.webp); color: black;" id="box1">
				<h2>Espace de Cours</h2>
				<p id="msg1" style="color: #000;">
					Découvrez la multitude des cours mis à votre disposition par vos professeurs.<br/>
				</p>
				<a href="includes/espaceEleve.php"  class="btn">Rejoindre votre espace de cours</a>
			</div>

			<div class="col-xs-12 col-sm-6 col-md-4 menu" style="background-image: url(images/pencil.webp); color: black;" id="box2">
				<h2>Exercices et Evaluations</h2>
				<p id="msg2">
					Des exercices en lignes
				</p>
				<a href="exercices/exercice1.php" class="btn">Accéder aux exercices</a>
			</div>

			<div class="col-xs-12 col-sm-6 col-md-4 menu" style="background-image: url(images/notebook.webp); color: black;" id="box3">
				<h2>Olympiades</h2>
				<p id="msg3">
					Un concours entre élève ça vous tente ! Tester votre niveau
				</p>
				<a href="includes/olympiades/accueil.php" class="btn">Commençons</a>
			</div>

			<div class="col-xs-12 col-sm-6 col-md-6 menu" style="background-image: url(images/street.jpg); color: black;" id="box4">
				<h2>Magasines</h2>
				<p id="msg4">
					Etudier c'est découvrir ! L'intelligence ne se voudrait pas statique
				</p>
				<a href="m.scienceshumaines.com" class="btn">Accéder aux magasines</a>
			</div>


			<div class="col-xs-12 col-sm-6 col-md-6 menu" style="background-image: url(images/people.webp); color: black;" id="box5">
				<h2>Actualité d'ici et d'ailleurs</h2>
				<p id="msg5">
					Restez informé
				</p>
				<a href="www.journalducameroun.com" class="btn">Découvrir l'actualité</a>
			</div>
		</div>
	</div>

	<footer>
		<section class="btn-group" onfocus="piedPage()">
			<button class="btn btn-link dropdown-toggle" data-toggle="dropdown">Contactez nous</button>
			<ul class="dropdown-menu">
				<li><a href="mailto:ulrichekassi2001@gmail.com" class="btn"><span class="fa fa-envelope"></span> Envoyez un mail</a></li>
				<li><a href="tel:671090423" class="btn"><span class="fa fa-phone"></span> Appelez</a></li>
			</ul>
		</section>

		<a href="" class="btn">Guide d'utilisation</a>		
		<a href="" class="btn">A propos de l'application</a>
		<br/>
		<form action="" method="post" class="container">
				<h4 style="color: white; margin: 2%;">Laissez nous votre avis</h4>

				<input type="email" name="mail" placeholder="votre mail" class="form-control" required="required" style="margin-bottom: 3%;">
				<textarea name="commnentaire" placeholder="Votre avis" class="form-control" required="required"></textarea>
				<input type="submit" name="" class="btn" style="background-color: #056; color: white; margin: 1%;" value="Envoyer">
				<br/>
				<button class="pull-right cercle">
					<a href="#entete"  style="color: white; margin: 2%;"><span class="fa fa-arrow-up fa-1x"></span></a>
				</button>
		</form>


	</footer>

</body>
</html>