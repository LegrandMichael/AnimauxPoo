<?php

require_once('Chien.php');
require_once('Chat.php');


$granola = new Chat("Granola");
$granola->parler();


$jasmin = new Chien("Jasmin");
$jasmin->parler();

//var_dump($jasmin);  
//var_dump($granola);

?>