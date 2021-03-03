<?php

/* protected você usa quando quer extender uma classe, a propriedade ou a função, só podera ser usada em outro arquivo, mas não no codigo principal. Private só quando vc quiser usar dentro na mesma classe, como um metodo auxiliar, se vc estiver fazendo um CRUD e quiser apagar um usuario a partir do email dele, vc cria um metodo auxiliar para ver se o email existe ou nao, entao vc usa nas funções que estao executando o crud */


//Public - Fará que não haja ocultação nenhuma, toda propriedade ou metodo declarado como public serão acessiveis por todos que quiserem acessa-lás;

//Private - Ao contrário da Public, esse modificador faz com que qualquer método ou propriedade seja visivel só e somente pela classe que a declarou;

//Protected - Visiblidade Protected faz com que todos os herdeiros vejam as propriedades ou metódos protegidos com se fossem publicos;

class Veiculos{
    protected $modeloV;//metodo destinado quando se quer extender classes
    private $corVeiculo;//metodo destinado quando vai se usar dentro da propria classe
}

class Carro extends Veiculos{
    public function setModelo($model){
        $this->modeloV = $model;
    }

    public function getModelo(){
        return $this->modeloV;
    }
}

$Car = new Carro();
$Car-> setModelo("Modelo: gol");
echo $Car->getModelo()


?>