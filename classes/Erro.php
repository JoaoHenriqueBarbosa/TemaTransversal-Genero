<?php

class Erro
{
    public static function trataErro(Exception $e)
    {
        if (DEBUG) {
            echo '<pre>';
            print_r($e);
            echo '</pre>';
        } else {
            echo $e->getMessage();
        }
        exit;
    }

    public static function dumpVariavel($variavel)
    {
        if (DEBUG) {
            echo '<pre>';
            var_dump($e);
            echo '</pre>';
        }
        exit;
    }
}