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
                        <a href="detail-vinyle.php?id=<?= $favori['id_album'] ?>" style="text-decoration: none; color: inherit;">
                            <img src="<?php echo htmlspecialchars($imgAlbum); ?>" alt="Pochette de <?php echo htmlspecialchars($favori['titre_album']); ?>" class="photo">
                        </a>
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
            <?php $cheminImage = !empty($artiste['img_art']) ? $artiste['img_art'] : '../images/default_artiste.png'; ?>
            
            <a href="detail-artiste.php?id=<?= $artiste['id_art'] ?>" style="text-decoration: none; color: inherit; display: block;">
                <img src="<?= htmlspecialchars($cheminImage) ?>" alt="Photo de <?= htmlspecialchars($artiste['nom_art']) ?>" class="photo">
                <h3><?= htmlspecialchars($artiste['nom_art']) ?></h3>
            </a>
</div>
    <?php } ?>
    </div>
</div>

<?php require __DIR__ . '/footer.php'; ?>