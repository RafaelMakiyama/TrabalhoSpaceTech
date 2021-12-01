<?php
    function pegaClasse($nomeClasse){
        require_once($nomeClasse . ".php");
    }

    spl_autoload_register("pegaClasse");
?>