<?php
$x=100;
$a=200;
function newCalc($x)
{
	$newnr=$x*0.75;
	echo "The 75% of the number $x  is ".$newnr."<br>";
}
newCalc($a);
newCalc($x);

?>