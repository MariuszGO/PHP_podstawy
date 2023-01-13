<?php
echo("Działa Serwer PHP");
echo("<HR>");
//zmienne
$liczba = 10;
$zm = "tekst";
$zm1 = true;
$zm2 = 10.22;
$zm3  = 'd';
//tablica
$zm4 = array(323,222,223);

echo $liczba . " " . gettype($liczba) . "<br>";
echo $zm . " " . gettype($zm). "<br>";
echo $zm1 . " " . gettype($zm1). "<br>";
echo $zm2 . " " . gettype($zm2). "<br>";
echo $zm3 . " " . gettype($zm3). "<br>";
echo $zm4[0] . " " . gettype($zm4). " Elementy " . gettype($zm4[0]) . "<br>";

$a = 20; $b= 40;
//intrukcja if else
echo "<br> instrukcja warunkowa if <br>";
if($a> $b) echo "Liczba a>b i równa $a <br>";  else echo "Liczba b>a i równa $b <br>";
/*
Komentarz wielolinijkowy
Pętla for
*/
echo "<br> for <br>";
for($i=0;$i<100;$i++) echo "$i ";

//Pętla do while
echo "<br> do while <br>";
$i=0;
do{
echo "$i ";
$i++;
}while($i<100);

//Pętla while
echo "<br>while <br>";
$i=0;
while($i<100){
echo "$i ";
$i++;
}

//switch case
$d = 2;
echo "<br><br>";

switch($d){
    case 1: {
        echo "poniedziałek";
        break;
    }
    case 2: {
        echo "wtorek";
        break;
    }
    case 5: {
        echo "piatek";
        break;
    }
    default:
    echo "wybrałeś inną wartość";
}

echo "<br><br>Switch zamieniony na if: <br>";

if($d==1){
    echo "poniedzialek";
}
elseif($d==2){
    echo "wtorek";
}
elseif($d==5){
    echo "piątek";
}
else{
    echo "wybrałeś inną wartość";
}
//czy parzysta
$e = 2341;
if ($e % 2 == 0) echo ("$e liczba parzysta"); else echo ("$e liczba nieparzysta");
//losowanie 10 liczb z przedziału od 10 do 210;
echo "<BR>";
for ($i=0;$i<10;$i++){
    $tab[$i] = rand(10,210);
    echo $tab[$i] . " ";
}
//Sortowanie
echo "<br>sort <br>";
sort($tab);
for ($i=0;$i<10;$i++){
    
    echo $tab[$i] . " ";
}

echo "<br>rsort <br>";
rsort($tab);
for ($i=0;$i<10;$i++){
    
    echo $tab[$i] . " ";
}


?>



