<?php
require("procédure-afficherTabEntiers.php");
require("fonction-saisirTabEntiers.php");
require("fonction-moyenne.php");
$x=0;
for($i=1;$i<=16;$i++){
    $x=$x+$i;
}
$x=$x/16;
echo("$x");