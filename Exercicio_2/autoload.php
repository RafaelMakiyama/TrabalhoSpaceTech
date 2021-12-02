<?php

spl_autoload_register(
    
    function($nomeDaClasse){

        $directory = array('Classes', 'Connection', 'Connection'.DIRECTORY_SEPARATOR.'Adapter');

        foreach ($directory as $current_dir)
        {
            $caminho = $current_dir.DIRECTORY_SEPARATOR.$nomeDaClasse . '.php';

            if (file_exists($caminho) ) {
                require_once($caminho);
            }

        }
    }
    
);