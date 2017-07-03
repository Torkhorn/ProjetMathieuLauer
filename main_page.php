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
				<h1 >Soyez la bienvenue !</h1>

			</div>

		</div>

		<!-- Navigateur -->
			<?php
				include("navigation.php");
			?>

			<article id="main_text">
				<h1>Bienvenue sur mon site de présentation</h1>

				<br>
				<p>
					Sur ce site, vous pourrez trouvez différentes informations relatives à moi et à mon parcours professionnel. Je vous souhaite bonne visite en compagnie du guide !
					<br>
					<br>
					Vous pouvez naviguer à travers mes différentes pages, grâces à la barre de navigation plus haut, utilisez là, elle est là pour ça !
				</p>
			</article>

		</div>

	</div>
		
	</body>


	<br>
	<br>
	<br>
	<br>

	<footer class="container">
		
		<?php
			include("pied_de_page.php");

		?>
	</footer>

</html>