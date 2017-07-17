<!DOCTYPE html>

<html>

	<head>

		<link rel="stylesheet" type="text/css" href="style.css">
		<meta charset="UTF-8">

		<title>Page principale</title>

	</head>

	<body>

		<div id="global">

			<!-- entête -->
			<div id="entete">

				<div id="titre" align="center">

					<img src=img/nyancat.webp>
					<h1>Soyez la bienvenue !</h1>

				</div>

			</div>

			<!-- Navigateur -->
			<?php
				include("navigation.php");
			?>

			<!-- Corps de la page -->

			<div class="main_text">

				<br>
				
				<h1><u>Bienvenue sur mon site de présentation</u></h1>

				<br>

				<p id="mp_index">
					Sur ce site, vous pourrez trouvez différentes informations relatives à moi et à mon parcours professionnel. Je vous souhaite bonne visite en compagnie du guide !
					<br>
					<br>
					Vous pouvez naviguer à travers mes différentes pages, grâces à la barre de navigation plus haut, utilisez là, elle est là pour ça !
				</p>

			</div>

				

		</div>

		<?php
			include("pied_de_page.php");
		?>
		
	</body>

		

</html>