<!DOCTYPE html>
<html>
<head>
	<title>Schulung</title>
    <meta charset="UTF-8">
    <style>
        .main {
            text-align: center;
            margin-top: 45vh;
        }
        .input[type='submit'] {
            display: hidden;
        }
        .ergebnis {
            font-size: 1.5rem;
        }
    </style>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js">
	$(document).ready(function() {
		$('#berechnung').focus().select(); 
	});
	</script>
</head>
<body>
<div class="main">
<form action="<?php  echo $_SERVER["PHP_SELF"];   ?>" method="post">

	Zahl1<br>
	<input type="text" name="zahl1"><br>

	Berechnung<br>
	<select name="rechenart">
		<option value="addieren">+ addieren</option>
		<option value="subtrahieren">- subtrahieren</option>
		<option value="multiplizieren">* multiplizieren</option>
		<option value="dividieren">/ dividieren</option>
	</select>
	<br>
	Zahl2<br>
	<input type="text" name="zahl2"><br>

	<input type="submit" value="Absenden"><br>

</form>
</div>

<?php
if(isset($_POST["zahl1"]))
{
	$zahl1=(float)$_POST["zahl1"];
	$zahl2=(float)$_POST["zahl2"];
	$rechenart=$_POST["rechenart"];

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
}
?>
<div class="ergebnis"><?php echo $ergebnis ?></div>

</body>
</html>
