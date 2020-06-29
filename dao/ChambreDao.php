<?php

    class ChambreDao extends Manager{


        public function __construct(){

            $this->tableName='chambre';
            $this->className='Chambre';
            $this->colone='id';
        }

        public function getChambre(){
            return $this->findAll();
        }

        public function add($obj){

            $numCham = $obj->getNumCham();
            $numDep = $obj->getNumDep();
            $type =   $obj->getType();

            $sql = "INSERT INTO chambre(numCham, numDep, type) 
                    VALUES ('$numCham', '$numDep', '$type')";
            $data = $this->executeUpdate($sql);

            return $data;

        }

        public function update($obj){

        }

        public function deleteChambre($id){
            return $this->delete($id);
        }
    }