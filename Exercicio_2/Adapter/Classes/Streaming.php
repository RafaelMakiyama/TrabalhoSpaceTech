<?php
    // require_once '../autoload.php';
    class Streaming{
        private $conexao;

        public function __construct(IConnection $conexao){
            $this->conexao = $conexao;
        }

        public function listarFilmes(){
            $this->conexao->connection();
            $this->conexao->mostrar();
        }
    }
?>