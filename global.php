<?php

require_once __DIR__.'/app/config.php';

spl_autoload_register('carregarClasse');

function carregarClasse($nomeClasse)
{
    if (file_exists(__DIR__.'/classes/' . $nomeClasse . '.php')) {
        require_once __DIR__.'/classes/' .$nomeClasse . '.php';
    }
}