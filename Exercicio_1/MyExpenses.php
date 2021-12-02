<?php 

class MyExpenses
{
    public $cpf;

    public function __construct($cpf)
    {
    }

    public function getCpf(){
      return $this->cpf;
    }

    public function totalizaMes(int $mes)
    {
      //soma despesas
    }

    public function GravaInfos()
    {

    }
}