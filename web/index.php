<!DOCTYPE html>
<html lang="fr">

<?php
// Définition des variables globales
$GLOBALS["title-page"] = "Accueil";
$GLOBALS["id-page"] = "nav-accueil";
$GLOBALS["bdd-lecture-PDO"] = null;

// Inclusion du script permettant de se connecter à la BDD
// (et stockage de l'objet dans $GLOBALS["bdd-lecture-PDO"])
require("inclusions/connexion-bdd-lecture.php");

// Inclusion du script fournissant des fonctions permettant d'exécuter
// des requêtes SQL sur la BDD
require("inclusions/fonctions-bdd.php");

// Inclusion des méta-données de la page (<head>)
require("inclusions/head.php");
?>

<body>

	<?php
	// Inclusion de l'en-tête de la page (<header>)
	require("inclusions/header.php");
	?>

	<!-- Contenu principal de la page -->
	<main class="container px-5 mb-5">
		<h1>Récapitulatif de la programmation du festival 2022</h1>

		<p class="lead">Cette page affiche un récapitulatif de la programmation du <span class="fw-bolder">Vercors Music Festival 2022</span>.</p>

		<img src="images/vercors-music-festival-2022-banniere.png" style="display:block; margin:auto; width: 90%; max-width:600px;" alt="Bannière du Vercors Music Festival 2022">

		<section id="principale" class="row my-3">

			<!-- 1ère Card (à gauche) -->
			<div class="col-lg-6 col-sm-12 my-2">
				<div class="card">
					<h5 class="card-header">3 jours de concerts</h5>
					<div class="card-body">

						<?php
						// TODO Reprendre les lignes ci-dessous pour récupérer
						// les informations sur les concerts de chaque jour du festival 
						// et afficher ces informations dans la page web
						$infosConcert1erJuillet = null;
						// $infosConcert1erJuillet = executeRequeteSELECT(
						// 	$GLOBALS["bdd-lecture-PDO"],
						// 	"SELECT * FROM Concert ..." /* TODO Adapter la requête SQL */
						// );

						//var_dump($infosConcert1erJuillet); // TODO À supprimer après les tests

						$nbConcerts1erJuillet = "?????";
						$heureDeb1erJuillet = "?????";
						?>

						<ul>
							<!-- 01/07/2022 -->
							<li>
								Vendredi 1er juillet 2022 :
								<span class="donnee-bdd gras"><?= $nbConcerts1erJuillet ?></span> concerts à partir de
								<span class="donnee-bdd gras"><?= $heureDeb1erJuillet ?></span>
							</li>

							<!-- 02/07/2022 -->
							<li>
								Samedi 2 juillet 2022 :
								<span class="donnee-bdd gras">???</span> concerts à partir de
								<span class="donnee-bdd gras">???</span>
							</li>

							<!-- 03/07/2022 -->
							<li>
								Dimanche 3 juillet 2022 :
								<span class="donnee-bdd gras">???</span> concerts à partir de
								<span class="donnee-bdd gras">???</span>
							</li>
						</ul>

					</div>
				</div>
			</div>

			<!-- 2ème Card (à droite) -->
			<div class="col-lg-6 col-sm-12 my-2">
				<div class="card">
					<h5 class="card-header">3 scènes sur le plateau du Vercors</h5>
					<div class="card-body">

						<ul>
							<?php
							// TODO Reprendre les lignes ci-dessous pour récupérer
							// les informations sur les scènes du festival
							// et afficher ces informations dans la page web
							$tabScenes = null;
							// $tabScenes = executeRequeteSELECT(
							// 	$GLOBALS["bdd-lecture-PDO"],
							// 	"SELECT * FROM Scene" /* TODO Adapter la requête SQL */
							// );

							//var_dump($tabScenes); // TODO À supprimer après les tests

							if (!empty($tabScenes)) {
								// Si scènes trouvées => Parcours et affichage des scènes
								foreach ($tabScenes as $scene) {
									// Récupération de l'information dans la colonne "nom_scene"
									$nomScene = $scene["nom_scene"];
									echo "<li><span class='donnee-bdd gras'>" . $nomScene . "</li>";
								}
							} else {
								// Si aucune scène trouvée => Affichage d'un message
								echo "<i>(Information indisponible)</i>";
							}
							?>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<hr style="margin: 25px -20px" class="border border-1 opacity-100">

		<section id="livre-or">
			<h2 class="mb-3">Livre d'or du festival 2022</h2>
			<p>
				Vous avez participé au festival et vous avez (fortement) apprécié ?
				Laissez donc un message dans le
				<span class="fw-bolder">Livre d'or</span> !
			</p>

			<div class="card mb-4">
				<h5 class="card-header">Laisser un message dans le Livre d'or</h5>

				<!-- Formulaire qui redirige sur le script PHP : ajout-message-livre-or.php -->
				<form class="card-body" action="ajout-message-livre-or.php" method="post">
					<div class="mb-3 row">
						<label class="col-md-2 col-form-label required">Pseudo</label>
						<div class="col-md-10">
							<input name="pseudo" type="text" class="form-control" size="50" required>
						</div>
					</div>
					<div class="mb-3 row">
						<label class="col-md-2 col-form-label required">Message</label>
						<div class="col-md-10">
							<textarea name="message" class="form-control" rows="2" maxlength="200" required></textarea>
						</div>
					</div>
					<div class="text-center">
						<button type="submit" class="btn btn-primary">
							Enregistrer votre message dans le livre d'or
						</button>
					</div>
				</form>
			</div>

			<div class="card">
				<h5 class="card-header">Les 10 derniers messages du Livre d'or</h5>
				<div class="card-body text-center">

					<!-- TODO Récupérer et afficher les 10 derniers messages du Livre d'or
							(sachant que pour avoir un affichage correcte des messages,
								il faut générer un <figure> ... </figure> par message
								comme sur le site du résultat attendu) -->
					<figure>
						<blockquote class="blockquote">
							???Message du livre d'or???
						</blockquote>
						<figcaption class="blockquote-footer">
							<b>???Pseudo???</b> (???Date???)
						</figcaption>
					</figure>
				</div>
			</div>
		</section>
	</main>

	<!-- Inclusion du JS de Bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>