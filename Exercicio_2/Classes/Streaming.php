<?php
    require_once '../autoload.php';
    class Streaming{
        private $conexao;

        public function __construct(IConnection $conexao){
            $this->conexao = $conexao;
        }
    }
?>