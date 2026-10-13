<?php require __DIR__ . '/header.php'; ?>

<div>
    <div class="conteneur-ariane">
        <button class="btn-accueil">
            <a href="index.php"><img src="../images/icones/icone-accueil.png" class="icone-accueil" alt="Retourner à l'accueil"></a>
        </button>
        <img src="../images/icones/icone-fleche.png" class="icone-fleche" alt="Flèche">
        <h4>Artistes</h4>
    </div>
</div>

<div>
    <div class="entete">
        <h2> Nos Artistes :</h2>
    </div>
    
    <div class="grille-artistes">
    <?php foreach ($artistes as $artiste) { ?>
        <div class="bloc">
            <?php 
            $cheminImage = !empty($artiste['img_art']) ? $artiste['img_art'] : '../images/default_artiste.png'; 
            ?>
            <!-- On garde le petit onerror qu'on a appris tout à l'heure ! -->
            <img src="<?php echo htmlspecialchars($cheminImage); ?>" alt="Photo de <?php echo htmlspecialchars($artiste['nom_art']); ?>" class="photo" onerror="this.src='../images/default_artiste.png';">
            
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