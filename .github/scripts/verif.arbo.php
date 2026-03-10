<?php

$dossiers = ['site/img', 'site/css', 'site/js', 'src'];
$erreurs = 0;

foreach ($dossiers as $dossier) {
    if (is_dir($dossier)) {
        echo "✅ Dossier '$dossier' trouvé.\n";
    } else {
        echo "❌ Erreur : Dossier '$dossier' manquant.\n";
        $erreurs++;
    }
}

if ($erreurs > 0) {
    exit(1); // Dit à GitHub que le test a échoué
}

echo "Structure parfaite !";
exit(0);