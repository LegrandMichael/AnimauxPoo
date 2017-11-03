<?php

    class Animal {

        private $nom;

        public function __construct($nom){
            $this->nom = $nom;
        }

        public function setNom($nom){
            
        }

        public function getNom(){
            return $this->nom;
        }
    }

?>