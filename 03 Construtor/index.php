<?php
//metodo mágico __construct

class LoginUser{
    private $email;
    private $senha;
    private $nome;
    
    public function __construct($email, $senha, $nome){
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    public function getNome($no){
        $nome = filter_var($no,FILTER_SANITIZE_STRING);
        $this->nome= $nome;

    }

    public function setNome(){
        return $this->nome;
    }

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

$Form = new LoginUser('teste@teste.com','123456','Jonas');
$Form->logar();

//saida: Logado com sucesso
?>