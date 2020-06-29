<?php

    class EtudiantDao extends Manager{


        public function __construct(){

            $this->tableName='etudiant';
            $this->className='Etudiant';
        }

        public function addEtudiant($obj){

        }

        public function setEtudiant($id){

        }
        public function deleteEtudiant($id){

        }

        public function getEtudiant(){
            return $this->findAll();
        }

        public function add($obj){ 

            $matricule = $obj->getMatricule();
            $prenom = $obj->getPrenom();
            $nom = $obj->getNom();
            $mail =   $obj->getMail();
            $telephone = $obj->getTelephone();
            $date = $obj->getDate();
            $type =   $obj->getType();
            $type_bourse = $obj->getTypeBourse();
            $chambre = $obj->getChambre();
            $adresse =   $obj->getAdresse();

            $sql = "INSERT INTO etudiant(matricule, prenom, nom, mail, telephone, date, type, type_bourse, chambre, adresse) 
                    VALUES ('$matricule', '$prenom', '$nom', '$mail', '$telephone', '$date', '$type', '$type_bourse', '$chambre', '$adresse')";
            $data = $this->executeUpdate($sql);

            return $data;

        }
        
        
    }