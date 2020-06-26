<?php
abstract class Manager implements IDao{

    private $pdo=null;
    protected $tableName;
    protected $className;
    protected $id;

  private function getConnexion(){
      if($this->pdo==null){
          try{
            $this->pdo = new PDO("mysql:host=localhost;dbname=allocation","root","");
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
          }catch(PDOException $ex){
             die("Erreur de Connexion");
          }
      }
  }

  private function closeConnexion(){
    if($this->pdo!=null){
      $this->pdo=null;
    }
  }

  public function executeUpdate($sql){
    $this->getConnexion();
     $nbreLigne= $this->pdo->exec($sql);
    $this->closeConnexion();
    return $nbreLigne;
  }

  public function executeSelect($sql){

    $this->getConnexion();

    $result=$this->pdo->query($sql);
    $data=[];
    foreach( $result as $rowBD){
      //ORM=> tuple BD transformer en Objet
      $data[]=new $this->className($rowBD);//new User($rowBD)     
    }
    $this->closeConnexion();
    return $data;

  }

  public function findAll(){
    $sql="select * from $this->tableName";
    $data=$this->executeSelect($sql);
    return $data;
  }

  public function delete(){
    $sql="delete from $this->tableName where id=$this->id=".setidCham($id_chambre);
    $data= $this->executeUpdate($sql)!=0;
    return $data;
  }
    
}