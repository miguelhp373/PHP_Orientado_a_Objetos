<?php
require_once('vendor/autoload.php');//inicia

use Cocur\Slugify\Slugify;

$slug = new Slugify();

echo $slug->slugify('hello Wolrd')//retorna hello-wolrd
//,'-'  parametro de separador

//o pacote slug é perfeito para gerar url amigavel




?>