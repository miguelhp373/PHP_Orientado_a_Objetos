<?php
namespace App\Model;
//DAO - Data Acess Object

//self é usado para acessar membros estáticos. parent::teste();



class Connection{
    
    private static $instance;

    public static function getConnection(){
        if(!isset(self::$instance)){
            self::$instance = new PDO('mysql:host=localhost;dbname=pdo;charset=utf8','root','root');
        }else{
            return self::$instance;
        }
    }
}

?>