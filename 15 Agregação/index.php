<?php
// na agregação, uma classe precisa de outra para executar sua ação, ou seja, uma classe utiliza outra como parte de si propria


class Produtos{
    public $nome;
    public $valor;

    function __construct($nome, $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
    }
}

class Carrinho{
    public $produtos;

    public function adicionar(Produtos $produto){
        $this->produtos[] = $produto;
    }

    public function exibe(){
        foreach($this->produtos as $produto){
            echo $produto->nome.'<br>';
            echo $produto->valor.'<hr>';
        }
    }
}

//cria dois produtos
$produto1 = new Produtos('Notebook','3000.90');
$produto2 = new Produtos('Mouse','350.80');

$carrinho = new Carrinho();
//adiciona ao carrinho
$carrinho->adicionar($produto1);
$carrinho->adicionar($produto2);

// mostra os produtos que estão no carrinho
$carrinho->exibe()

?>