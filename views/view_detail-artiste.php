<?php require __DIR__ . '/header.php'; ?>
<?php require __DIR__ . '/ariane.php'; ?>

<!-- On ouvre la grande boîte Flexbox -->
<div class="conteneur-detail">
    
    <!-- Boîte de gauche : uniquement l'image -->
    <div class="detail-image">
        <?php 
        $cheminImage = !empty($resultat_artiste['img_art']) ? $resultat_artiste['img_art'] : '../images/artistes-groupes/default_artiste.png';
        ?>
        <img src="<?= htmlspecialchars($cheminImage) ?>" alt="Image de <?= htmlspecialchars($resultat_artiste['nom_art']) ?>" onerror="this.src='../images/artistes-groupes/default_artiste.png';">
    </div>

    <!-- Boîte de droite : toutes les informations -->
    <div class="detail-infos">
        <h2><?= htmlspecialchars($resultat_artiste['nom_art']) ?></h2>
        
        <p><strong>Genre :</strong> <?= htmlspecialchars($resultat_artiste['genre']) ?></p>
        <p><strong>Date de naissance :</strong> <?= htmlspecialchars($resultat_artiste['dte_naiss']) ?></p>
        <?= !empty($resultat_artiste['dte_mort']) ? "<p><strong>Date de mort :</strong> " . htmlspecialchars($resultat_artiste['dte_mort']) . "</p>" : "" ?>
        <p><strong>Ville de naissance :</strong> <?= htmlspecialchars($resultat_artiste['ville_naiss']) ?></p>
        <?= !empty($resultat_artiste['ville_mort']) ? "<p><strong>Ville de mort :</strong> " . htmlspecialchars($resultat_artiste['ville_mort']) . "</p>" : "" ?>
        <p><strong>Nationalité :</strong> <?= htmlspecialchars($resultat_artiste['nationalite']) ?></p>
    </div>
</div>

<div class="conteneur-detail">
    <div class="detail-infos">
        <h3>Biographie :</h3>
        <p><?= nl2br(htmlspecialchars($resultat_artiste['biographie'])) ?></p>
    </div>
</div>

<div class="conteneur-detail">
    <div class="detail-infos">
        <h3>Discographie :</h3>
        <?php if (!empty($resultat_artiste['discographie'])): ?>
            <ul>
                <?php foreach (explode("\n", $resultat_artiste['discographie']) as $album): ?>
                    <li><?= htmlspecialchars(trim($album)) ?></li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Aucune discographie disponible.</p>
        <?php endif; ?>
    </div>

<?php require __DIR__ . '/footer.php'; ?>