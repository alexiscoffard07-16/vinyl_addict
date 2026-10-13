<?php require __DIR__ . '/header.php'; ?>

<div>
    <div class="entete">
        <h2> Meilleurs ventes du moment :</h2>
        <a href="ventes.html" class="lien-voir">Voir tout</a>
    </div>
    
    <div class="conteneur-carrousel">
        <button id="btn-gauche">←</button>
        <div class="fenetre-carrousel">
            <div class="carrousel">
                <?php foreach ($favoris as $favori) { ?> 
                <div class="item-carrousel">
                    <?php
                        if (!empty($favori['img_album'])) 
                            $imgAlbum = '../images/pochettes/' . $favori['img_album'];
                        else 
                            $imgAlbum = '../images/default_vinyle.png'; 
                    ?>
                        <img src="<?php echo htmlspecialchars($imgAlbum); ?>" alt="Pochette de <?php echo htmlspecialchars($favori['titre_album']); ?>" class="photo">
                </div>
                <?php } ?>
            </div>
        </div>
        <button id="btn-droite">→</button>
    </div>
</div>

<div>
    <div class="entete">
        <h2> Artistes :</h2>
        <a href="artiste.php" class="lien-voir">Voir tous les artistes</a>
    </div>
    
    <div class="grille-artistes">
    <?php foreach ($artistes as $artiste) { ?>
        <div class="bloc">
            <?php 
            $cheminImage = !empty($artiste['img_art']) ? $artiste['img_art'] : '../images/default_artiste.png'; 
            ?>
            <img src="<?php echo htmlspecialchars($cheminImage); ?>" alt="Photo de <?php echo htmlspecialchars($artiste['nom_art']); ?>" class="photo">
            
            <h3>
                <a href="artiste.php?id=<?php echo $artiste['id_art']; ?>">
                    <?php echo htmlspecialchars($artiste['nom_art']); ?>
                </a>
            </h3>
        </div>
    <?php } ?>
    </div>
</div>

<?php require __DIR__ . '/footer.php'; ?>