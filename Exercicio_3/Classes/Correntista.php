<?php 

class Correntista{
    
    private $cpfCliente;
    private $saldo;

    public function __construct(String $cpfCliente, float $saldo)
    {
        $this->cpfCliente = $cpfCliente;
        $this->saldo = $saldo;
    }

    public function getCPFCliente()
    {
        return $this->cpfCliente;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($saldo)
    {
        $this->saldo += $saldo;
    }

}