<?php
class EnregistrerchambreController extends Controller{


    public  function __construct(){
        $this->folder="security";
        $this->layout="acceuil";
        $this->validator=new Validator();
      
     }
  
    public function EnregistrerchambreController(){
        $this->view="enregistrerChambre";
        $this->render();
    }

}