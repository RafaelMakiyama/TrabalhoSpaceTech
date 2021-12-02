<?php
require_once('DespesaDia.php');

class DespesaMes{
    private int $mes;
    private float $valor;
    
    public function __construct (int $mes, float $valor)
    {
     $this->mes = $mes;   
     $this->valor = $valor;
    }

    public function getMes()
    {
        return $this->mes;
    }

    public function getValor()
    {
        return $this->valor;
    }

}

?>
