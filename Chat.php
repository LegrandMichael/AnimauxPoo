<?php

    require_once ('Animal.php');

    class Chat extends Animal{
      
        public function parler() {
            echo '<div>'.$this->getNom().' dit meeoooww</div><br>';
        }
    }

?>