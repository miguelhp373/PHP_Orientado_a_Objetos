<?php
require 'classes/Produto.php';
require 'models/Produto.php';

use \Models\Produto as ProductModel;//apelido
use \Classes\Produto as ProductClasses;

$produto = new  ProductModel();
$produto->mostrarDetalhesdoProduto();
?>