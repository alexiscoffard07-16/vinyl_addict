<?php
// 1. On branche la base de données
require_once 'connexion.php';
// 2. On charge notre fameux moteur d'affichage (situé dans le dossier core)
require_once '../core/functions.php';

// 3. LE CERVEAU : On prépare nos requêtes et on récupère les données
$rqArtistes = $pdo->query("SELECT id_art, nom_art, img_art FROM Artiste LIMIT 4");
$rqFavori   = $pdo->query("SELECT titre_album, img_album FROM Album WHERE est_coup_de_coeur = 1");

$artistes = $rqArtistes->fetchAll(PDO::FETCH_ASSOC);
$favoris  = $rqFavori->fetchAll(PDO::FETCH_ASSOC);

// 4. L'AFFICHAGE : On appelle la fonction de ton cours et on lui envoie les données !
render('index', [   'pageTitle' => 'Accueil - Vinyl\'Addict',
                    'artistes'  => $artistes,
                    'favoris'   => $favoris
]);