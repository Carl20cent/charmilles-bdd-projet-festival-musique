<?php
// Redirection vers la page principale (qui s'effectura à la fin du script)
header('Location: index.php#livre-or');

// Informations de connexion à la BDD
$GLOBALS["bdd-lecture-ecriture-PDO"] = null;

// Inclusion du script permettant de se connecter à la BDD
// (et stockage de l'objet dans $GLOBALS["bdd-lecture-ecriture-PDO"])
require("inclusions/connexion-bdd-lecture-ecriture.php");

/**
 * Fonction qui récupère et renvoie l'adresse IP du visiteur courant.
 * (Fonction fournie À NE PAS MODIFIER)
 */
function get_ip()
{
	// IP si internet partagé
	if (isset($_SERVER['HTTP_CLIENT_IP'])) {
		return $_SERVER['HTTP_CLIENT_IP'];
	}
	// IP derrière un proxy
	elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		return $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	// Sinon : IP normale
	else {
		return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : NULL);
	}
}

var_dump($_POST); // (TODO À supprimer après les tests)

// TODO Récupérer les informations du formulaire


// TODO Vérifier que les informations du formulaire sont correctes
// (et si c'est le cas, "assainissement" des données afin d'éviter les failles XSS)


// TODO Si les informations sont correctes : Insérer le message dans la BDD
// (pour cela, vous aurez besoin de la connexion à la BDD stockée dans :
//   $GLOBALS["bdd-lecture-ecriture-PDO"] et donc de compléter 
//   le script PHP : connexion-bdd-lecture-ecriture.php )

