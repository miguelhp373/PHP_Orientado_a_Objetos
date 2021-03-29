<?php
// na composição a classe cria a instancia de outra classe dentro de si própria, sendo assim , quando a classe for destruida ela tambem será

//criou uma classe pessoa, com metodo atribui nome qiue retorna uma frase com o nome da pessoa
class Pessoa{
    public function atribuiNome($nome){
        return 'Nome da pessoa é '.$nome;
    }

}

// cria uma classe que exibe o nome, atributos pessoa, que serve para instanciar a classe pessoa, e o nome para instanciar o nome, depois metodo construct para instanciar nova pessoa e nome, depois metodo exibe nome, instancia o metodo atribui metodo da classe pessoa e passa o parametro nome;

class Exibe{
    public $pessoa;
    public $nome;

    function __construct($nome)
    {
        $this->pessoa = new Pessoa();
        $this->nome = $nome;
    }

    public function exibeNome(){
        echo $this->pessoa->atribuiNome($this->nome);
    }
}

$pessoa1 = new Exibe('josé'); //define nome na classe exibe
$pessoa1->exibeNome();//mostra o nome instanciado do metodo, dentro da classe exibe






?>