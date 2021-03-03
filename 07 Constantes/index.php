<?php
 class Pessoa{
     const nome = 'Rodrigo';//consntante

     public function exibirNome(){
         //referenciar a constante dentro do escopo da classe
         echo self::nome;
     }
}

class Rodrigo extends Pessoa{
    const nome = 'Oliveira';
    public function exibirNome(){
        //referenciar a constante dentro do escopo da classe
        echo parent::nome;//refenencia a classe pai
    }

}

$pessoa = new Rodrigo();
$pessoa->exibirNome()
?>