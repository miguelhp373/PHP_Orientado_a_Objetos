<?php
//acontece quando um objeto "utiliza" outro, mas sem que dependam do outro

class Pedido
{
    public $NumeroPedido;
    public $cliente;
}

class Cliente
{
    public $NomeCli;
    public $Endereco;
}

$cliente = new Cliente();
$cliente->NomeCli = "Jones Silver";
$cliente->Endereco = "Acacia Avenue, 666";

$pedido = new Pedido();
$pedido->NumeroPedido = '002';
$pedido->cliente = $cliente;

$dados = [
    'codPedido' => $pedido->NumeroPedido,
    'nomeCliente' => $pedido->cliente->NomeCli,
    'enderecoCliente' => $pedido->cliente->Endereco
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associação</title>
</head>
<style>
    table,
    thead,
    tr, td{
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>

<body>
    <table>
        <thead>
            <h2>Dados Clientes</h2>
        </thead>
        <tbody>

            <?php foreach ($dados as $id => $value) { ?>
                <tr>
                    <td> <?php echo $id; ?></td>
                    <td> <?php echo $value; ?></td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</body>

</html>