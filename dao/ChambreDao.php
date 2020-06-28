<?php

    class ChambreDao extends Manager{


        public function __construct(){

            $this->tableName='chambre';
            $this->className='Chambre';
            $this->colone='id_chambre';
        }

        public function getChambre(){
            return $this->findAll();
        }

        public function add($obj){  

        }

        public function update($obj){

        }

        public function deleteChambre($id){
            return $this->delete($id);
        }
    }