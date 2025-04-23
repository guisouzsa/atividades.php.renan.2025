<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>
<body>
    <form method="post">
        Me diga um número:
        <input type="text" name="number1"><br>
        Me diga outro número:
        <input type="text" name="number2"><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $valor1 =  $_POST["number1"];
            $valor2 =  $_POST["number2"];

            $soma = $valor1 + $valor2;
            echo "Soma: $soma <br>"; 

            $subtracao = $valor1 - $valor2;
            echo "Subtração: $subtracao <br>";

            $divisao = $valor1 / $valor2;
            echo "Divisão: $divisao <br>";

            $multiplicacao = $valor1 * $valor2;
            echo "Multiplicação: $multiplicacao <br>";
        }
    ?>
        
</body>
</html>