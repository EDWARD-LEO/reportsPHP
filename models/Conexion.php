<?php

class Conexion{

  //Atributos
  private $host = 'localhost';
  private $port = '3306';
  private $database = 'world';
  private $charset = 'UTF8';
  private $user = 'root';
  private $pass = '';

  //Representa objeto de conexión
  protected $pdo;
  
  public function connectServer(){
    $cn = new PDO("mysql:host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->database . ";charset=" . $this->charset, $this->user, $this->pass);
    return $cn;
  }

  public function getConexion(){
    try{
      $this->pdo = $this->connectServer();
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $this->pdo;
    }catch(Exception $e){
      die($e->getMessage());
    }
  }

}

?>