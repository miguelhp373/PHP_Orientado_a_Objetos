<?php
//clone
//construct
//invoke
//get
//set


//__GET and __SET

class Person{
    private $data = array();

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        return $this->data[$name];
    }

    public function __toString()//tenta executar um object
    {
        return '1';
    }


    public function __invoke()//executa quando tenta utilizar o objeto como função
    {
        return '2';
    }
}

$pessoa = new Person;
$pessoa->name = 'joao';
$pessoa->sex = 'male';
$pessoa->age = '17';

echo $pessoa->name;
echo $pessoa->sex;
echo $pessoa->age;

echo $pessoa



?>