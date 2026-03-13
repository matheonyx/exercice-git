<?php

require_once "MesDates.php";

$objDate = new \UPJV\MesDates();
echo $objDate->demain() . PHP_EOL;