<?php
    class Login{
        private $email;
        private $senha;
        
        public function getEmail(){
            return $this->email;//pega o atributo
        }

        public function setEmail($em){
            $email = filter_var($em,FILTER_SANITIZE_EMAIL);
            $this->email = $email; //passa o valor do parametro para o atributo
        }

        public function getSenha(){
            return $this->senha;
        }

        public function setSenha($se){
            $this->senha = $se;
        }

        public function Logar(){
            if(($this->email == 'teste@teste.com')and($this->senha == '123456')){
                echo 'Logado com Sucesso';
            }else{
                echo 'Dados Invalidos';
            }
        }
    }

$Form = new Login();

$Form->setEmail('teste@teste.com');//define o conteudo do atributo pelo parametro do metodo
$Form->setSenha('123456') ;
$Form->logar();

//saida: Logado com sucesso

?>