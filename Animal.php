<?php

    abstract class Animal {

        private $nom;

        public function __construct($nom){
            $this->nom = $nom;
        }

        public function setNom($nom){
            
        }

        public function getNom(){
            return $this->nom;
        }

        abstract public function parler();

        public function __toString() {
            return get_class($this). " : " .$this->nom;
        }
    }

?>