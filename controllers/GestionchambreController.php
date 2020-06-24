<?php
class GestionchambreController extends Controller{


    public  function __construct(){
        $this->folder="security";
        $this->layout="acceuil";
        $this->validator=new Validator();
      
     }
  
    public function GestionchambreController(){
        $this->view="gestionChambre";
        $this->render();
    }

}