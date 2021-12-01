<?php

    interface MovimentoConta {
        public function getCPFCorrentista();
        public function getValorMovimento();
    }

    interface OperacoesBanco {
        public function encontraCorrentista($todosCorrentistas = [], $cpfProcurado);
    }

    class Correntista
    {
        private $cpfCliente;
        private $saldo;

        public function __construct($cpfCliente, $saldo)
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
    
    class Movimentacao implements MovimentoConta
    {
        private $correntista;
        private $valor;

        public function __construct($correntista, $valor)
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

    class Operacoes implements OperacoesBanco
    {
        public function encontraCorrentista($todosCorrentistas = [], $cpfProcurado)
        {
            foreach($todosCorrentistas as $correntista) {
                if($correntista->getCPFCliente() == $cpfProcurado) {
                    return $correntista;
                }
            }
        }
    }

    $c1 = new Correntista('123.456.789-00', '2.00');
    $c2 = new Correntista('987.654.321-00', '5.00');
    $c3 = new Correntista('134.596.609-10', '10.00');

    $correntistas = [$c1, $c2, $c3];

    $m1 = new Movimentacao($c1, '500.71');
    $m2 = new Movimentacao($c2, '912.85');

    $movimentacaoConta = [$m1, $m2];

    $operacao = new Operacoes;

    movimentarConta($correntistas, $movimentacaoConta, $operacao);



    function movimentarConta($correntistas = [], $movimentacaoConta = [], $operacao)
    {

        foreach($movimentacaoConta as $movimentacao) {

            $correntista = $operacao->encontraCorrentista($correntistas, $movimentacao->getCPFCorrentista());
            $correntista->setSaldo($movimentacao->getValorMovimento());

            $arquivo = fopen($correntista->getCPFCliente() . ".txt", "w+");
            fwrite($arquivo, serialize($correntista));
            fclose($arquivo);

        }

    }



?>