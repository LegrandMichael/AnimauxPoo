<?php
    require_once('Animal.php');
    class Chien extends Animal {

        public function __construct($nom)
        {
            parent::__construct($nom);
        }
        
        public function parler() {
            echo '<div>Ouaf</div>';
        }

    }

?>