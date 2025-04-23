<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor_total = $_POST["valor_total"];
        $prestacoes = 5 ;
        $valor_prestacao = $valor_total / $prestacoes;

        echo "O valor da prestação é: R$ " . number_format($valor_prestacao, 2, ',', '.');
    }
?>
<form method="post">
    Valor da compra : <input type="text" name="valor_total"><br>
    <input type="submit" value="calcular prestações">
</form>
</body>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor_total = $_POST["valor_total"];
        $prestacoes = 5 ;
        $valor_prestacao = $valor_total / $prestacoes;

        echo "O valor da prestação é: R$ " . number_format($valor_prestacao, 2, ',', '.');
    }
?>
<form method="post">
    Valor da compra : <input type="text" name="valor_total"><br>
    <input type="submit" value="calcular prestações">
</form>
</body>
>>>>>>> 9da9367c6d9b7df7aa849072c573a9defe306582
</html>