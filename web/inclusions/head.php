<head>
	<?php
		// Définition de la TimeZone pour les dates
		// (ça évite certains Warning quand cette timezone n'est pas dans le php.ini)
		date_default_timezone_set('Europe/Paris');
	?>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?= $GLOBALS["title-page"] ?? "TITRE" ?> - Vercors Music Festival 2022</title>

	<link rel="icon" type="image/x-icon" href="images/favicon-VMF.svg">

	<!-- Inclusion du CSS de Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

	<style>
		/* CSS custom */
		:root {
			--bs-border-width: 2px;
		}

		.donnee-bdd {
			color: #427b73;
			font-size: 1.1em;
		}

		.donnee-test {
			color: #6c757d;
			font-size: 1.1em;
		}

		.gras {
			font-weight: bold;
		}

		.message-erreur {
			font-size: 1.4em;
			color: firebrick;
			margin: 15px;
		}

		a.lien-card {
			color: var(--bs-body-color);
			text-decoration: none;
		}

		label.required:after {
			content: " *";
			color: red;
		}
	</style>
</head>