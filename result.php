<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat PHP</title>
</head>
<body>
    <h1>Résultat</h1>
    <div id="affichage-nom">
        <?php 
            if (isset($_POST['nom'])) {
                echo strtoupper(htmlspecialchars($_POST['nom'])); 
            }
        ?>
    </div>
    <a href="index.php">Retour</a>
</body>
</html>