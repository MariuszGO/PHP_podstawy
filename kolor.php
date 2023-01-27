<?php




if( $_GET['x'] == "Losuj" ){

    echo '<a href="kolor.html">kolor.html</a><br>';
$r= rand(1,255);
$g= rand(1,255);
$b= rand(1,255);

echo '    <form action="kolor.php" method="get">

<select name="wielkosc">
        <option>10</option>
        <option>12</option>
        <option>14</option>
		<option>16</option>
		<option>18</option>
		<option>20</option>
	</select>

<input type="submit" value="Losuj" name="x">
<br>
<br>



</form>
';


}
else{
    $r = $_GET['r'];
$g = $_GET['g'];
$b = $_GET['b'];
}
$w =$_GET['wielkosc'];

$kolor =  "background-color:rgb($r,$g,$b)";


echo "<p style='font-size:$w'>TEKST</p>";

echo "<body style=$kolor>";

echo "R: " . $r . " G: " . $g . " B: " . $b ."<br>"; 


echo "</body>";


?>


    


    </form>