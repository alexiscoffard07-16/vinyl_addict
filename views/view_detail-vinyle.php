<?php require __DIR__ . '/header.php'; ?>

<!-- On ouvre la grande boîte Flexbox -->
<div class="conteneur-detail">
    
    <!-- Boîte de gauche : uniquement l'image -->
    <div class="detail-image">
        <?php 
        $cheminImage = !empty($resultat_vinyle['img_album']) ? '../images/pochettes/' . $resultat_vinyle['img_album'] : '../images/default_vinyle.png';
        ?>
        <img src="<?= htmlspecialchars($cheminImage) ?>" alt="Pochette de <?= htmlspecialchars($resultat_vinyle['titre_album']) ?>" onerror="this.src='../images/default_vinyle.png';">
    </div>

    <!-- Boîte de droite : toutes les informations -->
    <div class="detail-infos">
        <h2><?= htmlspecialchars($resultat_vinyle['titre_album']) ?></h2>
        
        <p><strong>Artiste :</strong> <a href="detail-artiste.php?id=<?= $resultat_vinyle['id_art'] ?>"><?= htmlspecialchars($resultat_vinyle['nom_art']) ?></a></p>
        <p><strong>Date de sortie :</strong> <?= htmlspecialchars($resultat_vinyle['dte_sortie']) ?></p>
        <p><strong>Durée :</strong> <?= htmlspecialchars($resultat_vinyle['duree_album']) ?></p>
    </div>
</div>

<div class="conteneur-detail">
    <div class="detail-infos">
        <h3>Liste des titres :</h3>
        <?php if (!empty($resultat_vinyle['lst_titres'])): ?> <!-- Correction ici : lst_titres -->
            <ol>
                <?php foreach (explode("\n", $resultat_vinyle['lst_titres']) as $titre): ?>
                    <li><?= htmlspecialchars(trim($titre)) ?></li>
                <?php endforeach; ?>
            </ol>
        <?php else: ?>
            <p>Aucun titre disponible.</p>
        <?php endif; ?>
    </div>
</div>

<?php require __DIR__ . '/footer.php'; ?>