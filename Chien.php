<?php

    require_once('Animal.php');

    class Chien extends Animal {

        public function parler() {
            echo '<div>'.$this->getNom().' dit wouuf</div><br>';
        }

    }

?>