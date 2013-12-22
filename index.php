<?php

include 'Kobieta.php';
include 'Mezczyzna.php';
$ob = new Kobieta("Aga");
$ob1 = new Mezczyzna("Mateusz");
$ob2 = new Mezczyzna("Lukasz");
$ob->addObservator($ob1);
$ob->addObservator($ob2);
$ob->changeTrousersToSkirt();

//=============================

$ob1->addObservator($ob);
$ob1->changeBlouseToShirt();