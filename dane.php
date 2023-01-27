<?php
/* dla metody post 
    $imie = $_POST['imie'];
    $naz = $_POST['nazwisko'];
    $nr = $_POST['nr'];
*/
//POST http://localhost/4bt/dane.php
//GET http://localhost/4bt/dane.php?imie=JAN&nazwisko=KOWALSKI&nr=12


$imie = $_GET['imie'];
$naz = $_GET['nazwisko'];
$nr = $_GET['nr'];



    echo "Twoje imie to: $imie a nazwisko to: $naz i numer w dzienniku to: $nr"; 



?>