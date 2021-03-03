<?php
class Login{
    public static $user;

    //this nao funciona com membros estáticos;
    public static function verificaLogin(){
        echo 'O Usuario '.self::$user.' está Logado';
    }

    public function sairSistema(){
        echo '<br> Usuario Deslogado';
    }
}
$login = new Login();
Login::$user = 'Admin';
Login::verificaLogin();//metodos e atributos estáticos se referenciam assim
$login->sairSistema();

?>