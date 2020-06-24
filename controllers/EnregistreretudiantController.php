<?php
class EnregistreretudiantController extends Controller{


    public  function __construct(){
        $this->folder="security";
        $this->layout="acceuil";
        $this->validator=new Validator();
      
     }
  
    public function EnregistreretudiantController(){
        $this->view="enregistrerEtudiant";
        $this->render();
    }

}