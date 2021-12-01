<?php
require_once('../../autoload.php');
class FireBaseAdapter implements IConnection{

  private $firebase;

  public function __construct(FireBaseAdapter $firebase){
    $this->firebase = $firebase;
  }

  public function connection()
  {
    $this->firebase->connectionFireBase();
  }


  public function mostrar(){
    $this->firebase->mostrar();
  }

}