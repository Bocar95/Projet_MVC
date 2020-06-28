<?php

    class Chambre implements IApplication{

        protected $numero;
        protected $numDep;
        protected $type;
        protected $id;



        //Le constructeur

        public function __construct($row=null){

            if($row!=null){
                $this->hydrate($row);
            }

        }

        public function hydrate($row){

            $this->numero= $row['numCham'];
            $this->numDep= $row['numDep'];
            $this->type=   $row['type'];
            $this->id=   $row['id'];
               
        }

        //les getters

        public function getNumCham(){
            return $this->numero;
        }

        public function getNumDep(){
            return $this->numDep;
        }

        public function getType(){
            return $this->type;
        }

        public function getidCham(){
            return $this->id;
        }

        //les setters
        public function setNumCham($numero){

            $this->numero=$numero;
        }

        public function setNumDep($numDep){

            $this->numDep=$numDep;
        }

        public function setType($type){

            $this->type=$type;
        }
        public function setidCham($id){

            $this->id=$id;
        }

    }