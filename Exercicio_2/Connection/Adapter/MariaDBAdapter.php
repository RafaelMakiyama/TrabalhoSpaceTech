<?php
require_once('../../autoload.php');
class MariaDBAdapter implements IConnection{

  private $mariaDB;

  public function __construct(MariaDB $mariaDB){
    $this->mariaDB = $mariaDB;
  }

  public function connection()
  {
    $this->mariaDB->connectionMariaDB();
  }


  public function mostrar(){
    $this->mariaDB->mostrar();
  }

}