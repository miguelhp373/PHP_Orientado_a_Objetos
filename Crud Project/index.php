<?php
require_once('vendor/autoload.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<style>
    table,
    tr,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>

<body>
    <h1>Cadastrar Produto</h1>
    <form action="controller/Create.php" method="post">
        <input type="text" name="nome" id="nome" placeholder="nome do produto">
        <br>
        <input type="text" name="descricao" id="descricao" placeholder="descrição do produto">
        <br>
        <button type="submit">Enviar</button>
    </form>
    <hr>
    <?php

    $produto = new \App\Model\ProductDao();
    $produto->read();
    ?>
    <h1>Produtos Cadastrados</h1>
    <?php if ($produto->read() == []) { ?>
        <span>nenhum produto cadastrado</span>
    <?php } else { ?>
        <table>

            <tr>
                <td>codigo</td>
                <td>nome</td>
                <td>descrição</td>
            </tr>
            <?php foreach ($produto->read() as $item) { ?>
                <tr>
                    <td><?php echo $item['id']; ?></td>
                    <td><?php echo $item['nome']; ?></td>
                    <td><?php echo $item['descricao']; ?></td>

                </tr>
            <?php } ?>
        </table>

        <hr>
    <?php } ?>





    <h1>Editar Produtos Cadastrados</h1>

    <form action="controller/Update.php" method="post">
        <input type="text" name="produtoid" id="produtoid" placeholder="Código do produto">
        <input type="text" name="produtonome" id="produtonome" placeholder="Novo Nome do Produto">
        <input type="text" name="produtodescricao" id="produtodescricao" placeholder="Nova Descrição do Produto">
        <button type="submit">Enviar</button>
    </form>

    <hr>
    <h1>Apagar Produto Cadastrado</h1>

    
    <form action="controller/Delete.php" method="post">
        <input type="text" name="produtoid" id="produtoid" placeholder="Código do produto">
        <button type="submit">Enviar</button>
    </form>
</body>

</html>