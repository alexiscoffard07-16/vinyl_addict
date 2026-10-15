<?php 

require_once 'connexion.php';
require_once '../core/functions.php';

$id = isset($_GET['id']) ? trim($_GET['id']) : ""; 

$resultat_vinyle = [];

if (!empty($id)) 
{
    // Recherche du Vinyle
    // Recherche du Vinyle
    $stmtAlbums = $pdo->prepare("
        SELECT Album.id_album, Album.titre_album, Album.img_album, Album.dte_sortie, Album.duree_album, Album.lst_titres, Artiste.img_art, Artiste.nom_art
        FROM Album 
        JOIN Artiste ON Album.id_art = Artiste.id_art 
        WHERE Album.id_album = :id
    ");
    $stmtAlbums->execute(['id' => $id]);
    $resultat_vinyle = $stmtAlbums->fetch(PDO::FETCH_ASSOC);
}

// On gère le titre en toute sécurité (s'il trouve le vinyle, il met le titre, sinon un message d'erreur)
$titrePage = $resultat_vinyle ? 'Détail du vinyle : ' . $resultat_vinyle['titre_album'] : 'Vinyle introuvable';

render('detail-vinyle', [   
    'pageTitle'         => $titrePage,
    'resultat_vinyle'   => $resultat_vinyle
]);
?>