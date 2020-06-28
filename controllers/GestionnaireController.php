<?php

    class GestionnaireController extends Controller{
        
        public  function __construct(){
            $this->folder="security";
            $this->layout="acceuil";
            $this->dao="ChambreDao";
            $this->validator=new Validator();  
        }

        public function index(){ 
            $this->view="defaut";
            $this->render();
        }

//ETUDIANT -- ETUDIANT -- ETUDIANT -- ETUDIANT -- ETUDIANT -- ETUDIANT -- ETUDIANT -- ETUDIANT --

        public function AddEtudiant(){
            $this->view="enregistrerEtudiant";
            $this->render();
        }

        public function GestionEtudiant(){
            $this->view="gestionEtudiant";
            $this->render();
        }

//CHAMBRE -- CHAMBRE -- CHAMBRE -- CHAMBRE -- CHAMBRE -- CHAMBRE -- CHAMBRE -- CHAMBRE -- CHAMBRE

        public function  AddChambre(){
            $this->view="enregistrerChambre";
            $this->render();
        }

        public function listerChambre(){
            $this->dao=new ChambreDao();
            $x= $this->dao->getChambre();
            return $x;
        }

        public function deleteChambre(){

            $id=$_POST["id_chambre"];
            $this->view="gestionChambre";
            $this->dao=new ChambreDao();
            $this->dao->deleteChambre($id);

            $this->render();
        }

        public function GestionChambre(){
            $chambre= $this->listerChambre();

            $this->view="gestionChambre";
            $this->data_view["chambre"]=$chambre;

            $this->render();
        }

        
    }