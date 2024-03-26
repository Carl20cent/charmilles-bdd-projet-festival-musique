<?php
// Informations de connexion à la BDD
// (avec votre utilisateur qui a des droits de LECTURE & ÉCRITURE)
// TODO Compléter avec les informations de connexion de votre propre BDD
$url_hote_postgres = "...";
$nom_base = "...";
$nom_utilisateur_base = "...";
$mdp_utilisateur_base = "...";

// Vérification des informations de connexion
if (
	empty($url_hote_postgres) || empty($nom_base)
	|| empty($nom_utilisateur_base) || empty($mdp_utilisateur_base)
) {
	// Si jamais une des informations est manquante, on affiche un message d'erreur
	echo '<p class="message-erreur">ERREUR : Une des informations de connexion est manquante !</p>';
}

// Définition de la TimeZone pour les dates avant instanciation de l'objet PDO
// (ça évite certains Warning quand cette timezone n'est pas dans le php.ini)
date_default_timezone_set('Europe/Paris');

$pdoOptions = [
	PDO::ATTR_TIMEOUT => 3, // in seconds
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

// Connexion à la BDD en utilisant les "PHP Data Objects" (PDO)
try {
	// Définition et stockage de l'objet de connexion
	$GLOBALS["bdd-lecture-ecriture-PDO"] = new PDO(
		'pgsql:host=' . $url_hote_postgres . ';dbname=' . $nom_base,
		$nom_utilisateur_base,
		$mdp_utilisateur_base,
		$pdoOptions
	);
} catch (Exception $e) {
	// Si jamais on n'arrive pas à se connecter à la base,
	// on affiche un message d'erreur
	echo '<p class="message-erreur">ERREUR : Problème de connexion à la BDD dont les détails sont :<br> <i>' . $e->getMessage() . '</i></p>';
}
