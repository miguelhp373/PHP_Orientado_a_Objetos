<?php
//Ocorrencia anormal que afeta o funcionamento da aplicação
//Exception é a classe base para todas Exceptions
//message, code, file, line

class NewsLetter{
    public function cadastrarEmail($email){
        
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new Exception("Este email é invalido",1);
        }else{
            echo "Email cadatrado com sucesso!";
        }

    }
}



$newsletter = new NewsLetter();

try{
    $newsletter->cadastrarEmail('contato@');
}catch(Exception $e){
    echo "Mensagem: ".$e->getMessage().
    " <br/> Arquivo: ".$e->getFile().
    "<br/> Código: ".$e->getCode().
    "<br/> Linha: ".$e->getLine();
    
}






?>