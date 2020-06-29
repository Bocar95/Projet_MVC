<?php
    class GestionnaireController extends Controller{
        
        public  function __construct(){
            $this->folder="security";
            $this->layout="acceuil";
            $this->validator=new Validator();
        }

        public function index(){ 
            $etudiant= $this->listerEtudiant();

            $this->view="defaut";
            $this->data_view["etudiant"]=$etudiant;

            $this->render();
        }

//ETUDIANT -- ETUDIANT -- ETUDIANT -- ETUDIANT -- ETUDIANT -- ETUDIANT -- ETUDIANT -- ETUDIANT --

        public function AddEtudiant(){

            $this->dao="EtudiantDao";
            $this->view="enregistrerEtudiant";
            $this->render();

            if(isset($_POST['btn_save'])){
                extract($_POST);
                $this->dao = new EtudiantDao();
 
                 if($prenom==''){
                   $this->validator->isVide($prenom, 'prenom', 'Ce champ est obligatoire');
                 }elseif($nom==''){
                   $this->validator->isVide($nom, 'nom', 'Ce champ est obligatoire');
                 }elseif($telephone==''){
                    $this->validator->isVide($telephone, 'tel', 'Ce champ est obligatoire');
                  }elseif($mail==''){
                    $this->validator->isVide($mail, 'mail', 'Ce champ est obligatoire');
                  }elseif($date==''){
                    $this->validator->isVide($date, 'date', 'Ce champ est obligatoire');
                  }elseif($type==''){
                    $this->validator->isVide($type, 'type', 'Ce champ est obligatoire');
                  }else{
                     if($this->validator->isValid()){

                         $matricule= $this->AutomaticMatricule($prenom, $nom);
                         if ($type=="boursier_non_loger"){
                            $row = [
                                'matricule' => $matricule,
                                'prenom' => $prenom,
                                'nom' => $nom,
                                'telephone' => $telephone,
                                'mail' => $mail,
                                'date' => $date,
                                'type' => $type,
                                'type_bourse' => $type_bourse
                            ];
                         }

                        if ($type=="boursier_loger"){
                            $row = [
                                'matricule' => $matricule,
                                'prenom' => $prenom,
                                'nom' => $nom,
                                'telephone' => $telephone,
                                'mail' => $mail,
                                'date' => $date,
                                'type' => $type,
                                'type_bourse' => $type_bourse,
                                'chambre' => $chambre
                            ];
                        }

                        if ($type=="non_boursier"){
                            $row = [
                                'matricule' => $matricule,
                                'prenom' => $prenom,
                                'nom' => $nom,
                                'telephone' => $telephone,
                                'mail' => $mail,
                                'date' => $date,
                                'type' => $type,
                                'adresse' => $adresse
                            ];
                        }

                         $etudiant = new Etudiant($row);
                         //var_dump($chambre);
                         //die();
 
                         $result= $this->dao->add($etudiant);
                        if($result==1){
                        ?>
                           <script> alert ("l'ajout est fait avec success")</script>
                        <?php
                        }
                    }else{
                        $this->data_view['error']= $this->validator->getErrors();
                        $this->index();
                        }

                  }
            }
        }

        public function listerEtudiant(){

            $this->dao="EtudiantDao";
            $this->dao=new EtudiantDao();
            $y= $this->dao->getEtudiant();
            return $y;
        }

        public function GestionEtudiant(){
            $etudiant= $this->listerEtudiant();

            $this->view="gestionEtudiant";
            $this->data_view["etudiant"]=$etudiant;

            $this->render();
        }


//CHAMBRE -- CHAMBRE -- CHAMBRE -- CHAMBRE -- CHAMBRE -- CHAMBRE -- CHAMBRE -- CHAMBRE -- CHAMBRE

        public function  AddChambre(){

            $this->dao="ChambreDao";
            $this->view="enregistrerChambre";
            $this->render();

            if(isset($_POST['btn_save'])){
                
                extract($_POST);
                $this->dao = new ChambreDao();
 
                 if($numDep==''){
                   $this->validator->isVide($numDep, 'numDep', 'Ce champ est obligatoire');
                 }elseif($type==''){
                   $this->validator->isVide($type, 'type', 'Ce champ est obligatoire');
                 }else{
                     if($this->validator->isValid()){
 
                         $numCham= $this->AutomaticNumber($numDep);
                         $row = [
                             'numCham' => $numCham,
                             'numDep' => $numDep,
                             'type' => $type,
                         ];
                         $chambre = new Chambre($row);
                         //var_dump($chambre);
                         //die();
 
                         $result= $this->dao->add($chambre);
                         if($result!=1){
                        ?>
                           <script> alert ("l'insertion a echoué")</script>
                        <?php
                         }else{
                        ?>
                           <script> alert ("l'ajout est fait avec success")</script>
                        <?php
                            }
 
                         
                     }
                 }
             }else{
                 $this->data_view['error']= $this->validator->getErrors();
                 $this->index();
             }
 
        }

        public function listerChambre(){

            $this->dao="ChambreDao";
            $this->dao=new ChambreDao();
            $x= $this->dao->getChambre();
            return $x;
        }

        public function deleteChambre(){

            $id=$_POST["id_chambre"];
            $this->view="gestionChambre";
            $this->dao="ChambreDao";
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

        //generer automatiqument le numCham
        public function AutomaticNumber($numDep){

            if(strlen($numDep) == 1){

                $result= '00'.$numDep;

            }elseif(strlen($numDep) == 2){

                $result = '0'.$numDep;
            }

            return $result.'-'.rand(1000, 9999);
        }

        //generer automatiqument le matricule
        public function AutomaticMatricule($prenom, $nom){

            $result1= substr("$prenom", 0, 2);
            $result2 = substr("$nom", -2);

            return strtoupper(date('Y').'-'.$result1.'-'.$result2.'-'.sprintf("%'.04d",rand(0, 9999)));
        }

        
    }

    ?>