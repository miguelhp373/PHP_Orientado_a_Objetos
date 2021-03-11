<?php

class Pessoa{
    public $idade;

    public function __clone() //esse metodo mágico inicia quando usamos a palavra clone
    {
        echo "Clonagem de Objetos";
    }
}


$pessoa = new Pessoa();
$pessoa->idade = 17;

$pessoa2 = clone $pessoa; //pessoa 2 se torna clone de pessoa e retorna 17 e nao 35

echo $pessoa2->idade;
?>