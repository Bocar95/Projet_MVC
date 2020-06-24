<?php
class SecurityController extends Controller{

   public  function __construct(){
      $this->folder="security";
      $this->layout="acceuil";
      $this->validator=new Validator();
    
   }

    public function index(){
        $this->view="defaut";
         $this->render();
    }
    
}