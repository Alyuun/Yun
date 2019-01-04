<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Création de la page</title>
	</head>

	<body>
		<h2>Premier titre</h2>

		<p>
			Premier contenant afin d'écrire qu'on est perdus dans l'océan, mais qu'on est un poisson
		</p>

		<ul>
			<li style="color: blue;">Texte en poisson bleu</li>
			<li style="color: red;">Texte en poisson rouge</li>
			<li style="color: green">Texte en poisson vert</li>
		</ul>

		<?php
			// phpinfo(); // Affiche les informations (version php, apache, fichier de config...)
			echo "Es-tu un poisson ? ";		// Echo et Print sont identiques mais Echo est plus utilisé
			echo " Un poisson datant du ";
			echo date('d/m/y h:i:s'); // indique la date à un instant t
		?>
		<p>
			<?php
			$age = 20;
			?>
		</p>
		<p>
			<?php 
			$nombre = 11;
			$resultat = $nombre + 5 / 2 - $nombre;
			echo 'Le poisson a '.$resultat.' ans.';
			$nombre % 5;
			?>
		</p>
		<!-- Si le lien que vous souhaitez indiquer contient des "&"" alors il faut les remplacer par "&amp;"-->
		<p>
			<p>
				Bonjour, souhaitez-vous visiter <a href="https//openclassrooms.com"> OpenClassRooms </a> ?
			</p>	

			<?php
			if ($age <= 12) {
				echo "Salut poisson";
			}
			?>
		</p>


	</body>
	</html>