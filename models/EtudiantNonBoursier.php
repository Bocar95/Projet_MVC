<?php

    class EtudiantNonBoursier extends Etudiant{

        protected $adresse; 

        public function getAdresse(){

            return $this->adresse;
        }

        public function setAdresse($adresse){

            $this->adresse=$adresse;
        }

        public function setProfil($profil){

        }
        
        public function hydrate($row){

            $this->id= $row['id'];
            $this->email=     $row['email'];
            $this->telephone= $row['telephone'];
            $this->profil=    $row['profil'];
           

            
        }
    }