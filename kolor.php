<?php

$r = $_GET['r'];
$g = $_GET['g'];
$b = $_GET['b'];

$kolor =  "background-color:rgb($r,$g,$b)";

echo "<body style=$kolor>";

echo "R: " . $r . " G: " . $g . " B: " . $b ."<br>"; 


echo "</body>";

?>