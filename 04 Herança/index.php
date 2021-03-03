<?php

class Veiculo{
    public $tipo;
    public $modelo;
    public $cor;
    public $ano;
    
    public function Especificacoes(){
        echo "Tipo: ".$this->tipo." | Modelo: ". $this->modelo." | Cor: ". $this->cor." | Ano: ".$this->ano."<br>";
    }

    public function Andar(){
        echo 'Andou';
    }
    public function Parar(){
        echo 'Parou';
    }
}

class Carro extends Veiculo{
    public function Ligarlimpador(){
        echo 'Limpando em 321';
    }
}


class Moto extends Veiculo{
    public function EmpinarMoto(){
        echo 'Empinando em 321';
    }
}

$carro = new Carro();
$carro->tipo = 'Carro';
$carro->modelo='Gol';
$carro->cor='vermelho';
$carro->ano='2012';

$carro->Especificacoes();

$carro = new Moto();
$carro->tipo = 'Moto';
$carro->modelo='Honda';
$carro->cor='dourada';
$carro->ano='2018';

$carro->Especificacoes();


?>