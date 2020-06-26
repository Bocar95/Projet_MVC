<?php

    class EtudiantNonLoge extends Etudiant{

        protected $montant;

        public function getMontant(){

            return $this->montant;
        }

        public function setMontant($montant){

            $this->montant=$montant;
        }

    }