<?php

class DespesaMes{
    private int $mes;
    private float $valor;
    
    public function DespesaMes (int $mes, float $valor){
        $this->mes = $mes;
       $this->valor = $valor;

    }


    public function getMes()
    {
        return $this->mes;
    }

    public function setMes($mes)
    {
        $this->mes = $mes;

        return $this;
    }
    


    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }


}

?>
