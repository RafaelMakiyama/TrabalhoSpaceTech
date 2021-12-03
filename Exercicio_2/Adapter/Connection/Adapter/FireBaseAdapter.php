<?php

class FireBaseAdapter implements IConnection{

  private $firebase;

  public function __construct(Firebase $firebase){
    $this->firebase = $firebase;
  }

  public function connection()
  {
    $this->firebase->connection();
  }


  public function mostrar(){
    $this->firebase->mostrar();
  }

}