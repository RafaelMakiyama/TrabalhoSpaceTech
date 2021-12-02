<?php

class Movimentacao implements MovimentoConta{
    
    private $correntista;
    private $valor;

    public function __construct(Correntista $correntista,float $valor)
    {
        $this->correntista = $correntista;
        $this->valor = $valor;
    }

    public function getCPFCorrentista()
    {
        return $this->correntista->getCPFCliente();
    }

    public function getValorMovimento()
    {
        return $this->valor;
    }

}