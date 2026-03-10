<?php
$fichier = 'time.txt';


$reponse = [
    "heure" => "N/A",
    "chrono" => 0
];

if (file_exists($fichier)) {
    
    $tempsDepartTimestamp = file_get_contents($fichier);
    
    
    $heureDepartFormatee = date('H:i:s', $tempsDepartTimestamp);
    
    
    $tempsEcoule = time() - $tempsDepartTimestamp;
    
    
    
    $reponse['heure'] = $heureDepartFormatee;
    $reponse['chrono'] = $tempsEcoule;
}


header('Content-Type: application/json');


echo json_encode($reponse);
?>