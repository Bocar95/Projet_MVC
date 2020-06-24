<?php
class GestionetudiantController extends Controller{


    public  function __construct(){
        $this->folder="security";
        $this->layout="acceuil";
        $this->validator=new Validator();
      
     }
  
    public function GestionetudiantController(){
        $this->view="gestionEtudiant";
        $this->render();
    }

}