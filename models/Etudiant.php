<?php

    class Etudiant implements IApplication{

        protected $id;
        protected $matricule;
        protected $prenom;
        protected $nom;
        protected $mail;
        protected $telephone;
        protected $date;
        protected $type;
        protected $type_bourse;
        protected $type_bourse_non_loger;
        protected $chambre;
        protected $adresse;

        //Le constructeur

        public function __construct($row=null){

            if($row!=null){
                $this->hydrate($row);
            }

        }

            public function hydrate($row){

                if ($row['type']=="boursier_non_loger"){

                    $this->matricule= $row['matricule'];
                    $this->prenom= $row['prenom'];
                    $this->nom= $row['nom'];
                    $this->mail=   $row['mail'];
                    $this->telephone=   $row['telephone'];
                    $this->date=   $row['date'];
                    $this->type=   $row['type'];
                    $this->type_bourse=   $row['type_bourse'];

                }

                if ($row['type']=="boursier_loger"){

                    $this->matricule= $row['matricule'];
                    $this->prenom= $row['prenom'];
                    $this->nom= $row['nom'];
                    $this->mail=   $row['mail'];
                    $this->telephone=   $row['telephone'];
                    $this->date=   $row['date'];
                    $this->type=   $row['type'];
                    $this->type_bourse=   $row['type_bourse'];
                    $this->chambre=   $row['chambre'];
            
                }

                if ($row['type']=="non_boursier"){

                    $this->matricule= $row['matricule'];
                    $this->prenom= $row['prenom'];
                    $this->nom= $row['nom'];
                    $this->mail=   $row['mail'];
                    $this->telephone=   $row['telephone'];
                    $this->date=   $row['date'];
                    $this->type=   $row['type'];
                    $this->adresse=   $row['adresse'];
            
                }
        
            }

        //Les getters
        public function getId(){
            return $this->id;
        }

        public function getMatricule(){
            return $this->matricule;
        }

        public function getPrenom(){
            return $this->prenom;
        }
        
        public function getNom(){
            return $this->nom;
        }

        public function getMail(){
            return $this->mail;
        }

        public function getTelephone(){
            return $this->telephone;
        }

        public function getDate(){
            return $this->date;
        }

        public function getType(){
            return $this->type;
        }

        public function getTypeBourse(){
            return $this->type_bourse;
        }

        /*public function getTypeBourseNonLoger(){
            return $this->type_bourse_non_loger;
        }*/

        public function getChambre(){
            return $this->chambre;
        }

        public function getAdresse(){
            return $this->adresse;
        }
        

        //Les setters
        public function setId($id){
            $this->id=$id;
        }

        public function setMatricule($matricule){
            $this->matricule=$matricule;
         }

        public function setPrenom($prenom){
            $this->prenom=$prenom;
        }
        
        public function setNom($nom){
            $this->nom=$nom;
        }

        public function setMail($mail){

            $this->mail=$mail;
        }

        public function setTelephone($telephone){

            $this->telephone=$telephone;
        }

        public function setDate($date){

            $this->date=$date;
        }

        public function setType($type){

            $this->type=$type;
        }

        public function setTypeBourse(){
            $this->type_bourse=$type_bourse;
        }

        /*public function setTypeBourseNonLoger(){
            $this->type_bourse_non_loger=$type_bourse_non_loger;
        }*/

        public function setChambre(){
            $this->chambre=$chambre;
        }

        public function setAdresse(){
            return $this->adresse=$adresse;
        }
        


    }