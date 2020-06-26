<?php

    class Chambre implements IApplication{

        protected $numCham;
        protected $numDep;
        protected $type;
        protected $id_chambre;

        //Le constructeur

        public function __construct($row=null){

            if($row!=null){
                $this->hydrate($row);
            }

        }

        public function hydrate($row){

            $this->numCham= $row['numCham'];
            $this->numDep= $row['numDep'];
            $this->type=   $row['type'];
            $this->id_chambre= $row['id_chambre'];
               
        }

        //les getters
        public function getnumCham(){
            return $this->numCham;
        }

        public function getNumDep(){
            return $this->numDep;
        }

        public function getType(){
            return $this->type;
        }

        public function getidCham(){
            return $this->id_chambre;
        }

        //les setters
        public function setnumCham($numCham){
            $this->numCham=$numCham;
        }

        public function setNumDep($numDep){
            $this->numDep=$numDep;
        }

        public function setType($type){
            $this->type=$type;
        }

        public function setidCham($id_chambre){
            $this->id_chambre=$id_chambre;
        }
    }