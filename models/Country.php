<?php

require_once 'Conexion.php';

class Country extends Conexion{

  private $acceso;

  public function __CONSTRUCT(){
    $this->acceso = parent::getConexion();
  }

  public function getCountryForContinent($continent = ''){
    try{
      $query = $this->acceso->prepare("CALL spu_country_list_by_continent(?)");
      $query->execute(array($continent));

      return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(Exception $e){
      die($e->getMessage());
    }
  }

}

?>