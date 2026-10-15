<?php require __DIR__ . '/header.php'; ?>

<div>
    <div class="entete" style="margin-top: 50px;">
        <h2>Résultats de recherche pour : "<?= htmlspecialchars($mot_cle) ?>"</h2>
    </div>

    <!-- Message si rien n'est trouvé -->
    <?php if (empty($resultats_artistes) && empty($resultats_albums) && !empty($mot_cle)): ?>
        <p style="margin-left: 50px;">Aucun résultat ne correspond à votre recherche.</p>
    <?php endif; ?>

    <!-- Affichage des VINYLES -->
    <?php if (!empty($resultats_albums)): ?>
        <div class="entete">
            <h2 style="color: #555; font-size: 16px;">Vinyles trouvés :</h2>
        </div>
        <div class="grille-artistes"> 
            <?php foreach ($resultats_albums as $album): ?>
                <div class="bloc">
                <?php 
                $cheminAlbum = !empty($album['img_album']) ? '../images/pochettes/' . $album['img_album'] : '../images/default_vinyle.png';
                ?>
                <!-- On ouvre le lien AVANT l'image -->
                <a href="detail-vinyle.php?id=<?= $album['id_album'] ?>" style="text-decoration: none; color: inherit;">
                    <img src="<?= htmlspecialchars($cheminAlbum) ?>" alt="Pochette de <?= htmlspecialchars($album['titre_album']) ?>" class="photo" onerror="this.src='../images/default_vinyle.png';">
                    <h3>
                        <?= htmlspecialchars($album['titre_album']) ?>
                    </h3>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <!-- Affichage des ARTISTES -->
    <?php if (!empty($resultats_artistes)): ?>
        <div class="entete" style="margin-top: 40px;">
            <h2 style="color: #555; font-size: 16px;">Artistes trouvés :</h2>
        </div>
        <div class="grille-artistes">
            <?php foreach ($resultats_artistes as $artiste): ?>
                <div class="bloc">
                    <?php 
                    $cheminArtiste = !empty($artiste['img_art']) ? $artiste['img_art'] : '../images/default_artiste.png'; 
                    ?>
                    <a href="detail-artiste.php?id=<?= $artiste['id_art'] ?>" style="text-decoration: none; color: inherit;">
                        <img src="<?= htmlspecialchars($cheminArtiste) ?>" alt="Photo de <?= htmlspecialchars($artiste['nom_art']) ?>" class="photo" onerror="this.src='../images/default_artiste.png';">
                        <h3>
                            <a href="artiste.php?id=<?= $artiste['id_art'] ?>">
                                <?= htmlspecialchars($artiste['nom_art']) ?>
                            </a>
                        </h3>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<?php require __DIR__ . '/footer.php'; ?>