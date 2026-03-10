<?php

$nbr = sizeof($_FILES['userfile']['name']);

print "Nombre de fichiers : " . $nbr . "<br>";

for ($i = 0; $i < $nbr; $i++) {
    
    $nom = $_FILES['userfile']['name'][$i];
    
    $tmpData = $_FILES['userfile']['tmp_name'][$i];
    
    $taille = $_FILES['userfile']['size'][$i];
    
    move_uploaded_file($tmpData, "../upload/" . $nom);
    
    print "$nom récupéré <br>";
}

?>