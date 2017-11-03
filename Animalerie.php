<?php

    class Animalerie {

        private $listeAnimaux = [];

        public function faireParler() {

        }

        public function ajouterAnimal($animal){
            $this->listeAnimaux[] = $animal;
        }

        public function afficherAnimaux(){
            foreach ($this->listeAnimaux as $animal) {
                echo "<div>".$animal."</div>";
            }
        }

        
    }
?>