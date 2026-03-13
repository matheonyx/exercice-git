<?php

// Configuration des règles : Dossier => Extensions autorisées
$rules = [
    'site'     => ['html', 'php'],
    'site/img' => ['png', 'jpg'],
    'site/css' => ['css'],
    'site/js'  => ['js']
];

$erreurs = 0;

foreach ($rules as $dossier => $allowedExts) {
    if (!is_dir($dossier)) {
        echo "❌ Erreur : Dossier '$dossier' manquant.\n";
        $erreurs++;
        continue;
    }

    echo "✅ Dossier '$dossier' trouvé. Vérification des fichiers...\n";

    // On scanne les fichiers du dossier
    $files = scandir($dossier);
    foreach ($files as $file) {
        // On ignore les dossiers et les points système (. et ..)
        if ($file === '.' || $file === '..' || is_dir("$dossier/$file")) continue;

        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));

        if (!in_array($ext, $allowedExts)) {
            echo "   ❌ Erreur : Fichier '$file' interdit dans '$dossier' (attendu : ." . implode(' ou .', $allowedExts) . ")\n";
            $erreurs++;
        } else {
            echo "   📄 Fichier '$file' valide (.$ext).\n";
        }
    }
}

// Vérification du dossier src (juste sa présence)
if (!is_dir('src')) {
    echo "❌ Erreur : Dossier 'src' manquant.\n";
    $erreurs++;
}

if ($erreurs > 0) {
    echo "\n⚠️ Total d'erreurs trouvées : $erreurs\n";
    exit(1);
}

echo "\n🚀 Arborescence et extensions parfaites !\n";
exit(0);