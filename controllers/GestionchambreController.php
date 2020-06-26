<?php

class GestionchambreController extends Controller{

    public  function __construct(){
        $this->folder="security";
        $this->layout="acceuil";
        $this->validator=new Validator(); 
    }

    public function listerChambre(){
        $this->dao=new ChambreDao();
        $x= $this->dao->getChambre();
        return $x;
    }

    public function supprimerChambre(){
        $this->dao=new ChambreDao();
        $y= $this->dao->deleteChambre();
    }
  
    public function GestionchambreController(){
        // pour Lister
        $chambre= $this->listerChambre();
        // fin lister
        // affichage view gestionChambre
        $this->view="gestionChambre";
        $this->data_view["chambre"]=$chambre;

        $this->render();
        // fin affichage
    }
    
    public function modifierChambre(){
        //
    }

}