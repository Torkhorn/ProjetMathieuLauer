<!DOCTYPE html>

<html>

	<head>

		<link rel="stylesheet" type="text/css" href="style.css">
		<meta charset="UTF-8">
		<title>Curriculum vitae</title>


	</head>

	<body>

	<div id="global">

		<!-- entête -->
		<?php
			include("entete.php")
		?>

		<!-- Navigateur -->
		<?php
			include("navigation.php");
		?>

		<!-- Corps de la page -->
		<section id="coordonnees" algin="center">

			<p><b>LAUER Mathieu</b><br>
			Adresse<br>
			Adresse mail<br>
			Numéro de téléphone<br>
			</p>
			<br>
			<br>

		</section>
	


		<div id="cv">	

			<section id="ep">

				<h2><u>EXPERIENCE PROFESSIONNELLE</u></h2>

				<ul>
					<li> 2017 : Formation développeur web et objets connectés</li>
					<li><time datetime="2016-08">Aout</time> à <time datetime="2016-09">Septembre</time> 2016 : Agent de production, HCE Allemagne</li>
					<li><time datetime="2013-11">Novembre</time>2013 - <time datetime="2015-04">Avril</time> 2015 : Assistant informatique, lycée Charles Jully, Saint-Avold</li>
				</ul>

				<br>

			</section>

			<section id="etude">

				<h2><u>CURSUS SCOLAIRE</u></h2>

				<ul>
					<li>2013 : Licence professionnelle Admninistration Systèmes et Réseaux</li>
					<li>2012 : DUT Informatique</li>
					<li>2009 : Baccalaureat scientifique</li>
				</ul>

				<br>

			</section>

			<section id="cp">

				<h2><u>COMPETENCES PROFESSIONNELLE</u></h2>

				<ul>
					<li>Langages de programmation : C, C++, Java,...</li>
					<li>Virtualisation de machines</li>
					<li>Développement web : HTML, CSS, JS, PHP,...</li>
					<li>Suite bureautique</li>
					<li>Methode AGILE</li>
					<li>Configuration de switch, routeur, en commandes</li>
					<li>Environnement Windows/Linux</li>

				</ul>

				<br>

			</section>

			<section id="stage">
				<h2><u>STAGES</u></h2>

				<ul>
					<li>Entreprise DODO, Saint-Avold : logiciel de monitoring SHINKEN</li>
					<li>Lorraine Call Center, Forbach : BDD et interface web</li>
				</ul>

				<br>
				
			</section>
			


			<article id="loisir">
				<h2><u>CENTRES D'INTERETS</u></h2>
				<br>
				Jeux vidéos, jeux de plateaux, nouvelles technologies, musique, Moyen-age, Seconde guerre mondiale...

			

			</article>

		</div>



	</div>

	

	</body>
	<div id="footer">

		<?php
			include("pied_de_page.php");
		?>
		
	</div>

</html>