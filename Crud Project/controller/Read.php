<?php
require_once('../vendor/autoload.php');

$produtoDao = new \App\Model\ProductDao();
$produtoDao->read();