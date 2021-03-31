# Composer

### Serve para usar bibliotecas de terceiros

---

Repositorios:

[https://packagist.org/](https://packagist.org/)

[https://www.php-fig.org/](https://www.php-fig.org/)

---

## Exemplo de Criação um repositorio composer

```powershell
composer init
Package name (<vendor>/<name>)[user/projeto]: usuarionome/nomedopacote
Description[]:
Author[, n to skip]: nome <email>
Minimum Stability[]:
Package Type[]:
License[]:

Define your dependencies(require).
[yes]?yes

Search for a package: dompdf/dompdf
latest version: 0.8.3 //automatico se vazio

confirm[yes]?

```

## Instalando um Pacote

```powershell
composer require nomedorepositorio/nomedopacote
```

## Remover pacotes

primeiro, remova a linha do pacote, no composer.json

```powershell
composer update
```

## Instalar Manualmente uma Biblioteca - Exemplo

composer.json

```json
{
	require:{
	   "cocur/slugify":"3.2"
	}
}
```

prompt

```powershell
composer install
```

index.php

```php
require_once('vendor/autoload.php')
```