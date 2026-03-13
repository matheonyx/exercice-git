<?php
session_start();
$_SESSION["start"] = time();
echo "Chrono démarré à ".$_SESSION["start"];
?>
