
TP : Tests Unitaires avec PHPUnit

Étudiant : Liebe Mathéo



Structure du Projet :

- src/Validator.php : Classe contenant la logique (JSON + Date de demain).

- tests/MesDatesTest.php : Tests unitaires vérifiant le format et la date.

- .github/workflows/lint.yml : Action GitHub pour le Lint et les Tests.



Note sur le Reporting (Couverture de code) :

L'environnement local (Windows) ne disposant pas du driver Xdebug, la commande `--coverage-text` ne génère pas de rapport visuel. 

Cependant, la classe Validator.php ne contient qu'une seule méthode qui est testée intégralement par MesDatesTest.php. 

La couverture du code source dans le répertoire /src est donc de 100%.

