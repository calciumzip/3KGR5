<?php
	$xml = new domdocument("1.0");
	$xml->load("3KGR5.xml");

	$Typhoons = $xml->getElementsByTagName("typhoon");

	foreach($Typhoons as $typhoon)
	{
		$id = $typhoon->getAttribute("id");
		$name = $typhoon->getElementsByTagName("name")->item(0)->nodeValue;
		$windspeed = $typhoon->getElementsByTagName("windspeed")->item(0)->nodeValue;
		$DamageToProperty = $typhoon->getElementsByTagName("DamageToProperty")->item(0)->nodeValue;
		$year = $typhoon->getElementsByTagName("year")->item(0)->nodeValue;
		$deaths = $typhoon->getElementsByTagName("deaths")->item(0)->nodeValue;

		echo "<b>Typhoon ID: </b> $id<br>";
		echo "<b>Typhoon Name: </b> $name<br>";
		echo "<b>Windspeed: </b> $windspeed<br>";
		echo "<b>Damage To Property: </b> $DamageToProperty<br>";
		echo "<b>Year: </b> $year<br>";
		echo "<b>Deaths: </b> $deaths<br>";
		echo "<br>";
	}	
?>

