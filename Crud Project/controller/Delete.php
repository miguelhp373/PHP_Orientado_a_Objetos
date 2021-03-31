<?php
require_once('../vendor/autoload.php');




$cod = filter_input(INPUT_POST,'produtoid',FILTER_SANITIZE_STRING);
$nameProduct = filter_input(INPUT_POST, 'produtonome', FILTER_SANITIZE_STRING);
$descriptionProduct = filter_input(INPUT_POST, 'produtodescricao', FILTER_SANITIZE_STRING);

$produto = new \App\Model\Product();
$produto->setId($cod);

$produtoDao = new \App\Model\ProductDao();
$produtoDao->delete($produto);