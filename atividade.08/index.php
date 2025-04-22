<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 8</title>
</head>
<body>
    <h1>Conversão de Dólar para Real</h1>
    <?php
    $cotacao = 5.20;      
    $dolares = 100;        

    $reais = $cotacao * $dolares;
    echo "<p>Cotação do dólar: R$ " . $cotacao . "</p>";
    echo "<p>Quantidade de dólares: US$ " . $dolares . "</p>";
    echo "<h3>Total em reais: R$ " . $reais . "</h3>";
    ?>
</body>
</html>