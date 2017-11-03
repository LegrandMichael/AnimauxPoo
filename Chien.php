<?php
    require_once('Animal.php');
    class Chien extends Animal {

        public function __construct($nom)
        {
            parent::__construct($nom);
        }
        
        public function parler() {
            echo '<div>'.$this->getNom().' dit wouuf</div>';
        }

    }

?>