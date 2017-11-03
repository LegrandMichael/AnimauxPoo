<?php

require_once('Chien.php');
require_once('Chat.php');


$granola = new Chat("Granola");
$granola->parler();

var_dump($granola);

$jasmin = new Chien("Jasmin");
$jasmin->parler();

var_dump($jasmin);  

?>