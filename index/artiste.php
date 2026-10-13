<?php
// 1. On branche la base de données
require_once 'connexion.php';
// 2. On charge le moteur d'affichage
require_once '../core/functions.php';

// 3. LE CERVEAU : On récupère tous les artistes
$rqArtistes = $pdo->query("SELECT id_art, nom_art, img_art FROM Artiste");
$artistes = $rqArtistes->fetchAll(PDO::FETCH_ASSOC);

// 4. L'AFFICHAGE : On envoie les données à la vue "view_artiste.php"
render('artiste', [     'pageTitle' => 'Les Artistes - Vinyl\'Addict',
                        'artistes'  => $artistes
]);