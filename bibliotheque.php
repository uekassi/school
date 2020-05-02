<!DOCTYPE html>
<html>
<head>
	<title>Bibliothèque</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">

	<script type="text/javascript" src="bootstrap/js/jquery.js"></script>

	<style type="text/css">
		.livre{
			height: 200px;			
			text-align: center;
		}
		.livre:hover{
			border: inset;
			border-color: #056;
		}
		div{
			background-size: 100% 100%;
		}
		header{
			margin-bottom: 5%;
		}
	</style>
</head>
<body class="container">
	<header>
		<h1>Bibliothèque</h1>
		<a href="#informatique" class="btn pull-right">Informatique</a>
		<a href="#mathematique" class="btn pull-right">Mathématique</a>
		<a href="#physique" class="btn pull-right">Physique</a>
	</header>

	<div id="informatique" class="row">
		<h2>Section Informatique</h2>
		<div class="col-xs-12 col-sm-6 col-md-3 livre" style="background-image: url(../images/study.webp);">
			<h3>Internet</h3>
			<a href="../Cours-eleves/Informatique/1coursInternet.pdf" class="btn">Le lire</a>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-3 livre" style="background-image: url(../images/dumbnell.jpg); color: white;">
			<h3>Se familiariser avec Access 2003</h3>
			<a href="../Cours-eleves/Informatique/Access2003.pdf" class="btn">Le lire</a>
		</div>

		<div class=" col-xs-12 col-sm-6 col-md-3 livre" style="background-image: url(../images/old.webp); color: white;">
			<h3>Annale Info</h3>
			<a href="../Cours-eleves/Informatique/Annale-Info-ESG.pdf" class="btn">Le lire</a>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-4 livre " style="background-image: url(../images/sunrise.webp);">
			<h3>Initiation HTML & CSS</h3>
			<a href="../Cours-eleves/Informatique/initiation-HTML-CSS.pdf" class="btn">Le lire</a>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-4 livre" style="background-image: url(../images/beach.jpg); color: white;">
			<h3>Se familiariser avec Word 2007</h3>
			<a href="../Cours-eleves/Informatique/word2007.pdf" class="btn">Le lire</a>
		</div>

	</div>

	<div id="mathematique" class="row" style="margin-top: 2%;">
		<h2>Section Mathématique</h2>

		<div class="col-xs-12 col-sm-6 col-md-3 livre" style="background-image: url(../images/laptop.webp);">
			<h3>Les polynomes</h3>
			<a href="../Cours-eleves/Mathematique/cours-polynomes2.pdf" class="btn">Le lire</a>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-3 livre" style="background-image: url(../images/learning-types.webp);">
			<h3>Les équations</h3>
			<a href="../Cours-eleves/Mathematique/Equations.pdf" class="btn">Le lire</a>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-4 livre" style="background-image: url(../images/workout1.webp);">
			<h3>Mathématique avancée</h3>
			<a href="../Cours-eleves/Mathematique/livreDeMath.pdf" class="btn">Le lire</a>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-4 livre" style="background-image: url(../images/people.webp);">
			<h3>Suites numériques</h3>
			<a href="../Cours-eleves/Mathematique/suites-numeriques.pdf" class="btn">Le lire</a>
		</div>


	</div>

	<div id="physique" style="margin-top: 2%;">
		
	</div>

</body>
</html>