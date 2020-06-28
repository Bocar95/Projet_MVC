<?php

    abstract class Etudiant implements IApplication{

        protected $id;
        protected $matricule;
        protected $nom;
        protected $prenom;
        protected $email;
        protected $telephone;
        protected $dateNais;
        protected $type;
        protected $profil;
        protected $adresse;

        //Le constructeur

        public function __construct($row=null){

            if($row!=null){
                $this->hydrate($row);
            }

        }

        
        


        //Les getters
        public function getId(){
            return $this->id;
        }
        public function getMatricule(){
           return $this->matricule;
        }
        public function getNom(){
            return $this->nom;
        }

        public function getPrenom(){
            return $this->prenom;
        }

        public function getEmail(){

            return $this->email;
        }

        public function getTelephone(){

            return $this->telephone;
        }

        public function getDateNais(){

            return $this->dateNais;
        }

        public function getType(){
            return $this->type;
        }

        public function getProfil(){
            return $this->profil;
        }

        //Les setters
        public function setId($id){
            $this->id=$id;
        }
        public function setMatricule($matricule){

           $this->matricule=$matricule;
        }
        public function setNom($nom){

            $this->nom=$nom;
        }

        public function setPrenom($prenom){

            $this->prenom=$prenom;
        }

        public function setEmail($email){

            $this->email=$email;
        }

        public function setTelephone($telephone){

            $this->telephone=$telephone;
        }

        public function setDateNais($dateNais){

            $this->dateNais=$dateNais;
        }

        public function setType($type){

            $this->type=$type;
        }

        public function setProfil($profil){

            $this->profil=$profil;
        }
        


    }