<?php
require_once('../vendor/autoload.php');

$nameProduct = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$descriptionProduct = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);

$produto = new \App\Model\Product();

$produto->setNome($nameProduct);
$produto->setDescricao($descriptionProduct);

$produtoDao = new \App\Model\ProductDao();
$produtoDao->create($produto);
