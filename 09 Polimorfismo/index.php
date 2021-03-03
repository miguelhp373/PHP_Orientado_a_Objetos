<?php
    class Animal{
        public function Andar(){
            echo 'o animal andou';
        }

        public function Correr(){
            echo 'o animal Correu';
        }
    }

    //O poliformismo é simplesmente reescrever ou escrever um metodo herdado da classe pai

    class Cavalo extends Animal{
        public function Andar(){
            $this->Correr();
        }
    }

    $animal = new Cavalo();
    $animal->Andar();
?>