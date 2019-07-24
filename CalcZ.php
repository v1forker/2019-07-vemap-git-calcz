<!DOCTYPE html>
<html>
<head>
	<title>Schulung</title>
	<meta charset="UTF-8">
</head>
<body>
<form action="<?php  echo $_SERVER["PHP_SELF"];   ?>" method="post">

<input type="text" name="berechnung" class="berechnung"><br>
<input type="submit" value="Absenden"><br>

</form>

<?php
if(isset($_POST["zahl1"]))
{
	$berechnung = $_POST['berechnung'];
	$split_berechnung = preg_split('/([+\-\*\/])/', $berechnung, null, PREG_SPLIT_DELIM_CAPTURE);

	if(count($split_berechnung)==3)) {

		$zahl1 = $split_berechnung[0];
		$rechenart = $split_berechnung[1];
		$zahl2 = $split_berechnung[2];

		echo "Zahl1: $zahl1";
		echo "<br>\n";
		echo "Zahl2: $zahl2";
		echo "<br>\n";
		echo $rechenart;
		echo "<br>\n";

		switch($rechenart)
		{
			case "addieren": $ergebnis=$zahl1+$zahl2;
					break;
			case "subtrahieren": $ergebnis=$zahl1-$zahl2;
					break;
			case "multiplizieren": $ergebnis=$zahl1*$zahl2;
					break;
			case "dividieren": 
					if($zahl2==0)
					{
						$ergebnis="Keine Divisionen durch null!";
					}
					else
					{
						$ergebnis=$zahl1/$zahl2;	
					}
					
					break;
			default: $ergebnis="keine gültige Rechenart";
		}
	} else {
		$ergebnis = 
	}

	echo "ERGEBNIS:" . $ergebnis;

}
?>

</body>
</html>