<?php
  abstract class Banco{//classe abstrata //classe modelo
        protected $saldo;
        protected $limiteSaldo;
        protected $juros;

        public function setSaldo($s){
            $this->saldo = $s;
        }

        public function getSaldo(){
           return $this->saldo;
        }

        abstract protected function Sacar($s);

        abstract protected function Depositar($d);
    } 

    class Itau extends Banco{
        public function Sacar($s){
           $this->saldo -= $s; 
           echo '<br> Sacou R$:'.$s;
        }

        public function Depositar($d){
            $this->saldo += $d;
        }
    }

    $itau = new Itau();
    $itau->setSaldo(1000);
    echo "Saldo: R$".$itau->getSaldo();
    $itau->Sacar(200);
    echo "<br> Saldo: R$".$itau->getSaldo();
    $itau->Depositar(1000);
    echo "<br> Saldo: R$".$itau->getSaldo();


    
?>