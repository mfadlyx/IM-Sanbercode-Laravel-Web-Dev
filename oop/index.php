<?php
require_once('animal.php');
require_once('Frog.php');
require_once('Ape.php');

//animalSheep
$sheep = new Animal("shaun");
echo "Name : $sheep->name" . "<br>";
echo "legs : $sheep->legs" . "<br>";
echo "cold blooded : $sheep->cold_blooded" . "<br> <br>";

//frog
$kodok = new frog("buduk");
echo "Name : $kodok->name" . "<br>";
echo "legs : $kodok->legs" . "<br>";
echo "cold blooded : $kodok->cold_blooded" . "<br>";
echo $kodok->yell() . "<br> <br>";

//ape
$sungokong = new ape("kera sakti");
echo "Name : $sungokong->name" . "<br>";
echo "legs : $sungokong->legs" . "<br>";
echo "cold blooded : $sungokong->cold_blooded" . "<br>";
echo $sungokong->yell() . "<br> <br>";
?>