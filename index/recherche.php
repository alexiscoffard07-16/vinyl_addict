<?php
// 1. On branche la base de données et le moteur d'affichage
require_once 'connexion.php';
require_once '../core/functions.php';

// 2. LE CERVEAU : On récupère la recherche
$mot_cle = isset($_GET['q']) ? trim($_GET['q']) : "";

$resultats_artistes = [];
$resultats_albums = [];

if (!empty($mot_cle)) {
    // Recherche des Vinyles
    $stmtAlbums = $pdo->prepare("
        SELECT Album.id_album, Album.titre_album, Album.img_album, Artiste.img_art 
        FROM Album 
        JOIN Artiste ON Album.id_art = Artiste.id_art 
        WHERE Album.titre_album LIKE :recherche
    ");
    $stmtAlbums->execute(['recherche' => '%' . $mot_cle . '%']);
    $resultats_albums = $stmtAlbums->fetchAll(PDO::FETCH_ASSOC);

    // Recherche des Artistes
    $stmtArtistes = $pdo->prepare("SELECT id_art, nom_art, img_art FROM Artiste WHERE nom_art LIKE :recherche");
    $stmtArtistes->execute(['recherche' => '%' . $mot_cle . '%']);
    $resultats_artistes = $stmtArtistes->fetchAll(PDO::FETCH_ASSOC);
}

// 3. L'AFFICHAGE : On envoie toutes nos variables à la vue
render('recherche', [   'pageTitle'          => 'Recherche : ' . $mot_cle,
                        'mot_cle'            => $mot_cle,
                        'resultats_albums'   => $resultats_albums,
                        'resultats_artistes' => $resultats_artistes
]);