<?php

// Cette fonction charge la bonne vue et lui transmet les données (variables)
function render(string $view, array $data = []): void
{
    // extract() transforme les clés du tableau en vraies variables 
    // (ex: 'pageTitle' devient la variable $pageTitle)
    extract($data);
    
    // On va chercher le fichier de la vue correspondante
    require __DIR__ . '/../views/view_' . $view . '.php';
}