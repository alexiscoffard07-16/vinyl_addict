<?php 

require_once 'connexion.php';
require_once '../core/functions.php';

$id = isset($_GET['id']) ? trim($_GET['id']) : ""; 

$resultat_artiste = [];

if (!empty($id)) 
{
    $stmtArtistes = $pdo->prepare("SELECT * FROM Artiste WHERE id_art = :id");
    $stmtArtistes->execute(['id' => $id]);
    $resultat_artiste = $stmtArtistes->fetch(PDO::FETCH_ASSOC);
}

// On gère le titre en toute sécurité (s'il trouve le vinyle, il met le titre, sinon un message d'erreur)
$titrePage = $resultat_artiste ? "Détail de l'artiste : " . $resultat_artiste['nom_art'] : "Artiste introuvable";

render('detail-artiste', [  'pageTitle'          => $titrePage,
                            'resultat_artiste'   => $resultat_artiste,
                            'ariane'             => 
                            [
                                    'Artistes'                        => 'artiste.php', // Étape 1 du chemin
                                    $resultat_artiste['nom_art']      => ''
                            ]
]);

?>