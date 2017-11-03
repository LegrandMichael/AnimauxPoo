<?php

    require_once ('Animal.php');

    class Chat extends Animal{
      
        public function __construct($nom) {
            parent::__construct($nom);
        }

        public function parler() {
            echo '<div>'.$this->getNom().' dit meeoooww</div><br>';
        }
    }

?>