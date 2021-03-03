<?php

interface Crud{
    //metodos da interface sempre publicos
    public function Create($data, $tema, $noticia);//parametros quando necessario
    public function Read();
    public function Update();
    public function Delete();
}

class Noticias implements Crud{
    public function Create($data, $tema, $noticia)
    {
        //lógica para cria noticia
    }

    public function Read()
    {
        //lógica para ler noticia
    }

    public function Update()
    {
        //logica para atualizar noticia
    }

    public function Delete()
    {
        //logica para deletar a noticia
    }
}

?>