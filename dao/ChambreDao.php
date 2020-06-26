<?php

class ChambreDao extends Manager {

    public function __construct(){
        $this->tableName="chambre";
        $this->className="Chambre";
    }

    public function getChambre(){
        return $this->findAll();
    }

    public function deleteChambre(){
        return $this->delete();
    }

}