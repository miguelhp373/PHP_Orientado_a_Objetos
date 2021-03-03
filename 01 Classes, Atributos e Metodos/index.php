<?php

//objeto
class Pessoas{
    //atributos
    public $nome;
    public $idade;

    //metodo
    public function Falar(){
        echo 'Olá Eu Me Chamo '.$this->nome.' e Tenho '.$this->idade.' anos';
    }
}

$Jonas = new Pessoas();
$Jonas->nome = 'Jonas';//instância
$Jonas->idade = 17;
//var_dump($Jonas);
$Jonas->Falar();

?>