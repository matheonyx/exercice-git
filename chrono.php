<?php
session_start();
header('Content-Type: text/plain');
if (isset($_SESSION["start"])) {
    echo time() - $_SESSION["start"];
} else {
    echo "Pas démarré";
}
?>
