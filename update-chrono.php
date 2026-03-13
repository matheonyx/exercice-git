<?php
$file = 'time.txt';

if (file_exists($file)) {
    
    $startTime = file_get_contents($file);
    
    $elapsedTime = time() - $startTime;
    
    echo $elapsedTime;

} else {
    
    echo "0";
}
?>