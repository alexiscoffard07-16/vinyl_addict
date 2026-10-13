<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="Author" content="Alexis COFFARD" />
    <link rel="stylesheet" href="../styles/style.css" type="text/css" />
    <script src="../scripts/script.js" type="text/javascript"></script>
    <title><?= isset($pageTitle) ? htmlspecialchars($pageTitle) : "Vinyl'Addict" ?></title>
</head>
<body>
<header>
    <h1><a href="index.php" style="color: black; text-decoration: none;">Vinyl'Addict</a></h1>
    
    <nav class="menu-principal">
        <a href="coups-de-coeur.html" class="bandeau">Nos Coups de Coeur</a>
        <a href="genres.html" class="bandeau">Genres</a>
        <a href="artiste.php" class="bandeau">Artistes</a>
        <a href="vinyles.html" class="bandeau">Nos Vinyles</a>
    </nav>
    
    <div class="actions-header">
        <div class="conteneur-recherche">
            <input type="search" id="barre-recherche" placeholder="Un vinyle, un artiste..."/>
            <button class="btn-recherche" onclick="rechercherElement()">
                <img src="../images/icones/icone-recherche.png" class="icone-btn" alt="Rechercher">
            </button>
        </div>

        <div class="conteneur-panier">
            <a href="panier.html" class="btn-panier" onclick="afficherPanier()">
                <img src="../images/icones/icone-panier.png" class="icone-panier" alt="Panier">
            </a>
        </div>
    </div>
</header>