<?php

/* numeric array */
$naam = array("glenn", "erick", 4, true);

$naam[0] = "glenn";
$naam[1] = "erick";
$naam[2] = 4;
$naam[3] = true;

echo $naam[1]; //erick

$array[key] = value;

/* associative array */
$glenn = array(
	"voornaam" => "glenn",
	"achternaam" => "nugteren",
	"leeftijd" => 17,
	"geslacht" => "man"
);

$glenn["voornaam"] = "glenn";
$glenn["achternaam"] = "nugteren";

echo $glenn["voornaam"];


/* multi dimensional array */
$leerlingen = array(
	"glenn" => array(
		"voornaam" => "glenn",
		"achternaam" => "nugteren"
	),
	"erick" => array(
		"voornaam" => "erick",
		"achternaam" => "kok"
	),
	"jarno" => array(
		"voornaam" => "jarno",
		"achternaam" => "de leeuw"
	)
);

$leerlingen["glenn"]["voornaam"] = "glenn";
$leerlingen["glenn"]["achternaam"] = "nugteren";

echo $leerlingen["glenn"]["voornaam"];
