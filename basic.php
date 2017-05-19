<?php
$naam = "statement";

/* control structure */
/* if elseif else */
if () {

} elseif() {

} else {

}

/* Loops */

$i = 6;

do-while ($i <= 5) {
	echo "hoi!";
	$i++;
}

while ($i <= 5) {
	echo "hoi!";
	$i++;
} 

for ($i = 1, $i <= 5, $i++) {
	echo "hoi";
}

$students = array("voornaam" => "glenn", "voornaam" => "erick", "voornaam" => "jarno");

foreach ($students as $student) {
	echo $student;
}

foreach ($students as $key => $value) {
	echo $key . " " . $value;
}
