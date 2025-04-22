<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4</title>
</head>
<body>
    <?php 
    $nomevendedor = "Gui";
    echo "Vendedor: $nomevendedor <br>";

    $salariofixo = 2000;
    echo "Salário fixo: $salariofixo <br>";

    $totalvendas = 4000;
    echo "Total de vendas: $totalvendas <br>";


    $totalcomissao = $totalvendas * 0.15;
    echo "Comissão: $totalcomissao <br>";

    $salariofinal = $salariofixo + $totalcomissao;
    echo "Salário final: $salariofinal <br>";
    ?>
</body>
</html>