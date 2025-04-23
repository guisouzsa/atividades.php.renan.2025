<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 6</title>
</head>
<body>
    <?php
    $a = 10;
    $b = 5;

    echo "Valores não trocados<br>";
    echo "A: $a <br>";
    echo "A: $b <br><br>";


    $temporario = $a;
    $a = $b;
    $b = $temporario;

    
    echo "Depois da troca: <br>";
    echo "A = $a <br>";
    echo "B = $b <br>";
    ?>
</body>
</html>