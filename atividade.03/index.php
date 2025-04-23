<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
</head>
<body>
    <form method="post">
        Qual a distância pecorrida:
        <input type="text" name="distotal"><br>
        Qual o total do combustível gasto:
        <input type="text" name="combustotal"><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $valor1 =  $_POST["distotal"];
            $valor2 =  $_POST["combustotal"];
    
            $consumomedio = $valor1 / $valor2;
            echo "Consumo médio é: $consumomedio <br>";
        }
    ?>
</body>
</html>