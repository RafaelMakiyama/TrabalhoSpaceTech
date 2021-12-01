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
            $this->saldo = $saldo;
        }

    }
    
    class Movimentacao implements MovimentoConta
    {
        private $correntista;
        private $valor;

        public function __construct($correntista, float $valor)
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
            if($this->valor < 0) {
                return 'debito';
            }

            return 'credito';
        }
    }

    class Operacoes implements OperacoesBanco
    {
        public function encontraCorrentista($todosCorrentistas = [], $cpfProcurado)
        {
            return array_search($cpfProcurado,$todosCorrentistas);
        }
    }

    $c1 = new Correntista(rand(10000000,999999999), '2.00');
    $c2 = new Correntista(rand(10000000,999999999), '5.00');
    $c3 = new Correntista(rand(10000000,999999999), '10.00');

    $correntistas = [$c1, $c2, $c3];

    $m1 = new Movimentacao($c1, '500.71');
    $m2 = new Movimentacao($c2, '912.85');

    echo 'oi';

    $movimentacaoConta = [$m1, $m2];

    $operacao = new Operacoes;

    movimentarConta($correntistas, $movimentacaoConta, $operacao);



    function movimentarConta($correntistas = [], $movimentacaoConta = [], $operacao)
    {
        var_dump('aqui');
    //     foreach($movimentacaoConta as $movimentacao) {

    //         echo "$movimentacao <br>";


    //         // $arquivo = fopen("gerentes.txt", "c+");
    //         // $gerentes = file_get_contents("gerentes.txt");
    //         // $gerentes = json_decode($gerentes, true);
    //         // $gerentes[] = $gerente;
    //         // $objeto = json_encode($gerentes);                        
    //         // fwrite($arquivo, $objeto);
    //         // fclose($arquivo);



    //     }
    }



?>