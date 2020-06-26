<?php

    class EtudiantNonBoursier extends Etudiant{

        protected $adresse; 

        public function getAdresse(){

            return $this->adresse;
        }
        public function setAdresse($adresse){

            $this->adresse=$adresse;
        }
        public function setProfil($adresse){

        }
    }