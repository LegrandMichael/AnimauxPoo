<?php

require_once('Chien.php');
require_once('Chat.php');
require_once('Animalerie.php');


$granola = new Chat("Granola");
$granola->parler();


$jasmin = new Chien("Jasmin");
$jasmin->parler();

$findus = new Animalerie('Findus');
$findus->ajouterAnimal($granola);
$findus->ajouterAnimal($jasmin);
$findus->afficherAnimaux();

//var_dump($findus);
//var_dump($jasmin);  
//var_dump($granola);

?>