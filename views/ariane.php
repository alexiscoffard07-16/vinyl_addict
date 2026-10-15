<?php if (isset($ariane) && !empty($ariane)): ?>
<div class="conteneur-ariane">
    <button class="btn-accueil">
        <a href="index.php"><img src="../images/icones/icone-accueil.png" class="icone-accueil" alt="Retourner à l'accueil"></a>
    </button>
    
    <!-- La boucle qui génère la suite du chemin -->
    <?php foreach ($ariane as $nom_page => $lien): ?>
        <img src="../images/icones/icone-fleche.png" class="icone-fleche" alt="Flèche">
        
        <?php if ($lien !== ''): ?>
            <!-- S'il y a un lien, on rend le texte cliquable -->
            <h4><a href="<?= htmlspecialchars($lien) ?>" style="color: inherit; text-decoration: none;"><?= htmlspecialchars($nom_page) ?></a></h4>
        <?php else: ?>
            <!-- Si c'est la page actuelle (pas de lien), on affiche juste le texte -->
            <h4><?= htmlspecialchars($nom_page) ?></h4>
        <?php endif; ?>
        
    <?php endforeach; ?>
</div>
<?php endif; ?>