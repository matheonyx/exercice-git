<?php
$file = 'time.txt';

$startTime = time();


file_put_contents($file, $startTime);

echo "Heure de départ enregistrée.";
?>